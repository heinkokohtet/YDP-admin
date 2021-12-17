<?php 

	include('../config.php');

	$speaker_id = $_POST['speaker_id'];

	$speaker = $_FILES['speaker']['name'];
	$tmp = $_FILES['speaker']['tmp_name'];

	$speaker_name = $_POST['speaker_name'];

	if($speaker)
	{
		move_uploaded_file($tmp, "./photos/$speaker");

		$sql = "UPDATE speakers SET speaker = '$speaker', speaker_name = '$speaker_name' WHERE speaker_id = $speaker_id";

	}
	else
	{
		$sql = "UPDATE speakers SET speaker_name = '$speaker_name' WHERE speaker_id = $speaker_id";
	}
	
	
	mysqli_query($conn, $sql);

	header('location: speaker-list.php');