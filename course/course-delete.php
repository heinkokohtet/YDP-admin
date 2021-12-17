<?php 

	include('../config.php');

	$course_id = $_GET['course_id'];
	$sql = "DELETE FROM courses WHERE course_id = $course_id";

	mysqli_query($conn, $sql);

	header('location: course-list.php');
