<?php include("../config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Visitor-Course</title>
	<meta charset="utf-8">
</head>
<body>
	
	<form method="post" action="visitorcoursedetail-add.php" enctype="multipart/form-data">
		
		<label for="name">Select Visitor Name</label>
   	 	<select name="visitor_id">
        <option value="0">-- Choose --</option>

        <?php 

            $result = mysqli_query($conn, "SELECT * FROM visitors");

            while($row = mysqli_fetch_assoc($result)): ?>

            <option value="<?php echo $row['visitor_id'] ?>">
                <?php echo $row['visitor_name'] ?>
            </option>

        <?php endwhile; ?>
    	</select><br>



		<!-- <label for="name">Select Course</label><br>

		<?php 

			$result1 = mysqli_query($conn, "SELECT * FROM courses");

			while($row1 = mysqli_fetch_assoc($result1)): ?>

			<input type='checkbox' name='course_id' value="<?php echo $row1['course_id'] ?>">
			<label>
				<?php echo $row1['course_name'] ?>
			</label>

		<?php endwhile; ?>
		<br> -->

		<!-- <?php 
			$cou = mysqli_query($conn, "SELECT * FROM courses");

			foreach($cou as $cc): ?>

			<input type='checkbox' name='course_id' value="<?php echo $cc['course_id'] ?>">

			<label value="<?php echo $cc['course_id'] ?>">
				<?php echo $cc['course_name'] ?>
			</label>
		<?php endforeach ?> <br> -->

		<!-- <?php 


		$checkbox1=$_POST['course_id'];  
		$chk="";  
		foreach($checkbox1 as $chk1)  
		{  
			$chk .= $chk1.",";  
		}  
		$in_ch=mysqli_query($con,"insert into courses(course_id) values ('$chk')");  
		if($in_ch==1)  
		{  
			echo'<script>alert("Inserted Successfully")</script>';  
		}  
		else  
		{  
			echo'<script>alert("Failed To Insert")</script>';  
		}  

		?>
 -->

 		<label for="name">Select Course</label><br>

		<?php 

			$result1 = mysqli_query($conn, "SELECT * FROM courses");

			while($row1 = mysqli_fetch_assoc($result1)): ?>

			<input type='checkbox' name='course_id[]' value="<?php echo $row1['course_id'] ?>">
			<label>
				<?php echo $row1['course_name'] ?>
			</label>

		<?php endwhile; ?>
		<br>

		

		<button type="reset">Cancel</button>
		<button type="submit" name="btnsubmit">Submit</button>


	</form>
</body>
</html>