<?php

	include('config.php');

	$sql = "INSERT INTO learningtypes (learning_name) VALUES ('Online'), ('Offline')";

	mysqli_query($conn, $sql);