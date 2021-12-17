<?php 

	include('../config.php');

	$subcategory_id = $_GET['subcategory_id'];
	$sql = "DELETE FROM subcategories WHERE subcategory_id = $subcategory_id";

	mysqli_query($conn, $sql);

	header('location: subcategory-list.php');
