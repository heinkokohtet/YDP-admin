<!---seesion --->

<?php ob_start(); 

session_start();

?>

<!---Check seesion and admin --->
<?php

if(isset($_SESSION['login_admin_name']))
{
 if($_SESSION['login_admin_name'] =='YES')
 {
   $login_admin_name = TRUE;
 }
 
}else{

if(!$login_admin_name)
{
  header('Location: login.php');
  exit;
}

}

?>

<?php include('config.php'); ?>


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

</head>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <div class="sidebar-brand-icon rotate-n-15">

        </div>

        <div class="sidebar-brand-text mx-3">          
          <i class="fas fa-user fa-lg"></i> Admin
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <!-- <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a> -->
            <i class="fas fa-home"></i>
            <span>Home</span></a>

          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
            Addons
          </div>

          <!-- Nav Item - user Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-fw fa-folder"></i>
              <span>User</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">USERS:</h6>
                <a class="collapse-item" href="speaker/speaker-list.php">Speaker</a>
                <a class="collapse-item" href="teacher/teacher-list.php">Teacher</a>
                <a class="collapse-item" href="visitor/visitor-list.php">Visitor</a>
                <a class="collapse-item" href="review/review-list.php">Review</a>          
              </div>
            </div>
          </li>




          <!-- Nav Item - courses Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link" href="course/course-list.php">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Course</span></a>
            </li>

            <!-- Nav Item - coursecategory Collapse Menu -->
            <li class="nav-item">
              <a class="nav-link" href="coursecategory/coursecategory-list.php">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Course Category</span></a>
              </li>

              <!-- Nav Item - coursecategory1 Collapse Menu -->
              <li class="nav-item">
                <a class="nav-link" href="coursecategory1/coursecategory1-list.php">
                  <i class="fas fa-fw fa-chart-area"></i>
                  <span>Course Category 1</span></a>
                </li>

                <!-- Nav Item - subcategory Collapse Menu -->
                <li class="nav-item">
                  <a class="nav-link" href="subcategory/subcategory-list.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Sub Category</span></a>
                  </li>

                <!-- Nav Item - activity Collapse Menu -->
                <li class="nav-item">
                  <a class="nav-link" href="activity/activity-list.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Activity</span></a>
                  </li>
                  
                <!-- Nav Item - logout -->
              <li class="nav-item">
                <a class="nav-link" href="logout.php">
                  <i class="fas fa-sign-out-alt"></i>
                  <span>Logout</span></a>
                </li>
                  <!-- Divider -->
                  <hr class="sidebar-divider d-none d-md-block">

                  <!-- Sidebar Toggler (Sidebar) -->
                  <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                  </div>

                </ul>
                <!-- End of Sidebar -->

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                  <!-- Main Content -->
                  <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                      <!-- Topbar Header -->
                      <h6 class="h6 mb-0 text-dark">YDP Youth Development Programme</h6>

                      <!-- Sidebar Toggle (Topbar) -->
                      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i> <!-- to delete fa-4x -->
                      </button>

                      <!-- Topbar Navbar -->
                      <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                              <?php echo $_SESSION['login_admin_name']; ?>
                            </span>
                          

                          </a>
                         

                        </li>

                      </ul>

                    </nav>
                    <!-- End of Topbar -->


                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                     <!-- Page Heading -->
                     <div class="d-sm-flex align-items-center justify-content-between mb-4">
                      <h1 class="h3 mb-0 font-weight-bold text-dark">Dashboard</h1> <!-- text-gray-800 -->

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                      <!-- <div class="col-sm-10">
                        <h4 class="header font-weight-bold text-dark">Dashboard</h4>
                      </div> -->


                      <!-- User -->
                      <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                          <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">User</div>

                              </div>
                              <div class="col-auto">
                                <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                                <i class="fas fa-users fa-2x text-gray-300"></i>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Course -->
                      <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                          <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Course</div>

                              </div>
                              <div class="col-auto">
                                <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                                <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Course category -->
                      <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                          <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Course category</div>

                              </div>
                              <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Sub category -->
                      <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                          <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Sub category</div>

                              </div>
                              <div class="col-auto">
                                <!-- <i class="fas fa-comments fa-2x text-gray-300"></i>
 -->                           
                                <i class="fas fa-list-alt fa-2x text-gray-300"></i>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">

                      <div class="col-sm-12">
                        <h4 class="header font-weight-bold text-dark">Showing Course</h4>
                      </div>



    

      </div>

      <!-- Table -->
      <div class="card shadow mb-4">

        <div class="card-body">
          <div class="table-responsive">
            <table class="table"  width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Course Name</th>
                  <th>Photo</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Duration</th>
                  <!-- <th>Price</th>-->       
                  <th>Start Time</th>
                  <th>End Time</th>
                  <th>Learning Types</th>
                  <!-- <th></th>
                  <th></th> -->

                </tr>
              </thead>

              <tbody>

                <tr>
                  <?php 

                  $result = mysqli_query($conn, "SELECT * FROM courses ca, learningtypes lt WHERE ca.learning_id = lt.learning_id ORDER BY ca.course_id DESC"); 

                  while($row = mysqli_fetch_assoc($result)): 

                    ?>


                    <td value="<?php echo $row['course_id'] ?>" name="course_id">
                      <?php echo $row['course_name'] ?>       
                    </td>

                    <td><img src="./course/photos/<?php echo $row['photo'] ?>" width="150" height="100"></td>

                    <td><?php echo $row['start_date'] ?></td>
                    <td><?php echo $row['end_date'] ?></td>
                    <td><?php echo $row['duration'] ?></td>
                    <!-- <td><?php echo $row['price'] ?></td>-->            
                    <td><?php echo $row['start_at'] ?></td>
                    <td><?php echo $row['end_at'] ?></td>

                    <td value="<?php echo $row['learning_id'] ?>">
                      <?php echo $row['learning_name'] ?>

                    </td>

                    

                </tr>

              <?php endwhile; ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>


  </div>






  <!-- End of Main Content -->

  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; YDP 2020</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>



<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/admin.min.js"></script>


</body>

</html>
