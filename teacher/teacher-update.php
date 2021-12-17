<?php 

	include('../config.php');

	$teacher_id = $_POST['teacher_id'];
	$teacher_name = $_POST['teacher_name'];

	$profile = $_FILES['profile']['name'];
	$tmp = $_FILES['profile']['tmp_name'];
	
	$position = $_POST['position'];
	$email = $_POST['email'];
	$phone_no = $_POST['phone_no'];
	
	if($profile)
	{
		move_uploaded_file($tmp, "./profiles/$profile");
		
		$sql = "UPDATE teachers SET teacher_name = '$teacher_name', profile = '$profile', position = '$position', email = '$email', phone_no = '$phone_no' WHERE teacher_id = $teacher_id";

	} 
	else 
	{
		$sql = "UPDATE teachers SET teacher_name = '$teacher_name', position = '$position', email = '$email', phone_no = '$phone_no' WHERE teacher_id = $teacher_id";

	}
	

	mysqli_query($conn, $sql);

	header('location: teacher-list.php');