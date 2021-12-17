<?php 

	include('../config.php');

	$coursecategory_name = $_POST['coursecategory_name'];
	$course_id = $_POST['course_id'];

	$sql = "INSERT INTO coursecategories (coursecategory_name, course_id) VALUES ('$coursecategory_name','$course_id')";

	mysqli_query($conn, $sql);

	header('location: coursecategory-list.php');
	