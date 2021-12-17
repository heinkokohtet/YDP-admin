<?php include('../config.php'); ?>
<?php include('../header.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  
</head>
<body>

  <?php 

    $visitor_id = $_GET['visitor_id'];

    $result = mysqli_query($conn, "SELECT * FROM visitors WHERE visitor_id = $visitor_id");
    
    $row = mysqli_fetch_assoc($result);

  ?>

  <div class="container-fluid">
      <div class="row">

      <div class="col-sm-10">
        <h4 class="header font-weight-bold text-dark">Edit Visitor</h4>
      </div>

      <div class="col-sm-2">

        <a href="visitor-list.php">
          <button type="button" class="btn btn-outline-primary"><i class="fa fa-backward pr-2"></i>Go Back</button>
        </a>
      </div>

    </div>

    <div class="row">
      <div class="col col-sm-6" id="form">

         <form action="visitor-update.php" method="post" enctype="multipart/form-data">

          <input type="hidden" name="visitor_id" value="<?php echo $row['visitor_id'] ?>">

            <div class="form-group row">
              <label for="name" class="col-sm-4 col-form-label">Visitor Name</label>
                <div class="col-sm-8">
                  <input type="text" name="visitor_name" class="form-control" value="<?php echo $row['visitor_name'] ?>">
                </div>
            </div>

            <div class="form-group row">
              <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                </div>
            </div>

            <div class="form-group row">
              <label for="phone" class="col-sm-4 col-form-label">Phone Number</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="phone_no" value="<?php echo $row['phone_no'] ?>">
                </div>
            </div>

            <div class="form-group row">
              <label for="address" class="col-sm-4 col-form-label">Address</label>
                <div class="col-sm-8">
                  <textarea name="address" class="form-control"><?php echo $row['address'] ?></textarea>
                </div>
            </div>

            <div class="form-group row">
              <label for="description" class="col-sm-4 col-form-label">Description</label>
                <div class="col-sm-8">
                  <textarea name="description" class="form-control"><?php echo $row['description'] ?></textarea>
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