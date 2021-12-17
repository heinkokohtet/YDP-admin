<?php

	include('../config.php');

	$review_name = $_POST['review_name'];

	$photo = $_FILES['photo']['name'];
	$tmp = $_FILES['photo']['tmp_name'];

	$batch_name = $_POST['batch_name'];
	$review = $_POST['review'];

	if($photo)
	{
		move_uploaded_file($tmp, "photos/$photo");
	}

	$sql = "INSERT INTO reviews (review_name, photo, batch_name, review) VALUES ('$review_name', '$photo', '$batch_name', '$review')";

	mysqli_query($conn, $sql);

	header('location: review-list.php');