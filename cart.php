<html>
<head><title>List of Item you selected </title></head>
<body>
<?php
include("header.php");include("menu.php");

if(isset($_SESSION['UserName']))
{
if($_GET['action'] =="view")
{
$cart = $_SESSION['CartItem'];
/*
echo $_SESSION['CartItem'];
echo '<br>';
echo $_SESSION['carttable'];
*/
if ($cart) 
{

if($_SESSION['CartCount'] == 1)
	 $items[0]=$_SESSION['CartItem'];
else	 
$items = explode(',',$cart);
$contents = array();
foreach ($items as $item) 
{
$contents[$item] = (isset($contents[$item])) ? $contents[$item] + 1 : 1;
}
}
else
{
	header('Location:Accessories.php');
}
$carttable=$_SESSION['carttable'];
//print_r($carttable);
//print_r($items);
//print_r($contents);

echo '<div style="padding-left:450px;padding-top:0px">';
echo '<table style="background-image:url(images/back_4.jpg);width:55%""><tr><td width="100" class="style3"><b>Item Name </td><td width="100" class="style3"><b>Quantity</td><td width="120" class="style3"><b>Item Price(in Rs)</td><td width="150"  align="center" class="style3"><b>Item Image</td></tr>';

$sum=0;
for($i=0;$i<count($contents);$i++)
{

	  $Itemname=key($contents);
	  $Itemprice=$carttable[key($contents)][0];
	  $Itemurl=$carttable[key($contents)][1];

echo '<tr>';
echo '<td width="100">'.$Itemname.'</td><td width="100">'.$contents[key($contents)].'</td><td width="120">'.$Itemprice.'</td><td width:"222" align="center" ><img src='.$Itemurl.' width="122" />';
echo '<td><a href="cart.php?action=del&id='.$Itemname.'&price='.$Itemprice.'&url='.$Itemurl.'" class="style3">Remove</a></td>';
echo '</tr>';
 $sum=$sum+$contents[key($contents)]*$Itemprice;
  next($contents);
}
echo '<tr><td><b>TOTAL</td><td><b>AMOUNT</td><td width="100"><U><B>'.$sum.'.00</td><td><a href="OrderStatus.php?action=ref" class="style3">Buy Now!</a></td></tr></table></div>';
}
else
{
$cart = $_SESSION['CartItem'];
if($_GET['action']=="add")
{

if($cart)
{
$cart.=",".$_GET['id'];
}
else
{
$cart=$_GET['id'];
}
$_SESSION['CartItem']=$cart;
$_SESSION['CartCount']=$_SESSION['CartCount']+1;


$carttable=$_SESSION['carttable'];
if($carttable)
{
$k=0;
/*
while($k<count($carttable))
{
if($carttable[$k][0]==$_GET['id']);
*///array_push($carttable,array($_GET['id'],$_GET['price'],$_GET['url']));
   $carttable[$_GET['id']]=array($_GET['price'],$_GET['url']);
//}
}
else
$carttable=array($_GET['id']=>array($_GET['price'],$_GET['url']));
$_SESSION['carttable']=$carttable;

header('Location:index.php');
}
else
{
if($_GET['action']=="del")
	{

	if ($cart) {
$items = explode(',',$cart);

$newcart = '';
$flag=0;
foreach ($items as $item) {
if ($_GET['id'] != $item) {
if ($newcart != '') {
$newcart .= ','.$item;
} else {
$newcart = $item;
}
}

else
{
	if($flag)
	{
if ($newcart != '') {
$newcart .= ','.$item;
} else {
$newcart = $item;
}
	}
else
{
$_SESSION['CartCount']=$_SESSION['CartCount']-1;
$flag=1;
}
}
}
$cart = $newcart;
$_SESSION['CartItem']=$cart;

if($_SESSION['CartCount']==0)
$_SESSION['CartItem']=$_SESSION['Carttable']="";
}
else
header('Location:Accessories.php');
}

//echo $_SESSION['CartItem'];
header('Location:cart.php?action=view');
}
}

}
else
{
	//$_SESSION['To']=$_GET['To'];
	//$_SESSION['id']=$_GET['id'];
header('Location:Login.php');
}
include("footer.php");
?>
</body>
</html>