<?php include('../config.php'); ?>
<?php include('../header.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  
</head>
<body>

  <?php 

    $review_id = $_GET['review_id'];

    $result = mysqli_query($conn, "SELECT * FROM reviews WHERE review_id = $review_id");
    
    $row = mysqli_fetch_assoc($result);

  ?>

  <div class="container-fluid">
      <div class="row">

      <div class="col-sm-10">
        <h4 class="header font-weight-bold text-dark">Edit Review</h4>
      </div>

      <div class="col-sm-2">

        <a href="review-list.php">
          <button type="button" class="btn btn-outline-primary"><i class="fa fa-backward pr-2"></i>Go Back</button>
        </a>
      </div>

    </div>

    <div class="row">
      <div class="col col-sm-6" id="form">

         <form action="review-update.php" method="post" enctype="multipart/form-data">

          <input type="hidden" name="review_id" value="<?php echo $row['review_id'] ?>">

            <div class="form-group row">
              <label for="name" class="col-sm-4 col-form-label">Name(Reviewer)</label>
                <div class="col-sm-8">
                  <input type="text" name="review_name" class="form-control" value="<?php echo $row['review_name'] ?>">
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
              <label for="batch" class="col-sm-4 col-form-label">Batch Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="batch_name" value="<?php echo $row['batch_name'] ?>">
                </div>
            </div>

            <div class="form-group row">
              <label for="post" class="col-sm-4 col-form-label">Post Review</label>
                <div class="col-sm-8">
                  <textarea name="review"  class="form-control"><?php echo $row['review'] ?></textarea>
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