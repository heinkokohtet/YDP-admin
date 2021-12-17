<?php 

	include('../config.php');

	$visitor_id = $_GET['visitor_id'];
	$sql = "DELETE FROM visitors WHERE visitor_id = $visitor_id";

	mysqli_query($conn, $sql);

	header('location: visitor-list.php');