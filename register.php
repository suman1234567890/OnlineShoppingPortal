
<html>
<head><Title>Register</Title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<script type="text/javascript">
function validate()
{
var x=document.forms["regn"]["username"].value
if (x==null || x=="")
  {
  alert("First name must be filled out");
  return false;
  }
x=document.forms["regn"]["password"].value
if (x==null || x=="" || x.length<4)
  {
  alert("Password should be atleast 4 Letters");
  return false;
  }
x=document.forms["regn"]["mail"].value
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
x=document.forms["regn"]["Address"].value
if (x==null || x=="" )
  {
  alert("Address must be filled out");
  return false;
  }
x=document.forms["regn"]["Phone"].value
if (x==null || x=="" )
  {
  alert("Phone Number must be filled out");
  return false;
  }

}
</script>
</head>
<body>
<?php include("header.php")?>
<form name="regn" onSubmit="return validate();" action="regn_succ.php" method="post">
<div style="padding-left:420px;padding-top:100px">
<table style="background-image:url(images/back_4.jpg)" width="50%">
<tr>
<td style="background-image:url(images/browse.jpg)" class='style3'><b> Username </b> </td>
<td><input type="text" name="Username" id="Username"/></td>
</tr>
<tr>
<td style="background-image:url(images/browse.jpg)" class='style3'><b> Password </b> </td>
<td ><input type="password" name="Userpass" id="Userpass" /></td>
</tr>
<td style="background-image:url(images/browse.jpg)" class='style3'><b> Confirm Password </b> </td>
<td><input type="password" name="Usercpass" id="Usercpass" /></td>
</tr>
<tr>
<td style="background-image:url(images/browse.jpg)" class='style3'><b>Email</b> </td>
<td><input type="text" name="Email" id="Email" /></td>
</tr>
<tr>
<td style="background-image:url(images/browse.jpg)" class='style3'><b>Address </b> </td>
<td><input type="text" name="Address" id="Address" /></td>
</tr>
<tr>
<td style="background-image:url(images/browse.jpg)" class='style3'><b>Phone </b> </td>
<td><input type="text" name="Phone" id="Phone" /></td>
</tr>
<tr><td></td><td> <input input type="submit" value="Register" /> </td>
<td style="background-image:url(images/browse.jpg)" ></td>
</tr>
</table>
</div>
</form>
<?php
include("footer.php") ?>

</body>
</html>

