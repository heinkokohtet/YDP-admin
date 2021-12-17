<!DOCTYPE html>
<html>
<head>
	<title>Course-Teacher</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		include('../config.php');

		$courseteacher_id = $_GET['courseteacher_id'];

		$result = mysqli_query($conn, "SELECT * FROM courseteacherdetail WHERE courseteacher_id = $courseteacher_id");
		
		$row = mysqli_fetch_assoc($result);
  
	?>
	
	<form method="post" action="courseteacher-update.php" enctype="multipart/form-data">

		<input type="hidden" name="courseteacher_id" value="<?php echo $row['courseteacher_id'] ?>">

		<label for="name">Course Name</label>
		<select name="course_id">
			<option value="0">Choose Course</option>

			<?php 

				$result1 = mysqli_query($conn, "SELECT course_id, course_name FROM courses");

				while($row1 = mysqli_fetch_assoc($result1)): ?>

				<option value="<?php echo $row1['course_id'] ?>" <?php if($row1['course_id'] == $row['course_id']) echo "selected" ?> > 
					
					<?php echo $row1['course_name'] ?>

				</option>
			<?php endwhile; ?>

		</select><br>


		<label for="name">Select Teacher</label><br>

		<?php 

			$result2 = mysqli_query($conn, "SELECT teacher_id, teacher_name FROM teachers");

			while($row2 = mysqli_fetch_assoc($result2)): ?>

 
			<input type="checkbox" name="teacher_id" value="<?php echo $row2['teacher_id'] ?>" <?php if($row2['teacher_id'] == $row['teacher_id']) echo "checked" ?> >

			<label for="name" name="teacher_id" value="<?php echo $row2['teacher_id'] ?>"  >
				
				<?php echo $row2['teacher_name'] ?>
			</label>

		<?php endwhile; ?>
		<br>

		<button type="reset">Cancel</button>
		<button type="submit">Submit</button>


	</form>
</body>
</html>