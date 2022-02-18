<?php
// Start the session
session_start();
?>
<?php

include '../Config/config.php';
include '../Config/config1.php';
include '../Config/connect.php';

 $InvoiceNumber = ($_POST["InvoiceNumber"]);
 $IDProduct = ($_POST["IDProduct"]);
 $Price = ($_POST["Price"]);
 $QuatityInStore = ($_POST["QuatityInStore"]);
 $Quantity2 = ($_POST["Quantity2"]);
 $TotalPrice2 = ($_POST["TotalPrice2"]);
 $AmountPaid = ($_POST["AmountPaid"]);
 $Balance = ($_POST["Balance"]);
 $ClientName = ($_POST["ClientName"]);
 $ClientPhone = ($_POST["ClientPhone"]);
 $date2 = ($_POST["date2"]);
 
 $IDUSer = ($_SESSION["Id"]);
 $IDBranch = ($_SESSION["IDBranch"]);
 $idd = ($_SESSION["Idpro"]);
// $BalanceSender=0;
// $BalanceReceiver=0;
 
// $quer= mysql_query("SELECT DISTINCT quantity FROM product where productid='$IDProduct'");
//while($i = mysql_fetch_array($quer))
//	{
//	$QtyInStore=$i['quantity'];
//	}
	
 if($QuatityInStore>=$Quantity2)
 {
$query ="INSERT INTO sales (`IDProduct`, `Price`, `QuatityInStore`, `QuantitySold`, `TotalPrice`, `AmountPaid`, `Balance`, `ClientName`, `PhoneNumber`, `SaleDate`, `IDInvoice`, `IDUSer`, `IDBranch`) VALUES ('$IDProduct','$Price','$QuatityInStore','$Quantity2','$TotalPrice2','$AmountPaid','$Balance','$ClientName','$ClientPhone','$date2','$InvoiceNumber','$IDUSer', '$IDBranch')"; 
 $row="mysql_num_rows($query)";
 
 $NewQty=$QuatityInStore-$Quantity2;
 
 $querii= $dbo->query("UPDATE product SET quantity='$NewQty' WHERE productid='$IDProduct'");
 
 mysql_query($query)or die(mysql_error());
 if(mysql_affected_rows()>=1)
 {
	echo "<script>alert('Products is Successfuly Sold')</script>";
	echo "<script>location.href='../ViewProductToSale.php'</script>";

 }
 else
 {
	echo "<script>alert('Products is not Successfuly Sold')</script>";
	echo "<script>location.href='../ViewProductToSale.php'</script>";
 } 
 }
else
 {
echo "<script>alert('You do not have enough Product')</script>";
echo "<script>location.href='../AddNewSales.php?id=$idd'</script>";
 }
 ?>
