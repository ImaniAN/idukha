<?php
// Start the session
session_start();


include '../config/config.php';
include '../config/config1.php';
include '../config/connect.php';

 $UName = ($_POST["Username"]);
 $PW = ($_POST["Password"]);
 $PassWord=0;
 $UserName=0;
$quer= mysql_query("SELECT * FROM user where username='$UName' AND	passwourd='$PW'");
while($ss = mysql_fetch_array($quer))
	{
	$UserName=$ss['username'];
	$PassWord=$ss['passwourd'];
	$userid=$ss['userid'];
	$name=$ss['name'];
	$profilepicture=$ss['profilepicture'];
	$IDBranch=$ss['IDBranch'];
	$role=$ss['role'];
	}

if($PassWord!=$PW || $UserName!=$UName ){
echo "<script>alert('Incorrect UserName or Password')</script>";
echo "<script>location.href='../index.php'</script>";
}
else
{
$_SESSION["Id"]=$userid;
$_SESSION["name"]=$name;
$_SESSION["profilepicture"]=$profilepicture;
$_SESSION["IDBranch"]=$IDBranch;
$_SESSION["role"]=$role;

?>

<!--<script>
var person = prompt("Please enter your name", "Harry Potter");
if (person != null) {
    document.getElementById("demo").innerHTML =
    "Hello " + person + "! How are you today?";
}
</script>-->
<script>location.href='../dashboard.php'</script>"; -->	

<?php } ?>
