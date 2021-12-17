<!DOCTYPE html>
<html>
<head>
	<title>Visitor-Course</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		include('../config.php');

		$visitorcoursedetail_id = $_GET['visitorcoursedetail_id'];

		$result = mysqli_query($conn, "SELECT * FROM visitorcoursedetail WHERE visitorcoursedetail_id = $visitorcoursedetail_id");
		
		$row = mysqli_fetch_assoc($result);
  
	?>
	
	<form method="post" action="visitorcoursedetail-update.php" enctype="multipart/form-data">

		<input type="hidden" name="visitorcoursedetail_id" value="<?php echo $row['visitorcoursedetail_id'] ?>">

		<label for="name">Visitor Name</label>
		<select name="visitor_id">
			<option value="0">Choose Visitor</option>

			<?php 

				$result1 = mysqli_query($conn, "SELECT visitor_id, visitor_name FROM visitors");

				while($row1 = mysqli_fetch_assoc($result1)): ?>

				<option value="<?php echo $row1['visitor_id'] ?>" <?php if($row1['visitor_id'] == $row['visitor_id']) echo "selected" ?> > 
					
					<?php echo $row1['visitor_name'] ?>

				</option>
			<?php endwhile; ?>

		</select><br>


		<label for="name">Select Course Name</label><br>

		<?php 

			$result2 = mysqli_query($conn, "SELECT course_id, course_name FROM courses");

			while($row2 = mysqli_fetch_assoc($result2)): ?>

			<input type='checkbox' name='course_id' value="<?php echo $row2['course_id'] ?>" <?php if($row2['course_id'] == $row['course_id']) echo "checked" ?> >

			<label for="name" name="course_id" value="<?php echo $row2['course_id'] ?>" >
				
				<?php echo $row2['course_name'] ?>
		</label>

		<?php endwhile; ?>
		<br>

		<button type="reset">Cancel</button>
		<button type="submit">Submit</button>


	</form>
</body>
</html>