<?php include('../config.php'); ?>
<?php include('../header.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  
</head>
<body>
 	<div class="container-fluid">
      <div class="row">

        <div class="col-sm-10">
          <h4 class="header font-weight-bold text-dark">Create New Speaker</h4>
        </div>

        <div class="col-sm-2">

          <a href="speaker-list.php">
            <button type="button" class="btn btn-outline-primary"><i class="fa fa-backward pr-2"></i>Go Back</button>
          </a>
        </div>

      </div>

    <div class="row">
      <div class="col col-sm-6" id="form">
	       <form method="post" action="speaker-add.php" enctype="multipart/form-data">

            <div class="form-group row">
              <label for="name" class="col-sm-4 col-form-label">Speaker Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="speaker_name" placeholder="Enter Speaker Name" required="true">
                </div>
            </div>

            <div class="form-group row">
              <label for="speaker" class="col-sm-4 col-form-label">Profile</label>
                <div class="col-sm-8">
                  <input type="file" name="speaker" required="">
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