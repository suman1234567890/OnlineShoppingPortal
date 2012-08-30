<html>
<head><title>Welcome Administrator</title>
<script type="text/javascript">

function BlankCheck()
{
if(document.getElementById('Username').value=="" || document.getElementById('Userpass').value=="" || document.getElementById('Usercpass').value=="")
{
alert("Invalid input");
return false;
}
else
{
if(document.getElementById('Userpass').value != document.getElementById('Usercpass').value)
{
	alert("Password & Confirm password doesnt match");
	return false;
}
	
}
return true;
}

</script>


</head>
<body>


<?php include("header.php") ?>
<div style="padding-left:450px; padding-top:50px">
<b> Please Login with the Administrator Username & Password </b>
</div>
<form action="Admin.php" method="post">
<div style="padding-left:420px;padding-top:10px">
<table style="background-image:url(images/back_4.jpg)" width="50%">
<tr>
<td style="background-image:url(images/browse.jpg)"><b> Username </b> </td>
<td><input type="text" name="Username" id="Username"/></td>
</tr>
<tr>
<td style="background-image:url(images/browse.jpg)"><b> Password </b> </td>
<td ><input type="password" name="Userpass" id="Userpass" /></td>
</tr>
<tr>
<td style="background-image:url(images/browse.jpg)"><b> Confirm Password </b> </td>
<td><input type="password" name="Usercpass" id="Usercpass" /></td>
</tr>
<tr><td></td><td> <input type="Submit" value="Login" name="UserLogin" onClick="return BlankCheck();"/> </td>
</tr>
</table>
</div>


<?php

if(isset($_SESSION['Admin']))
include ("AdminRef.php");

if($_POST)
{

include "connect.class";
$con= new connect();
$con=$con->constring();

$sql = "select Sno from  userdata where UserName='".$_POST['Username']."' and UserPass='".$_POST['Userpass']."'";
$sql = mysql_query($sql);

$sql=mysql_fetch_array($sql);
if($sql['Sno'] == 1)
{
$_SESSION['Admin']=$_POST['Username'];
header('Location:Admin.php');
}
else
echo '<div style="padding-left:500px;padding-top:10px"><b> Invalid Username and Password</div>';
}
?>
<div style="padding-left:450px;padding-top:50px">
<?php

if(isset($_POST['Update']))
{

include "Query.class";
$query_update = new  Query();
$query_update->update("UPDATE OrderInProcess SET Status='$_POST[stadisplay]' where Sno='$_POST[refdisplay]' ");
}
else
{
if(isset($_POST['Check']))
{
include "Query.class";
$query_check= new Query();
$query_check->ViewCheck("select * from OrderInProcess where Sno=$_POST[ref]");

}

}
?>

</div>

</form>
</body>

</html>