<?php include('../config.php'); ?>
<?php include('../header.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  
</head>
<body>

  <?php 

    $speaker_id = $_GET['speaker_id'];

    $result = mysqli_query($conn, "SELECT * FROM speakers WHERE speaker_id = $speaker_id");
    
    $row = mysqli_fetch_assoc($result);

  ?>

  <div class="container-fluid">
      <div class="row">

      <div class="col-sm-10">
        <h4 class="header font-weight-bold text-dark">Edit Speaker</h4>
      </div>

      <div class="col-sm-2">

        <a href="speaker-list.php">
          <button type="button" class="btn btn-outline-primary"><i class="fa fa-backward pr-2"></i>Go Back</button>
        </a>
      </div>

    </div>

    <div class="row">
      <div class="col col-sm-6" id="form">

         <form action="speaker-update.php" method="post" enctype="multipart/form-data">

          <input type="hidden" name="speaker_id" value="<?php echo $row['speaker_id'] ?>">

            <div class="form-group row">
              <label for="name" class="col-sm-4 col-form-label">Speaker Name</label>
                <div class="col-sm-8">
                  <input type="text" name="speaker_name" class="form-control" value="<?php echo $row['speaker_name'] ?>">
                </div>
            </div>

            <div class="form-group row">
              <label for="speaker" class="col-sm-4 col-form-label">Old Profile</label>
                <div class="col-sm-8">
                  <img src="./photos/<?php echo $row['speaker'] ?>" width="100" height="100">
                </div>
            </div>

            <div class="form-group row">
              <label for="speaker" class="col-sm-4 col-form-label">New Profile</label>
                <div class="col-sm-8">
                  <input type="file" name="speaker">
                </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-outline-primary">Update</button>
                <!-- <button type="reset" class="btn btn-outline-danger">Cancel</button> -->
                
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
</body>
</html>

<?php include('../footer.php'); ?>