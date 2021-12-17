<?php

	include('../config.php');

	$review_id = $_POST['review_id'];
	$review_name = $_POST['review_name'];

	$photo = $_FILES['photo']['name'];
	$tmp = $_FILES['photo']['tmp_name'];

	$batch_name = $_POST['batch_name'];
	$review = $_POST['review'];

	

	if($photo)
	{
		move_uploaded_file($tmp, "photos/$photo");

		$sql = "UPDATE reviews SET review_name='$review_name', photo='$photo', batch_name='$batch_name', review='$review' WHERE review_id=$review_id ";

	}
	else
	{
		$sql = "UPDATE reviews SET review_name='$review_name', batch_name='$batch_name', review='$review' WHERE review_id=$review_id ";
	}

	mysqli_query($conn, $sql);

	header('location: review-list.php');