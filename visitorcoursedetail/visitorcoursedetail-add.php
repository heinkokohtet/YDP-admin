<?php 

	include('../config.php');

	$visitor_id = $_POST['visitor_id'];

	$course_id = $_POST['course_id'];
	

	/*$sql = "INSERT INTO visitorcoursedetail (visitor_id, course_id) VALUES ('$visitor_id', '$course_id') ";

	//mysqli_query($conn, $sql);

	mysqli_multi_query($conn, $sql);

	header('location: visitorcoursedetail-list.php');	*/

	foreach ($course_id as $key => $courseid) {

			$sql = "INSERT INTO visitorcoursedetail (visitor_id, course_id) VALUES 
		($visitor_id, $courseid)";



		$result = mysqli_query($conn, $sql);
		}


		if($result)
		{
			echo "Successfully.";
		}
		else
		{
			echo mysqli_error($conn);
		}

		header('location: visitorcoursedetail-list.php');