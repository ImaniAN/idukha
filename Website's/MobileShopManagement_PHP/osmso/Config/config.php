

<?php
mysql_connect("127.0.0.1", "root", "") or die(mysql_error());
mysql_select_db("hellophones") or die(mysql_error());
?>

<?Php

//session_start();
$dbhost_name = "localhost";
$database = "hellophones";// database name
$username = "root"; // user name
$password = ""; // password 

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}

?>

