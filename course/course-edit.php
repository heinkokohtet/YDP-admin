<?php include('../config.php'); ?>
<?php include('../header.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  
</head>
<body>

  <?php 

    $course_id = $_GET['course_id'];

    $result = mysqli_query($conn, "SELECT * FROM courses WHERE course_id = $course_id");
    
    $row = mysqli_fetch_assoc($result);

  ?>

  <div class="container-fluid">
      <div class="row">

      <div class="col-sm-10">
        <h4 class="header font-weight-bold text-dark">Edit Course</h4>
      </div>

      <div class="col-sm-2">

        <a href="course-list.php">
          <button type="button" class="btn btn-outline-primary"><i class="fa fa-backward pr-2"></i>Go Back</button>
        </a>
      </div>

    </div>

    <div class="row">
      <div class="col col-sm-6" id="form">
         <form action="course-update.php" method="post" enctype="multipart/form-data">
            <div class="form-group row">

              <input type="hidden" name="course_id" value="<?php echo $row['course_id'] ?>">

              <label for="name" class="col-sm-4 col-form-label">Course Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="course_name" value="<?php echo $row['course_name'] ?>">
                </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Old Photo</label>
                <div class="col-sm-8">
                  <img src="./photos/<?php echo $row['photo'] ?>" width="150" height="100">
                </div>
            </div>

            <div class="form-group row">
              <label for="photo" class="col-sm-4 col-form-label">New Photo</label>
                <div class="col-sm-8">
                  <input type="file" name="photo">
                </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-4 col-form-label" for="inlineFormCustomSelect">Learning Type</label>
                <div class="col-sm-8">
                  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" 
                  name="learning_id">
                    <option value="0">-- Choose --</option>
                    <?php 
                    $result2 = mysqli_query($conn, "SELECT learning_id, learning_name FROM learningtypes");
                    while($row2 = mysqli_fetch_assoc($result2)): ?>
                      <option value="<?php echo $row2['learning_id'] ?>" <?php if($row2['learning_id'] == $row['learning_id']) echo "selected" ?> >

                        <?php echo $row2['learning_name'] ?>
                      </option>
                    <?php endwhile; ?>
                  </select>
                </div>
            </div>

            <div class="form-group row">
              <label for="sdate" class="col-sm-4 col-form-label">Start Date</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="start_date" value="<?php echo $row['start_date'] ?>">
                </div>
            </div>

            <div class="form-group row">
              <label for="edate" class="col-sm-4 col-form-label">End Date</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="end_date" value="<?php echo $row['end_date'] ?>">
                </div>
            </div>

            <div class="form-group row">
              <label for="duration" class="col-sm-4 col-form-label">Duration</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="duration" value="<?php echo $row['duration'] ?>">
                </div>
            </div>

            <!-- <div class="form-group row">
              <label for="price" class="col-sm-4 col-form-label">Price</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="price" placeholder="Enter Price" required="true">
                </div>
            </div> -->

            <div class="form-group row">
              <label for="stime" class="col-sm-4 col-form-label">Start Time</label>
                <div class="col-sm-8">
                  <input type="time" class="form-control" name="start_at" value="<?php echo $row['start_at'] ?>">
                </div>
            </div>

            <div class="form-group row">
              <label for="etime" class="col-sm-4 col-form-label">End Time</label>
                <div class="col-sm-8">
                  <input type="time" class="form-control" name="end_at" value="<?php echo $row['end_at'] ?>">
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