<?php 

	include('../config.php');

	$coursecategory_id = $_POST['coursecategory_id'];
	$coursecategory_name = $_POST['coursecategory_name'];
	$course_id = $_POST['course_id'];

	$sql = "UPDATE coursecategories SET coursecategory_name = '$coursecategory_name', course_id='$course_id' WHERE coursecategory_id = $coursecategory_id ";

	mysqli_query($conn, $sql);

	header('location: coursecategory-list.php');
