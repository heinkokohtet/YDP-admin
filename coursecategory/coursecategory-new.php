<?php include('../config.php'); ?>
<?php include('../header.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  
</head>
<body>

  <?php 
    $result = mysqli_query($conn, "SELECT * FROM coursecategories");
  ?>

  	<div class="container-fluid">
      
      <div class="row">

        <div class="col-sm-10">
          <h4 class="header font-weight-bold text-dark">Create New Course Category</h4>
        </div>

        <div class="col-sm-2">
          <a href="coursecategory-list.php">
            <button type="button" class="btn btn-outline-primary"><i class="fa fa-backward pr-2"></i>Go Back</button>
          </a>
        </div>

      </div>

    <div class="row">
      <div class="col col-sm-6" id="form">
	       <form action="coursecategory-add.php" method="post">
            <div class="form-group row">
              <label for="name" class="col-sm-5 col-form-label">Course Category Name</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="coursecategory_name" placeholder="Enter Your Course Category" required="true">
                </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-5 col-form-label" for="inlineFormCustomSelect">Course
              </label>
                <div class="col-sm-7">
                  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" 
                  name="course_id">
                    <option value="0">-- Choose --</option>
                    
                    <?php 

                    $result2 = mysqli_query($conn, "SELECT course_id, course_name FROM courses");

                    while($row2 = mysqli_fetch_assoc($result2)): ?>

                      <option value="<?php echo $row2['course_id'] ?>">
                        <?php echo $row2['course_name'] ?>
                      </option>

                    <?php endwhile; ?>
                    
                  </select>
                </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
                <button type="reset" class="btn btn-outline-danger">Cancel</button>
                
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
</body>
</html>

<?php include('../footer.php'); ?>