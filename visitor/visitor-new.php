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
          <h4 class="header font-weight-bold text-dark">Create New Visitor</h4>
        </div>

        <div class="col-sm-2">

          <a href="visitor-list.php">
            <button type="button" class="btn btn-outline-primary"><i class="fa fa-backward pr-2"></i>Go Back</button>
          </a>
        </div>

      </div>


    <div class="row">
      <div class="col col-sm-6" id="form">
	       <form action="visitor-add.php" method="post" enctype="multipart/form-data">

            <div class="form-group row">
              <label for="name" class="col-sm-4 col-form-label">Visitor Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="visitor_name" placeholder="Enter Visitor Name" required="">
                </div>
            </div>

            <div class="form-group row">
              <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" name="email" placeholder="sample@gmail.com" pattern="^[-+.\w]{1,64}@[-.\w]{1,64}\.[-.\w]{2,6}$" required/>
                </div>
            </div>

            <div class="form-group row">
              <label for="phone" class="col-sm-4 col-form-label">Phone Number</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="phone_no" placeholder="+959XXXXXXX" maxlength="13"  pattern="[+-9]{13}" required="">
                </div>
            </div>

            <div class="form-group row">
              <label for="address" class="col-sm-4 col-form-label">Address</label>
                <div class="col-sm-8">
                  <textarea class="form-control" name="address" placeholder="Enter Your Address" required=""></textarea>
                </div>
            </div>

            <div class="form-group row">
              <label for="description" class="col-sm-4 col-form-label">Description</label>
                <div class="col-sm-8">
                  <textarea class="form-control" name="description" placeholder="Desc:" required=""></textarea>
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