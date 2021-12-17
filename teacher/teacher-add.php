<?php

	include('../config.php');

	$teacher_name = $_POST['teacher_name'];

	$profile = $_FILES['profile']['name'];
	$tmp = $_FILES['profile']['tmp_name'];

	$position = $_POST['position'];
	$email = $_POST['email'];
	$phone_no = $_POST['phone_no'];

	if($profile)
	{
		move_uploaded_file($tmp, "./profiles/$profile");
	}

	$sql = "INSERT INTO teachers (teacher_name, profile, position, email, phone_no) VALUES ('$teacher_name', '$profile', '$position', '$email', '$phone_no')";

	mysqli_query($conn, $sql);

	header('location: teacher-list.php');