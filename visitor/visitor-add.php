<?php

	include('../config.php');

	$visitor_name = $_POST['visitor_name'];
	$email = $_POST['email'];
	$phone_no = $_POST['phone_no'];
	$address = $_POST['address'];
	$description = $_POST['description'];

	$sql = "INSERT INTO visitors (visitor_name, email, phone_no, address, description) VALUES ('$visitor_name', '$email', 
	'$phone_no', '$address', '$description')";

	mysqli_query($conn, $sql);

	header('location: visitor-list.php');