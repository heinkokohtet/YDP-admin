<?php 

	include('../config.php');

	$speaker = $_FILES['speaker']['name'];
	$tmp = $_FILES['speaker']['tmp_name'];

	$speaker_name = $_POST['speaker_name'];

	if($speaker)
	{
		move_uploaded_file($tmp, "./photos/$speaker");
	}

	$sql = "INSERT INTO speakers (speaker, speaker_name) VALUES ('$speaker', '$speaker_name')";

	mysqli_query($conn, $sql);

	header('location: speaker-list.php');