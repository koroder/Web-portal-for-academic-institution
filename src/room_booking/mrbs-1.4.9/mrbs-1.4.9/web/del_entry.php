<?php
// $Id: del_entry.php 2338 2012-07-18 10:54:42Z cimorrison $

// Deletes an entry, or a series.    The $id is always the id of
// an individual entry.   If $series is set then the entire series
// of wich $id is a member should be deleted. [Note - this use of
// $series is inconsistent with use in the rest of MRBS where it
// means that $id is the id of an entry in the repeat table.   This
// should be fixed sometime.]

require "defaultincludes.inc";
require_once "mrbs_sql.inc";

// Get non-standard form variables
$id = get_form_var('id', 'int');
$series = get_form_var('series', 'int');
$returl = get_form_var('returl', 'string');
$action = get_form_var('action', 'string');
$note = get_form_var('note', 'string', '');

// Check the user is authorised for this page
checkAuthorised();

if (empty($returl))
{
  switch ($default_view)
  {
    case "month":
      $returl = "month.php";
      break;
    case "week":
      $returl = "week.php";
      break;
    default:
      $returl = "day.php";
  }
  $returl .= "?year=$year&month=$month&day=$day&area=$area";
}

if ($info = mrbsGetBookingInfo($id, FALSE, TRUE))
{
  $user = getUserName();
  // check that the user is allowed to delete this entry
  if (isset($action) && ($action="reject"))
  {
    $authorised = auth_book_admin($user, $info['room_id']);
  }
  else
  {
    $authorised = getWritable($info['create_by'], $user, $info['room_id']);
  }
  if ($authorised)
  {
    $day   = strftime("%d", $info["start_time"]);
    $month = strftime("%m", $info["start_time"]);
    $year  = strftime("%Y", $info["start_time"]);
    $area  = mrbsGetRoomArea($info["room_id"]);
    // Get the settings for this area (they will be needed for policy checking)
    get_area_settings($area);
    
    $notify_by_email = $mail_settings['on_delete'] && $need_to_send_mail;

    if ($notify_by_email)
    {
      require_once "functions_mail.inc";
      // Gather all fields values for use in emails.
      $mail_previous = mrbsGetBookingInfo($id, FALSE);
      // If this is an individual entry of a series then force the entry_type
      // to be a changed entry, so that when we create the iCalendar object we know that
      // we only want to delete the individual entry
      if (!$series && ($mail_previous['rep_type'] != REP_NONE))
      {
        $mail_previous['entry_type'] = ENTRY_RPT_CHANGED;
      }
    }
    sql_begin();
    $result = mrbsDelEntry(getUserName(), $id, $series, 1);
    sql_commit();
    // [At the moment MRBS does not inform the user if it was only able to
    // delete some members of a series but not all.    This could happen for
    // example if a booking policy is in force thgat prevents the deletion of entries
    // in the past.   It would be better to inform the user that the operation has only
    // been partially successful]
    if ($result)
    {
      // Send a mail to the Administrator
      if ($notify_by_email)
      {
        // Now that we've finished with mrbsDelEntry, change the id so that it's
        // the repeat_id if we're looking at a series.   (This is a complete hack, 
        // but brings us back into line with the rest of MRBS until the anomaly
        // of del_entry is fixed) 
        if ($series)
        {
          $mail_previous['id'] = $mail_previous['repeat_id'];
        }
        if (isset($action) && ($action == "reject"))
        {
          $result = notifyAdminOnDelete($mail_previous, $series, $action, $note);
        }
        else
        {
          $result = notifyAdminOnDelete($mail_previous, $series);
        }
      }
      Header("Location: $returl");
      exit();
    }
  }
}

// If you got this far then we got an access denied.
showAccessDenied($day, $month, $year, $area, "");
?>
