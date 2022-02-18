<?php
include 'Config/config1.php';

 $Idd = ($_GET["id"]);
 //$Accept = "Activated";
		 																															
$query= $dbo->query("UPDATE agent SET Status='Activated' WHERE ID='$Idd'");
					if($query){
	 echo "<script>alert('Account Activated')</script>";
 	 echo "<script>location.href='../Agents_List.php'</script>";
 }else{
	 echo "<script>alert('No record Activated')</script>";
	 echo "<script>location.href='../Agents_List.php'</script>";
}
		
	?>
