<?php

	include('../config.php');

	$activity_id = $_POST['activity_id'];
	$title = $_POST['title'];

	$photo = $_FILES['photo']['name'];
	$tmp = $_FILES['photo']['tmp_name'];

	$post = $_POST['post'];

	

	if($photo)
	{
		move_uploaded_file($tmp, "photos/$photo");

		$sql = "UPDATE activities SET title='$title', photo='$photo', post='$post' WHERE activity_id=$activity_id ";

	}
	else
	{
		$sql = "UPDATE activities SET title='$title', post='$post' WHERE activity_id=$activity_id ";
	}

	mysqli_query($conn, $sql);

	header('location: activity-list.php');