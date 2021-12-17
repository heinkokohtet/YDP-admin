<?php 

	include('../config.php');

	$visitorcoursedetail_id = $_GET['visitorcoursedetail_id'];

	$sql = "DELETE FROM visitorcoursedetail WHERE visitorcoursedetail_id = $visitorcoursedetail_id";

	mysqli_query($conn, $sql);

	header('location: visitorcoursedetail-list.php');