<?php 

	include('../config.php');

	$visitorcoursedetail_id = $_POST['visitorcoursedetail_id'];
	$visitor_id = $_POST['visitor_id'];
	$course_id = $_POST['course_id'];

	$sql = "UPDATE visitorcoursedetail SET visitor_id = '$visitor_id', course_id = '$course_id' WHERE visitorcoursedetail_id = $visitorcoursedetail_id";

	mysqli_query($conn, $sql);

	header('location: visitorcoursedetail-list.php');