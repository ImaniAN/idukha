<?php

// Start the session
session_start();
$userid = $_SESSION["Id"];
$name = $_SESSION["name"];
$pr = $_SESSION["profilepicture"];
include 'config/config.php';
include 'config/config1.php';
include 'config/connect.php';

$message = $_POST['sms'];
$userid = $_POST['userid'];
$time = time();

mysql_query("INSERT INTO mail (`IDMail`, `IDUser`, `Time`, `Message`)  VALUES('','$userid','$time','$message')")  or die("error in insert please".mysql_error());

echo "
  <ul  class=\"chat\" >
		<li   class=\"left clearfix\">
			<span class=\"chat-img pull-left\">
				<img  style=\"width:50px; height:50px;  border-radius:100%;\"src=\"assets/img/Profile_Uploaded/$pr\" alt=\"User Avatar\" class=\"img-circle\" />
			</span>
			<div class=\"chat-body clearfix\">
				<div class=\"header\">
					<strong class=\"primary-font \"> $name </strong>
					<small class=\"pull-right text-muted label label-info\">
						<i class=\"icon-time\"></i> 12 mins ago
					</small>
				</div>
				 <br />
				<p>
					$message
				</p>
			</div>
		</li>
		
		</ul>
";
?>