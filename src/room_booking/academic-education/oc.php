<html>
<body>
<?php
//echo $_POST['dc'];
//give in the query here to update db of OC
$course_reg_oc[0]="CSL101";
$course_reg_oc[1]="CSL201";
$course_reg_oc[2]="CSP315";
$course_reg_oc[3]="HUL287";
$course_reg_oc[4]="check301";

//store all courses of user in $course_reg array
header( "Location: course_reg.php?course_reg_oc=".serialize($course_reg_oc));
exit(1);

?>
</body>
</html>