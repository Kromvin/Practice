<?php
	require("constant.php");
	$conn = mysqli_connect("localhost","Krom", "") or die(mysqli_connect_error());
	mysqli_select_db ( $conn , "userlistdb" ) or die("Cannot select DB");
?>.