<!DOCTYPE html>
<html>
<head>
	<title>Course-Teacher List</title>
	<meta charset="utf-8">
</head>
<body>
	<table>
		<tr>
			<th>Course Name</th>
			<th>Teacher Name</th>
		</tr>

		<tr>

			<?php

				include('../config.php');
		
				$result = mysqli_query($conn, "SELECT * FROM courseteacherdetail ct, courses cs, teachers ts WHERE ct.course_id = cs.course_id and  ct.teacher_id = ts.teacher_id");

				/*$result = mysqli_query($conn, "SELECT * FROM courses ca, coursecategories cc, learningtypes lt WHERE ca.coursecategory_id = cc.coursecategory_id and ca.learning_id = lt.learning_id");
*/

				/*$result = mysqli_query($conn, "SELECT * FROM courseteacherdetail");
*/
				while($row = mysqli_fetch_assoc($result)):

			?>

			
			<td value="<?php echo $row['course_id'] ?>">
				<?php echo $row['course_name'] ?>
			</td>

			<td value="<?php echo $row['teacher_id'] ?>">
				<?php echo $row['teacher_name'] ?>
			</td>

			<td>
                <a href="courseteacher-delete.php?courseteacher_id=<?php echo $row['courseteacher_id'] ?>">
                    <button>Delete</button>
                </a>
            </td>
            <td>
                <a href="courseteacher-edit.php?courseteacher_id=<?php echo $row['courseteacher_id'] ?>">
                    <button>Edit</button>
                </a>
            </td>

		</tr>

		<?php endwhile; ?>

	</table>

	<a href="courseteacher-new.php">New Course-Teacher</a>

</body>
</html>