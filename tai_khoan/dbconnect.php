<?php

	$conn = mysqli_connect("localhost","root","Duy360690Truc<3","database_web") or die("Databse không kết nối được");
	$conn->query("SET NAMES 'utf8mb4'");
	$conn->query("SET CHARACTER SET UTF8MB4");
	$conn->query("SET SESSION collation_connection = 'utf8mb4_unicode_ci'");
?>