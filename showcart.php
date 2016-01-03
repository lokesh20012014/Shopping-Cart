<?php
session_start();
require('connect.php');
require("header.php");
require("functions.php");
echo "<h1>Your shopping cart</h1>";
showcart();
if(isset($_SESSION['SESS_ORDERNUM'])) {
	$sess_ordernum=$_SESSION['SESS_ORDERNUM'];
$sql = "SELECT * FROM `shopping`.`orderitems` WHERE order_id =$sess_ordernum";
$result = mysqli_query($success, $sql) or die(mysqli_error());
$numrows = mysqli_num_rows($result);
if($numrows >= 2) {
echo "<h2><a href='checkout-address.php'>Go to the checkout</a></h2>";
}
}
require("footer.php");
?>
