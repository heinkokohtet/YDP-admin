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
        <h4 class="header font-weight-bold text-dark">Visitor List</h4>
      </div>

			<div class="col-sm-2">

        <a href="visitor-new.php">
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
								<th>Visitor Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Address</th>
                <th>Description</th>
                <th></th>
                <th></th>

              </tr>
            </thead>

             			<tbody>

              				<tr>
              					<?php 

              						$result = mysqli_query($conn, "SELECT * FROM visitors ORDER BY visitor_id DESC"); 

              						while($row = mysqli_fetch_assoc($result)): 
              							
              					?>


              			<td value="<?php echo $row['visitor_id'] ?>" name="visitor_id">
              				<?php echo $row['visitor_name'] ?>       
              			</td>

              			<td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phone_no'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['description'] ?></td>

              			</td>

            			<td>

            				<a href="visitor-delete.php?visitor_id=<?php echo $row['visitor_id'] ?>" onclick="return confirm('Are you sure you want to delete?');">
            					<button type="button" class="btn btn-outline-danger">
            						<i class="fas fa-trash-alt"></i>
            					</button>
            				</a>
            			</td>

            			<td>
            				<a href="visitor-edit.php?visitor_id=<?php echo $row['visitor_id'] ?>">
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