<html>
<body>
<?php
//echo $_POST['dc'];
//give in the query here to update db for DC
$course_reg[0]="CSL101";
$course_reg[1]="CSL201";
$course_reg[2]="CSP315";
$course_reg[3]="HUL287";
$course_reg[4]="SML301";

//store all courses of user in $course_reg array
header( "Location: course_reg.php?course_reg=".serialize($course_reg));
exit(1);

?>
</body>
</html>