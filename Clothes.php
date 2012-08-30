<html>
<head><title>Clothes</title> 
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include("header.php");include("menu.php");?>

<?php

include "connect.class";
$con= new connect();
$con=$con->constring();
$sql="select * from Clothes";
$sql=mysql_query($sql);

echo '<div style="padding-left:450px;padding-top:0px">';
echo '<table style="background-image:url(images/back_4.jpg);width:55%""><tr><td width="100" class="style3"><b>Item Name </td><td width="120" class="style3"><b>Item Price(in Rs)</td><td width="150"  align="center" class="style3"><b>Item Image</td></tr>';


while($row=mysql_fetch_array($sql))
{
echo '<tr>';
echo '<td width="100">' .$row['ItemName'].'</td><td width="120">'.$row['ItemPrice'].'</td><td width:"222" align="center" ><img src='.$row['ItemUrl'].'  width="122" />';
echo '<td><a href="cart.php?action=add&id='.$row['ItemName'].'&To=Clothes&price='.$row['ItemPrice'].'&url='.$row['ItemUrl'].'" class="style3">Add to Cart</a></td>';
echo '</tr>';

}
echo '</table></div>';	
mysql_close($con);
?>

<?php include("footer.php"); ?>

</body>
</html>