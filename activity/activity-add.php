<?php

	include('../config.php');

	$title = $_POST['title'];

	$photo = $_FILES['photo']['name'];
	$tmp = $_FILES['photo']['tmp_name'];


	$post = $_POST['post'];

	if($photo)
	{
		move_uploaded_file($tmp, "photos/$photo");
	}

	$sql = "INSERT INTO activities (title, photo, post) VALUES ('$title', '$photo', '$post')";

	mysqli_query($conn, $sql);

	header('location: activity-list.php');