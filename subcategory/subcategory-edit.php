<?php include('../config.php'); ?>
<?php include('../header.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  
</head>
<body>

  <?php 
  $subcategory_id = $_GET['subcategory_id'];

  $result = mysqli_query($conn, "SELECT * FROM subcategories WHERE subcategory_id = $subcategory_id");

  $row = mysqli_fetch_assoc($result);  
  ?>

  <div class="container-fluid">
    <div class="row">

      <div class="col-sm-10">
        <h4 class="header font-weight-bold text-dark">Edit Sub Category</h4>
      </div>

      <div class="col-sm-2">
        <a href="subcategory-list.php">
          <button type="button" class="btn btn-outline-primary"><i class="fa fa-backward pr-2"></i>Go Back</button>
        </a>
      </div>

    </div>

    <div class="row">
      <div class="col col-sm-6" id="form">
        <form action="subcategory-update.php" method="post">

          <div class="form-group row">

            <input type="hidden" name="subcategory_id" value="<?php echo $row['subcategory_id'] ?>" >

            <label for="name" class="col-sm-5 col-form-label">Sub Category Name</label>

            <div class="col-sm-7">
              <input type="text" class="form-control" name="subcategory_name" value="<?php echo $row['subcategory_name'] ?>">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-5 col-form-label" for="inlineFormCustomSelect">Course Category
            </label>
            <div class="col-sm-7">
              <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" 
              name="coursecategory_id">
              <option value="0">-- Choose --</option>

              <?php 

              $result2 = mysqli_query($conn, "SELECT coursecategory_id, coursecategory_name FROM coursecategories");

              while($row2 = mysqli_fetch_assoc($result2)): ?>

                <option value="<?php echo $row2['coursecategory_id'] ?>" <?php if($row2['coursecategory_id'] == $row['coursecategory_id']) echo "selected" ?> >
                  <?php echo $row2['coursecategory_name'] ?>
                </option>


              <?php endwhile; ?>

            </select>
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