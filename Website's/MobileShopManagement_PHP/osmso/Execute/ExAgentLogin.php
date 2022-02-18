<?php
// Start the session
session_start();
?>
<?php


include 'Config/config.php';
include 'Config/config1.php';
include 'Config/connect.php';

 $UName = ($_POST["UserName"]);
 $PW = ($_POST["Password"]);
 $PassWord='';
 $UserName='';
 $Status='';
 $Id='';
$quer= mysql_query("SELECT * FROM agent where UserName='$UName' AND	Password='$PW'");
while($ss = mysql_fetch_array($quer))
	{
	$UserName=$ss['UserName'];
	$PassWord=$ss['Password'];
	$Id=$ss['ID'];
	$CompanyName=$ss['CompanyName'];
	$ManagingDirector=$ss['ManagingDirector'];
	$ProfileImage=$ss['ProfileImage'];
	$Status=$ss['Status'];
	}

if($PassWord!=$PW || $UserName!=$UName ){
echo "<script>alert('Incorrect UserName or Password')</script>";
echo "<script>location.href='../Agentlogin.php'</script>";
}
else if($Status!='Activated'){

echo "<script>alert('You Account is Desactivated!, PLZ Contact the Administrator')</script>";
echo "<script>location.href='../Agentlogin.php'</script>";
}
else
{
$_SESSION["IdAgent"]=$Id;
$_SESSION["CompanyName"]=$CompanyName;
$_SESSION["ManagingDirector"]=$ManagingDirector;
$_SESSION["UserName"]=$UserName;
$_SESSION["AgentProfileImage"]=$ProfileImage;

echo "<script>location.href='../Agent_Dashboad.php'</script>";
 } 
 ?>
