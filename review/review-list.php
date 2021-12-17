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
        <h4 class="header font-weight-bold text-dark">Review List </h4>
      </div>

			<div class="col-sm-2">

        <a href="review-new.php">
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
								<th>Name</th>
                <th>Photo</th>
                <th>Batch Name</th>
                <th>Review</th>
                <th></th>
                <th></th>

              </tr>
            </thead>

             			<tbody>

              				<tr>
              					<?php 

              						$result = mysqli_query($conn, "SELECT * FROM reviews ORDER BY review_id DESC"); 

              						while($row = mysqli_fetch_assoc($result)): 
              							
              					?>


              			<td value="<?php echo $row['review_id'] ?>" name="review_id">
              				<?php echo $row['review_name'] ?>       
              			</td>

                    <td><img src="./photos/<?php echo $row['photo'] ?>" width="100" height="100"></td>

              			<td><?php echo $row['batch_name'] ?></td>
                    <td><?php echo $row['review'] ?></td>

              			</td>

            			<td>

            				<a href="review-delete.php?review_id=<?php echo $row['review_id'] ?>" onclick="return confirm('Are you sure you want to delete?');">
            					<button type="button" class="btn btn-outline-danger">
            						<i class="fas fa-trash-alt"></i>
            					</button>
            				</a>
            			</td>

            			<td>
            				<a href="review-edit.php?review_id=<?php echo $row['review_id'] ?>">
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