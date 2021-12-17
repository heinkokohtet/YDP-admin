<?php ob_start(); 

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>YDP Admin Dashboard</title>

  <!-- custom fonts-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- css styles for this admin-->
  <link href="css/admin.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/mystyle.css">

  <style type="text/css">
  	
  </style>

</head>
<body>
  <div class="container-fluid">  
    
      <!--login--->
      <?php 

      if ($_SERVER['REQUEST_METHOD']=="POST"){

        $admin_name=$_POST["admin_name"];
        $pw=$_POST["password"];

        /*echo "admin name is".$admin_name;
        echo "password is".$pw;
*/
        //Connect with db
        include('config.php');

      //Check admin_name and Password
      $result=mysqli_query($conn,"SELECT * FROM admins WHERE admin_name='$admin_name' and password='$pw'");

      $rowcount=mysqli_num_rows($result);
      /*echo "result is".$rowcount;*/

        if($rowcount>0){

            while($row=mysqli_fetch_array($result)) {

              $db_admin_id=$row["admin_id"];
              $db_admin_name=$row["admin_name"];
            }

          $_SESSION["login_admin_id"]=$db_admin_id;
          $_SESSION["login_admin_name"]=$db_admin_name;
          header("location:dashboard.php");

        }else{
          
          echo "<div class='alert alert-danger' role='alert'>username and password is incorrect!</div>";
          header("Refresh:2;url=login.php");

        }

      }
      
      ?>

        <!--login form--->
      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header justify-content-center">
              <h3 class="font-weight-light my-2"><center style="color: #0069d9;">YDP Login</center></h3>
            </div>

              <div class="card-body">

                <form action="login.php" method="POST">
                    <div class="form-group">
                      <label class="small mb-1" for="name" style="color: black;">User Name</label>
                        <input type="text" name="admin_name" class="form-control" placeholder="Enter Name"required="true">
                    </div>

                    <div class="form-group">
                      <label class="small mb-1" for="inputPassword" style="color: black;">Password
                        </label>
                          <input type="password" name="password" class="form-control" placeholder="Enter password" required="true">
                    </div>

                      <!-- <input class="btn btn-lg btn-outline-primary btn-block" type="submit" value="Login" name="login" >
 -->                  
                      <button class="btn btn-primary" type="submit">Login</button>
              </form>
              </div>
            </div>
        </div>
      </div>     
</div> 


</body>
</html>

 