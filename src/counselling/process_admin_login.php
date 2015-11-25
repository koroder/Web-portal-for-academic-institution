
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php 
$temp_user = $_POST["username"]; 
$temp_pass = $_POST["password"];


if($temp_pass== "admin123" && $temp_user== "admin")
{
header( "Location: admin_welcome.php");
exit(1);
$return = 1;
echo $return;
}
else
{
header( "Location: loginfail.php");
exit(1);
$return = 0;
echo $return;
}
?>




</body>
</html>
