<?php
// Start the session
session_start();
?>
<?php

include '../Config/config.php';
include '../Config/config1.php';
include '../Config/connect.php';

 $ProductName = ($_POST["ProductName"]);
 $BrandName = ($_POST["BrandName"]);
 $ProductPrice = ($_POST["ProductPrice"]);
 $Quantity = ($_POST["Quantity"]);
 $TotalPrice = ($_POST["TotalPrice"]);
 $DisplaySize = ($_POST["DisplaySize"]);
 $OperatingSystem = ($_POST["OperatingSystem"]);
 $Processor = ($_POST["Processor"]);
 $InternalMemory = ($_POST["InternalMemory"]);
 $RAM = ($_POST["RAM"]);
 $CameraDescription = ($_POST["CameraDescription"]);
 $BatteryLife = ($_POST["BatteryLife"]);
 $Weight = ($_POST["Weight"]);
 $Model = ($_POST["Model"]);
 $Dimension = ($_POST["Dimension"]);
 $ASIN = ($_POST["ASIN"]);
 $date2 = ($_POST["date2"]);
 $Description = ($_POST["Description"]);
 $ProductImage = ($_FILES["ProductImage"]["name"]);
 $IDUSer = ($_SESSION["Id"]);
 $IDBranch = ($_SESSION["IDBranch"]);
 
 $status = "Available";

$query ="INSERT INTO 
		product(`product_name`, `brand`, `price`, `quantity`, `TotalPrice`, `displaysize`, `operatingsystem`, `Processor`, `InternalMemory`, `RAM`, `cameradescription`, `batterylife`, `weight`, `model`, `dimension`, `ASIN`, `description`, `flaturedimage`, `status`, `date`, `IDUser`, `IDBranch`) 
		VALUES ('$ProductName', '$BrandName','$ProductPrice','$Quantity', '$TotalPrice','$DisplaySize', '$OperatingSystem', '$Processor', '$InternalMemory','$RAM','$CameraDescription','$BatteryLife', '$Weight','$Model', '$Dimension','$ASIN', '$Description', '$ProductImage','$status','$date2','$IDUSer','$IDBranch')";
 $row="mysql_num_rows($query)";

 mysql_query($query)or die(mysql_error());
 
 if(mysql_affected_rows()>=1){
	echo "<script>alert('The product is successfully added')</script>";
	echo "<script>location.href='../AddNewProduct.php'</script>";

 }else{
	echo "<script>alert('the product is not successfully added')</script>";
	echo "<script>location.href='../AddNewProduct.php'</script>";

 } 
 ?>
  <?php
$target_dir = "../assets/img/Product_Uploaded/";
$target_file = $target_dir . basename($_FILES["ProductImage"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
move_uploaded_file($_FILES["ProductImage"]["tmp_name"], $target_file);    
?>
