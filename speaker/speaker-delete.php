<?php 

	include('../config.php');

	$speaker_id = $_GET['speaker_id'];

	$sql = "DELETE FROM speakers WHERE speaker_id = $speaker_id";

	mysqli_query($conn, $sql);

	header('location: speaker-list.php');