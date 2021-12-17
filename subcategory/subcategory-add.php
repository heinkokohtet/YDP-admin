<?php 

	include('../config.php');

	$subcategory_name = $_POST['subcategory_name'];
	$coursecategory_id = $_POST['coursecategory_id'];

	$sql = "INSERT INTO subcategories (subcategory_name, coursecategory_id) VALUES ('$subcategory_name','$coursecategory_id')";

	mysqli_query($conn, $sql);

	header('location: subcategory-list.php');
	