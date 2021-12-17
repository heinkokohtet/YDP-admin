<?php 

	include('../config.php');

	$coursecategory_id = $_GET['coursecategory_id'];
	$sql = "DELETE FROM coursecategories1 WHERE coursecategory_id = $coursecategory_id";

	mysqli_query($conn, $sql);

	header('location: coursecategory1-list.php');
