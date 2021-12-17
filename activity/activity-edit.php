<?php include('../config.php'); ?>
<?php include('../header.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  
</head>
<body>

  <?php 

    $activity_id = $_GET['activity_id'];

    $result = mysqli_query($conn, "SELECT * FROM activities WHERE activity_id = $activity_id");
    
    $row = mysqli_fetch_assoc($result);

  ?>

  <div class="container-fluid">
      <div class="row">

      <div class="col-sm-10">
        <h4 class="header font-weight-bold text-dark">Edit Activity</h4>
      </div>

      <div class="col-sm-2">

        <a href="activity-list.php">
          <button type="button" class="btn btn-outline-primary"><i class="fa fa-backward pr-2"></i>Go Back</button>
        </a>
      </div>

    </div>

    <div class="row">
      <div class="col col-sm-6" id="form">

         <form action="activity-update.php" method="post" enctype="multipart/form-data">

          <input type="hidden" name="activity_id" value="<?php echo $row['activity_id'] ?>">

            <div class="form-group row">
              <label for="name" class="col-sm-4 col-form-label">Title</label>
                <div class="col-sm-8">
                  <input type="text" name="title" class="form-control" value="<?php echo $row['title'] ?>">
                </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Old Photo</label>
                <div class="col-sm-8">
                   <img src="./photos/<?php echo $row['photo'] ?>" width="100" height="100">
                </div>
            </div>

            <div class="form-group row">
              <label for="photo" class="col-sm-4 col-form-label">New Photo</label>
                <div class="col-sm-8">
                  <input type="file" name="photo">
                </div>
            </div>

            

            <div class="form-group row">
              <label for="post" class="col-sm-4 col-form-label">Post Activity</label>
                <div class="col-sm-8">
                  <textarea name="post"  class="form-control"><?php echo $row['post'] ?></textarea>
                </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-outline-primary">Update</button>
                <!-- <button type="reset" class="btn btn-outline-danger">Cancel</button>
 -->                
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
</body>
</html>

<?php include('../footer.php'); ?>