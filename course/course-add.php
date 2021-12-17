<?php 

	include('../config.php');

	$course_name = $_POST['course_name'];

	$photo = $_FILES['photo']['name'];
	$tmp = $_FILES['photo']['tmp_name'];

	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];
	$duration = $_POST['duration'];
	/*$price = $_POST['price'];*/
	$start_at = $_POST['start_at'];
	$end_at = $_POST['end_at'];
	// $coursecategory_id = $_POST['coursecategory_id'];
	$learning_id = $_POST['learning_id'];

	if($photo)
	{
		move_uploaded_file($tmp, "./photos/$photo");
	}		

	$sql = "INSERT INTO courses (course_name, photo, start_date, end_date, duration, start_at, end_at, learning_id) VALUES ('$course_name', '$photo', '$start_date', '$end_date', '$duration', '$start_at', '$end_at', '$learning_id') ";

	mysqli_query($conn, $sql);

	header('location: course-list.php');
	