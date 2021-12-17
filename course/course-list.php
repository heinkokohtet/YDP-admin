

<?php include('../config.php'); ?>
<?php include('../header.php'); ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!-- Begin Page Content -->
	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-10">
        <h4 class="header font-weight-bold text-dark">Course List</h4>
      </div>

			<div class="col-sm-2">

        <a href="course-new.php">
          <button type="button" class="btn btn-outline-primary"><i class="fa fa-plus pr-2"></i>Add New</button>
        </a>
      </div>

      

		</div>

		<!-- Table -->
		<div class="card shadow mb-4">

			<div class="card-body">
				<div class="table-responsive">
					<table class="table"  width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Course Name</th>
                <th>Photo</th>
								<th>Start Date</th>
								<th>End Date</th>
								<th>Duration</th>
                <!-- <th>Price</th>-->       
                <th>Start Time</th>
                <th>End Time</th>
                <th>Learning Types</th>
                <th></th>
                <th></th>

              </tr>
            </thead>

             			<tbody>

              				<tr>
              					<?php 

              						$result = mysqli_query($conn, "SELECT * FROM courses ca, learningtypes lt WHERE ca.learning_id = lt.learning_id ORDER BY ca.course_id DESC"); 

              						while($row = mysqli_fetch_assoc($result)): 
              							
              					?>


              			<td value="<?php echo $row['course_id'] ?>" name="course_id">
              				<?php echo $row['course_name'] ?>       
              			</td>

                    <td><img src="./photos/<?php echo $row['photo'] ?>" width="150" height="100"></td>

              			<td><?php echo $row['start_date'] ?></td>
              			<td><?php echo $row['end_date'] ?></td>
              			<td><?php echo $row['duration'] ?></td>
              			<!-- <td><?php echo $row['price'] ?></td>-->        		
              			<td><?php echo $row['start_at'] ?></td>
              			<td><?php echo $row['end_at'] ?></td>

              			<td value="<?php echo $row['learning_id'] ?>">
              				<?php echo $row['learning_name'] ?>

              			</td>

            				<!-- <td>
            					<button type="button" class="btn btn-outline-danger">
            						<i class="fas fa-trash-alt"></i>
            					</button>
            					<button type="button" class="btn btn-outline-success">
            						<i class="fas fa-edit"></i>
            					</button>  
            				</td>
            			-->
            			<td>

            				<a href="course-delete.php?course_id=<?php echo $row['course_id'] ?>" onclick="return confirm('Are you sure you want to delete?');">
            					<button type="button" class="btn btn-outline-danger">
            						<i class="fas fa-trash-alt"></i>
            					</button>
            				</a>
            			</td>

            			<td>
            				<a href="course-edit.php?course_id=<?php echo $row['course_id'] ?>">
            					<button type="button" class="btn btn-outline-primary">
            						<i class="fas fa-edit"></i>
            					</button>  
            				</a>
            			</td>


            		</tr>

            	<?php endwhile; ?>

            </tbody>
        </table>
    </div>
</div>
</div>

</div>
<!-- /.container-fluid -->
</body>
</html>

<?php include('../footer.php'); ?>