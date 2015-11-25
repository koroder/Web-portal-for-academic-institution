



<?php $user= $_COOKIE["uid"]; ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<?php
echo $user;
echo $choice1=$_POST["choice1"];  echo "<br/>";
echo $choice2=$_POST["choice2"];  echo "<br/>";
echo $choice3=$_POST["choice3"];  echo "<br/>";
echo $choice4=$_POST["choice4"];  echo "<br/>";
echo $choice5=$_POST["choice5"];  echo "<br/>";
echo $choice6=$_POST["choice6"];  echo "<br/>";
echo $choice7=$_POST["choice7"];  echo "<br/>";
echo $choice8=$_POST["choice8"];  echo "<br/>";
echo $choice9=$_POST["choice9"];  echo "<br/>";
echo $choice10=$_POST["choice10"];  echo "<br/>";

$con = mysql_connect("localhost","root","");
if(!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("test", $con);

$update= mysql_query("UPDATE `sign_up` SET `choice1`='$choice1',`choice2`='$choice2',`choice3`='$choice3',`choice4`='$choice4',`choice5`='$choice5',`choice6`='$choice6',`choice7`='$choice7',`choice8`='$choice8',`choice9`='$choice9',`choice10`='$choice10' WHERE `userid`='$user'");

header( "Location: welcome_c.php");
exit(1);
?>
<body>
</body>
</html>
