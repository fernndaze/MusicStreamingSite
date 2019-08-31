<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("America/New_York");

  $con = mysqli_connect("sql2.njit.edu", "ef62", "94DSURMa", "ef62");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>