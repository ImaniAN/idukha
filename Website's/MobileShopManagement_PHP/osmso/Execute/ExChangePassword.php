<?php
// Start the session
session_start();
?>
<?php
include '../Config/config1.php';
include '../Config/config.php';
include '../Config/connect.php';

 $Id = ($_POST["IDUser"]);
 $CurrentPassword = ($_POST["CurrentPassword"]);
 $NewPassword = ($_POST["NewPassword"]);
 
 $PassWord=0;
 $quer= mysql_query("SELECT DISTINCT passwourd FROM user where userid='$Id'");
while($ss = mysql_fetch_array($quer))
	{
	$PassWord=$ss['passwourd'];
	}
if($PassWord!=$CurrentPassword){
echo "<script>alert('Incorrect Current Password')</script>";
echo "<script>location.href='../UserProfile.php? id=$Id'</script>";
}
else
{
		 																															
$query= $dbo->query("UPDATE user SET passwourd='$NewPassword' WHERE userid='$Id'");
					if($query){
	 echo "<script>alert('Password Updated')</script>";
 	 echo "<script>location.href='../UserProfile.php? id=$Id'</script>";
 }else{
	 echo "<script>alert('No Password Updated')</script>";
	 echo "<script>location.href='../UserProfile.php? id=$Id'</script>";
}
	}	
	?>
