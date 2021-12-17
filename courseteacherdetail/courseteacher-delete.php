<?php 

	include('../config.php');

	$courseteacher_id = $_GET['courseteacher_id'];

	$sql = "DELETE FROM courseteacherdetail WHERE courseteacher_id = $courseteacher_id";

	mysqli_query($conn, $sql);

	header('location: courseteacher-list.php');