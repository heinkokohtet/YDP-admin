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
        <h4 class="header font-weight-bold text-dark">Speaker List</h4>
      </div>

			<div class="col-sm-2">

        <a href="speaker-new.php">
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
                <th>Speaker Name</th>
                <th>Profile</th>
                <th></th>
                <th></th>

              </tr>
            </thead>

             			<tbody>

              				<tr>
              					<?php 

              						$result = mysqli_query($conn, "SELECT * FROM speakers ORDER BY speaker_id DESC"); 

              						while($row = mysqli_fetch_assoc($result)): 
              							
              					?>

                    <td value="<?php echo $row['speaker_id'] ?>">
                      <?php echo $row['speaker_name'] ?>       
                    </td>

                    <td>
                      <img src="./photos/<?php echo $row['speaker'] ?>" width="100" height="100">
                    </td>    			

            			<td>

            				<a href="speaker-delete.php?speaker_id=<?php echo $row['speaker_id'] ?>" onclick="return confirm('Are you sure you want to delete?');">
            					<button type="button" class="btn btn-outline-danger">
            						<i class="fas fa-trash-alt"></i>
            					</button>
            				</a>
            			</td>

            			<td>
            				<a href="speaker-edit.php?speaker_id=<?php echo $row['speaker_id'] ?>">
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