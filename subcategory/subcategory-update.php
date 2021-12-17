<?php 

	include('../config.php');

	$subcategory_id = $_POST['subcategory_id'];
	$subcategory_name = $_POST['subcategory_name'];
	$coursecategory_id = $_POST['coursecategory_id'];

	$sql = "UPDATE subcategories SET subcategory_name = '$subcategory_name', coursecategory_id='$coursecategory_id' WHERE subcategory_id = $subcategory_id ";

	mysqli_query($conn, $sql);

	header('location: subcategory-list.php');
