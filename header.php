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
  header('Location: ../login.php');
  exit;
}

}

?>

<?php include('../config.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>YDP Admin Dashboard</title>

  <!-- custom fonts-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- css styles for this admin-->
  <link href="../css/admin.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="../css/mystyle.css">

</head>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../dashboard.php">
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
        <a class="nav-link" href="../dashboard.php">
          <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
          <i class="fas fa-home"></i>
          <span>Home</span></a>
        </li>

        
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
              <a class="collapse-item" href="../speaker/speaker-list.php">Speaker</a>
              <a class="collapse-item" href="../teacher/teacher-list.php">Teacher</a>
              <a class="collapse-item" href="../visitor/visitor-list.php">Visitor</a>
              <a class="collapse-item" href="../review/review-list.php">Review</a>
            </div>
          </div>
        </li>




        <!-- Nav Item - courses Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link" href="../course/course-list.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Course</span></a>
          </li>

          <!-- Nav Item - coursecategory Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link" href="../coursecategory/coursecategory-list.php">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Course Category</span></a>
            </li>

            <!-- Nav Item - coursecategory1 Collapse Menu -->
            <li class="nav-item">
              <a class="nav-link" href="../coursecategory1/coursecategory1-list.php">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Course Category 1</span></a>
              </li>

              <!-- Nav Item - subcategory Collapse Menu -->
              <li class="nav-item">
                <a class="nav-link" href="../subcategory/subcategory-list.php">
                  <i class="fas fa-fw fa-chart-area"></i>
                  <span>Sub Category</span></a>
                </li>

              <!-- Nav Item - activity Collapse Menu -->
                <li class="nav-item">
                  <a class="nav-link" href="../activity/activity-list.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Activity</span></a>
                  </li>


                 <!-- Nav Item - logout -->
              <li class="nav-item">
                <a class="nav-link" href="../logout.php">
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
                          <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['login_admin_name']; ?></span>           
                        </a>
                        
                      </li>

                    </ul>

                  </nav>
        <!-- End of Topbar -->