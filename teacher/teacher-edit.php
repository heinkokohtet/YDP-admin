<?php include('../config.php'); ?>
<?php include('../header.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  
</head>
<body>

  <?php 

    $teacher_id = $_GET['teacher_id'];

    $result = mysqli_query($conn, "SELECT * FROM teachers WHERE teacher_id = $teacher_id");
    
    $row = mysqli_fetch_assoc($result);

  ?>

  <div class="container-fluid">
      <div class="row">

      <div class="col-sm-10">
        <h4 class="header font-weight-bold text-dark">Edit Teacher</h4>
      </div>

      <div class="col-sm-2">

        <a href="teacher-list.php">
          <button type="button" class="btn btn-outline-primary"><i class="fa fa-backward pr-2"></i>Go Back</button>
        </a>
      </div>

    </div>

    <div class="row">
      <div class="col col-sm-6" id="form">

         <form action="teacher-update.php" method="post" enctype="multipart/form-data">

          <input type="hidden" name="teacher_id" value="<?php echo $row['teacher_id'] ?>" >

            <div class="form-group row">
              <label for="name" class="col-sm-4 col-form-label">Teacher Name</label>
                <div class="col-sm-8">
                  <input type="text" name="teacher_name" class="form-control" value="<?php echo $row['teacher_name'] ?>">
                </div>
            </div>

            <div class="form-group row">
              <label for="profile" class="col-sm-4 col-form-label">Old Profile</label>
                <div class="col-sm-8">
                  <img src="./profiles/<?php echo $row['profile'] ?>" width="100" height="100">
                </div>
            </div>

            <div class="form-group row">
              <label for="profile" class="col-sm-4 col-form-label">New Profile</label>
                <div class="col-sm-8">
                  <input type="file" name="profile">
                </div>
            </div>

            <div class="form-group row">
              <label for="position" class="col-sm-4 col-form-label">Position</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="position" value="<?php echo $row['position'] ?>">
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