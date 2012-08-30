
<?php session_start();?>
<link href="style.css" rel="stylesheet" type="text/css">
<div style="padding-left:700px; padding-top:0px">
<table width="310"  border="0" cellspacing="0" cellpadding="0" >
                <tr align="left" valign="middle">
                  <td width="12"><a href="#"><img alt=""  src="images/point_1.jpg" width="7" height="5" vspace="5" border="0"></a></td>
                  <td width="30"><a href="index.php" class="style1">Home</a></td>
                  
                  <td width="12"><a href="#"><img alt=""  src="images/point_1.jpg" width="7" height="5" border="0"></a></td>
                  <td width="90"><a href="cart.php?action=view" class="style1">view cart (<?php if(isset($_SESSION['CartCount'])) echo $_SESSION['CartCount']; else echo "0";?> items)</a></td>
                  <td width="12"><a href="#"><img alt=""  src="images/point_1.jpg" width="7" height="5" border="0"></a></td>
                  <?php
				  if(isset($_SESSION['UserName']) || isset($_SESSION['Admin']))
				  echo '<td width="35"><a href="Logout.php" class="style1">Logout</a></td>';
				  else
				  echo '<td width="35"><a href="Login.php" class="style1">Login</a></td>';
				  ?>
                  
                  <td width="12"><img alt=""  src="images/point_1.jpg" width="7" height="5" border="0"></td>
                  <td><a href="OrderStatus.php" class="style1">order status</a></td>
                </tr>
</table></div>

