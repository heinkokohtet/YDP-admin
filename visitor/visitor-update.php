<?php 

	include('../config.php');

	$visitor_id = $_POST['visitor_id'];
	$visitor_name = $_POST['visitor_name'];
	$email = $_POST['email'];
	$phone_no = $_POST['phone_no'];
	$address = $_POST['address'];
	$description = $_POST['description'];	

	$sql = "UPDATE visitors SET visitor_name='$visitor_name', email='$email', phone_no='$phone_no', address='$address', description='$description' WHERE visitor_id = $visitor_id";

	mysqli_query($conn, $sql);

	header('location: visitor-list.php');