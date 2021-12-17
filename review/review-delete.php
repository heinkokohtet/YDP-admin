<?php 

	include('../config.php');

	$review_id = $_GET['review_id'];
	$sql = "DELETE FROM reviews WHERE review_id = $review_id";

	mysqli_query($conn, $sql);

	header('location: review-list.php');