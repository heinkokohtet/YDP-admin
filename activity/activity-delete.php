<?php 

	include('../config.php');

	$activity_id = $_GET['activity_id'];
	$sql = "DELETE FROM activities WHERE activity_id = $activity_id";

	mysqli_query($conn, $sql);

	header('location: activity-list.php');