<?php
include '../Config/config1.php';
include '../Config/config.php';
include '../Config/connect.php';

 $IDUser = ($_POST["IDUser"]);
 $Names = ($_POST["Names"]);
 $Address = ($_POST["Address"]);
 $Email = ($_POST["Email"]);
 $Role = ($_POST["Role"]);
 $Activate = ($_POST["Activate"]);
		 																															
$query2= $dbo->query("UPDATE user SET name='$Names', address='$Address',e-mail='$Email' ,role='$Role',activate='$Activate' WHERE userid='$IDUser'");
					if($query2){
	 echo "<script>alert('Profile Updated')</script>";
 	 echo "<script>location.href='../UserProfile.php? id=$IDUser'</script>";
 }else{
	 echo "<script>alert('No Profile Updated')</script>";
	 echo "<script>location.href='../UserProfile.php? id=$IDUser'</script>";
}
		
	?>
