======================================================
Booking Calendar Lite v1.2

http://www.kreci.net/code/booking-calendar-lite/
------------------------------------------------------


Description:

Calendar with possibility to mark if resources for some date are free or not. There are 3 options:
"Reserved", "Occupied", "Free" (it may be customized in admin panel). Calendar is generated by the script
and it let users to go through years back and forward. Calendar days are displayed regarding the 
real dates (feb 29!). Administrator can mark dates just by clicking on one of the calendar cell's.
Script is written in PHP (with MySQL) and JavaScript. When you install it you may link directly
to calendar or include it in your web page (via PHP or SSI).

Features:

 * Easy navigation - unlimited back/forward by years.
 * Real dates (feb 29!).
 * Admin area for easy administration - click date to select.
 * Support for language customization.
 * Possibility to include in any .php page.
 * Possibility to easy translate months and states to any language.

Installation:

1. Unpack downloaded archive.
2. Prepare new MySQL database.
3. CHMOD following files to be writeable by Apache (if unsure please set 777):
   mysql.inc.php, conf.inc.php, lang.inc.php.
4. Execute "install.php" by opening it in your web browser (http://yourserver/yourpath/install.php) and follow
   the instructions.
5. Don't forget to remove "install.php" from your server when setup is done!
6. To access calendar, open "calendar.php" file. Admin area may be accesed via "admin.php". Additionaly you
   may include "calendar.php" in any of your php pages (as in attached example file "index.sample.php").

Updating (since version 1.1):

1. Backup your current files.
2. Unpack new version.
3. Copy these files from your backup "mysql.inc.php", "conf.inc.php", "lang.inc.php" to your new version
   directory (overwrite if necessary).
4. Remove "install.php" from your new version directory.

Changelog:

 * Version 1.0b  - first script release
 * Version 1.0.1 - improved language support
 * Version 1.1   - improved installation script, all settings may be changed in admin panel
                   (no need to edit configuration files in notepad as in previous versions),
                   possibility to disable copyright notice (Powered by...), optimized MySQL queries,
                   some code cleanup.
 * Version 1.2   - code optimization and cleanup, fixed character encoding in admin panel,
                   fixed rss channel display when unreachable

License:

Booking Calendar Lite is under GPL licence from the Free Software Foundation. The code is provided �as-is�
and in no event shall the copyright owner or contributors be liable for any direct, indirect, incidental,
special, exemplary, or consequential damages.
