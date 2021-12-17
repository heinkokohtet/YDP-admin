<?php include("../config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Course-Teacher</title>
	<meta charset="utf-8">
</head>
<body>
	
	<form method="post" action="courseteacher-add.php" enctype="multipart/form-data">
		<!-- <label for="name">Course Name</label>
		
		<?php 

			$result = mysqli_query($conn, "SELECT * FROM courses");

			while($row = mysqli_fetch_assoc($result)): ?>

			<input type='checkbox' name='course_id' value="<?php echo $row['course_id'] ?>">
			<label>
				<?php echo $row['course_name'] ?>
			</label>

		<?php endwhile; ?> -->
		<!-- /////////////// -->

		<label for="name">Course Name</label>
   	 	<select name="course_id">
        <option value="0">-- Choose --</option>

        <?php 

            $result = mysqli_query($conn, "SELECT * FROM courses");

            while($row = mysqli_fetch_assoc($result)): ?>

            <option value="<?php echo $row['course_id'] ?>">
                <?php echo $row['course_name'] ?>
            </option>

        <?php endwhile; ?>
    	</select><br>



		<!-- <label for="name">Select Teacher</label><br>

		<?php 

			$result1 = mysqli_query($conn, "SELECT * FROM teachers");

			while($row1 = mysqli_fetch_assoc($result1)): ?>

			<input type='checkbox' name='teacher_id' value="<?php echo $row1['teacher_id'] ?>">
			<label>
				<?php echo $row1['teacher_name'] ?>
			</label>

		<?php endwhile; ?>
		<br> //checkbox --> 

		<!-- <?php 
			$tea = mysqli_query($conn, "SELECT * FROM teachers");

			foreach($tea as $teas): ?>

			<input type='checkbox' name='teacher_id' value="<?php echo $teas['teacher_id'] ?>">

			<label value="<?php echo $teas['teacher_id'] ?>">
				<?php echo $teas['teacher_name'] ?>
			</label>
		<?php endforeach ?> <br> -->

		<label for="name">Select Teacher</label><br>

		<?php 

			$result1 = mysqli_query($conn, "SELECT * FROM teachers");

			while($row1 = mysqli_fetch_assoc($result1)): ?>

			<input type='checkbox' name='teacher_id[]' value="<?php echo $row1['teacher_id'] ?>">
			<label>
				<?php echo $row1['teacher_name'] ?>
			</label>

		<?php endwhile; ?>
		<br>

		<button type="reset">Cancel</button>
		<button type="submit" name="btnsubmit">Submit</button>


	</form>
</body>
</html>