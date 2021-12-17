<?php 

	include('../config.php');

	$teacher_id = $_GET['teacher_id'];
	$sql = "DELETE FROM teachers WHERE teacher_id = $teacher_id";
	mysqli_query($conn, $sql);

	header('location: teacher-list.php');