<?php
// Start the session
session_start();
?>

<?php


include '../config/config.php';
include '../config/config1.php';
include '../config/connect.php';

 $UName = ($_POST["Username"]);
 $PW = ($_POST["Password"]);
 $PassWord=0;
 $UserName=0;
$quer= mysql_query("SELECT * FROM user where user_name='$UName' AND	password='$PW'");
while($ss = mysql_fetch_array($quer))
	{
	$UserName=$ss['user_name'];
	$PassWord=$ss['password'];
	$id_user=$ss['id_user'];
	$names=$ss['names'];
	}

if($PassWord!=$PW || $UserName!=$UName ){
echo "<script>alert('Incorrect UserName or Password')</script>";
echo "<script>location.href='../index.php'</script>";
}
else
{
$_SESSION["Id"]=$id_user;
$_SESSION["names"]=$names;
?>

<script>location.href='../dashboad.php'</script>"; -->	

<?php } ?>
