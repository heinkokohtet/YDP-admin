<?php 

	include('../config.php');

	$course_id = $_POST['course_id'];
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
		
		$sql = "UPDATE courses SET course_name='$course_name', photo='$photo', start_date='$start_date', end_date='$end_date', duration='$duration', start_at='$start_at', end_at='$end_at', learning_id='$learning_id' WHERE course_id = $course_id";


	} 
	else 
	{
		$sql = "UPDATE courses SET course_name='$course_name', start_date='$start_date', end_date='$end_date', duration='$duration', start_at='$start_at', end_at='$end_at', learning_id='$learning_id' WHERE course_id = $course_id";

	}

	
	mysqli_query($conn, $sql);

	header('location: course-list.php');