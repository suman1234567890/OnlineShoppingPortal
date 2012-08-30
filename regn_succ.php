<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
</style>
</head>
<body>
</body>
<?php
include "connect.class";

$con= new connect();
$con=$con->constring();

$sql="INSERT INTO userdata(UserName, UserPass,email,address,phone) VALUES ('$_POST[Username]','$_POST[Userpass]','$_POST[Email]','$_POST[Address]','$_POST[Phone]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

echo "Successfully Registered!";



mysql_close($con);
?>