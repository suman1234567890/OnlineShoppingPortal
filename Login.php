
<link href="style.css" rel="stylesheet" type="text/css">

<html>
<head><title>Login</title></head>

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


<body>

<?php include("header.php")?>
<?php ?>
<?php 


if($_POST)
{

include "connect.class";
$con= new connect();
$con=$con->constring();

$sql = "select * from  userdata where UserName='".$_POST['Username']."' and UserPass='".$_POST['Userpass']."'";
$sql = mysql_query($sql);

if(mysql_num_rows($sql))
{
$_SESSION['UserName']=$_POST['Username'];
$_SESSION['CartCount']=0;
$_SESSION['CartItem']="";
if(isset($_SESSION['To']))
header("Location:cart.php?action=add&id=".$_SESSION['id']);
else
header("Location:index.php");

}
else
echo '<div style="padding-left:500px;padding-top:10px"><b> Invalid Username and Password</div>';
}
?>

<?php include("menu.php")?>


<form action="Login.php" method="post">
<div style="padding-left:420px;padding-top:100px">
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
<td style="background-image:url(images/browse.jpg)" ><a href="register.php" class="style3"> New User? </a></td>
</tr>
</table>
</div>
</form>

<?php
include("footer.php") ?>

</body>
</html>