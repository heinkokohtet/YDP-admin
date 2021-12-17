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
        <h4 class="header font-weight-bold text-dark">Teacher List</h4>
      </div>

			<div class="col-sm-2">

        <a href="teacher-new.php">
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
								<th>Teacher Name</th>
                <th>Profile</th>
                <th>Position</th>
                <th>Email</th>
                <th>Phone No</th>
                <th></th>
                <th></th>

              </tr>
            </thead>

             			<tbody>

              				<tr>
              					<?php 

              						$result = mysqli_query($conn, "SELECT * FROM teachers ORDER BY teacher_id DESC"); 

              						while($row = mysqli_fetch_assoc($result)): 
              							
              					?>


              			<td value="<?php echo $row['teacher_id'] ?>" name="course_id">
              				<?php echo $row['teacher_name'] ?>       
              			</td>

                    <td><img src="./profiles/<?php echo $row['profile'] ?>" width="100" height="100"></td>

              			<td><?php echo $row['position'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phone_no'] ?></td>

              			</td>

            			<td>

                    <a href="teacher-delete.php?teacher_id=<?php echo $row['teacher_id'] ?>" onclick="return confirm('Are you sure you want to delete?');">
                      <button type="button" class="btn btn-outline-danger">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </a>
                  </td>

            			<td>
            				<a href="teacher-edit.php?teacher_id=<?php echo $row['teacher_id'] ?>">
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