<?php 

	include('../config.php');

	$course_id = $_POST['course_id'];

	$teacher_id = $_POST['teacher_id'];
	

	/*$sql = "INSERT INTO courseteacherdetail (course_id, teacher_id) VALUES ('$course_id', '$teacher_id') ";

	mysqli_query($conn, $sql);

	mysqli_multi_query($conn, $sql); 

	header('location: courseteacher-list.php');*/


	foreach ($teacher_id as $key => $teacherid) {

			$sql = "INSERT INTO courseteacherdetail (course_id, teacher_id) VALUES 
		($course_id, $teacherid)";



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

	header('location: courseteacher-list.php');	