<?php
// Start the session
session_start();
?>
<?php

include '../Config/config.php';
include '../Config/config1.php';
include '../Config/connect.php';

 $BranchName = ($_POST["BranchName"]);
 $Address = ($_POST["Address"]);


$query ="INSERT INTO 
		blanch (`BranchName`, `Address`) 
		VALUES ('$BranchName', '$Address')";
 $row="mysql_num_rows($query)";

 mysql_query($query)or die(mysql_error());
 
 if(mysql_affected_rows()>=1){
	echo "<script>alert('The Blanch  is successfully Created')</script>";
	echo "<script>location.href='../Settings.php'</script>";

 }else{
	echo "<script>alert('the Blanch is not successfully Created')</script>";
	echo "<script>location.href='../Settings.php'</script>";

 }
 ?>
