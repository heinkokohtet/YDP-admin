<?php 

	include('../config.php');

	$courseteacher_id = $_POST['courseteacher_id'];
	$course_id = $_POST['course_id'];
	$teacher_id = $_POST['teacher_id'];


	$sql = "UPDATE courseteacherdetail SET course_id = '$course_id', teacher_id = '$teacher_id' WHERE courseteacher_id = $courseteacher_id";

	mysqli_query($conn, $sql);

	header('location: courseteacher-list.php');