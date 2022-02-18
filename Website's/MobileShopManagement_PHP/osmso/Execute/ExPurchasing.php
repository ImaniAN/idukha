<?php
// Start the session
session_start();
?>
<?php

include '../Config/config.php';
include '../Config/config1.php';
include '../Config/connect.php';


 $IDProduct = ($_POST["IDProduct"]);
 $Price = ($_POST["Price"]);
 $Quantity2 = ($_POST["Quantity2"]);
 $TotalPrice2 = ($_POST["TotalPrice2"]);
 $SupplierName = ($_POST["SupplierName"]);
 $SupplierPhone = ($_POST["SupplierPhone"]);
 $date2 = ($_POST["date2"]);
 
 $IDUSer = ($_SESSION["Id"]);
 $idd = ($_SESSION["Idpro"]);
 $IDBranch = ($_SESSION["IDBranch"]);
// $BalanceSender=0;
// $BalanceReceiver=0;
 
$quer= mysql_query("SELECT DISTINCT quantity FROM product where productid='$IDProduct'");
while($i = mysql_fetch_array($quer))
	{
	$QuatityInStore=$i['quantity'];
	}
	
$query ="INSERT INTO purchase (`IDProduct`, `Quantity`, `Price`, `TotalPrice`, `SupplierName`, `SupplierPhone`, `Date`, `IDUser`, `IDBranch`) 
VALUES ('$IDProduct','$Quantity2','$Price','$TotalPrice2','$SupplierName','$SupplierPhone','$date2','$IDUSer','$IDBranch')"; 
 $row="mysql_num_rows($query)";
 
 $NewQty=$QuatityInStore+$Quantity2;
 
 $querii= $dbo->query("UPDATE product SET quantity='$NewQty' WHERE productid='$IDProduct'");
 
 mysql_query($query)or die(mysql_error());
 if(mysql_affected_rows()>=1)
 {
	echo "<script>alert('Products is Successfuly Added')</script>";
	echo "<script>location.href='../ViewProductToPurchase.php'</script>";

 }
 else
 {
	echo "<script>alert('Products is not Successfuly Added')</script>";
	echo "<script>location.href='../ViewProductToPurchase.php'</script>";
 } 

 ?>
