<?php
// error_reporting(true);

include('inc/connection.php');
// if(!isset($_SESSION['uid']) ||  $_SESSION['uid']=='')
// {
//   header('Location: login.php');
//   die;
// }

// get logged in user detail  
// $sql_ud =  "SELECT * FROM users WHERE uid='".$_SESSION['uid']."'";

// if ($res_ud = mysqli_query($link, $sql_ud)) {

//   if (mysqli_num_rows($res_ud) > 0) {
   
//    $row_ud= mysqli_fetch_assoc($res_ud);
//    $username = $row_ud['username'];
//   }
// }
$email = $_SESSION['email'];
?>
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="My Health Record Registration">
    <title>Home Page</title>
       <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo/logo.png">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/css/pages/page-profile.min.css">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!-- END: Custom CSS-->


  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body  class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <?php
    if(isset($_SESSION['username'])){
      echo $_SESSION['username']; 
    }else{
      header("location: login.php");
    } 
    ?>
    <!-- BEGIN: Header-->
    <?php include('inc/top_bar.php'); ?>


  <?php include('inc/sidebar.php');
  ?>

 <!-- BEGIN: Content-->
<div class="app-content content ">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Profile</h2>
                
              </div>
            </div>
          </div>
          <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
            <div class="mb-1 breadcrumb-right">
              <div class="dropdown">
                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><div id="user-profile">
  <!-- profile header -->
  <div class="row">
    <div class="col-12">
      <div class="card profile-header mb-2">
        <!-- profile cover photo -->
        <img
          class="card-img-top"
          src="app-assets/images/profile/user-uploads/timeline.jpg"
          alt="User Profile Image"
        />
        <!--/ profile cover photo -->

        <div class="position-relative">
          <!-- profile picture -->
          <div class="profile-img-container d-flex align-items-center">
            <div class="profile-img">
              <img
                src="app-assets/images/portrait/small/avatar-s-2.jpg"
                class="rounded img-fluid"
                alt="Card image"
              />
            </div>
            <!-- profile title -->
            <div class="profile-title ms-3">
              <h2 class="text-white"><?php echo $_SESSION['username']; ?></h2>
              <p class="text-white"><?php echo $_SESSION['role']; ?></p>
            </div>
          </div>
        </div>

        <!-- tabs pill -->
        <div class="profile-header-nav">
          <!-- navbar -->
          <nav class="navbar navbar-expand-md navbar-light justify-content-end justify-content-md-between w-100">
            <button
              class="btn btn-icon navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i data-feather="align-justify" class="font-medium-5"></i>
            </button>

            <!-- collapse  -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="profile-tabs d-flex justify-content-between flex-wrap mt-1 mt-md-0">
                <ul class="nav nav-pills mb-0">
                  <li class="nav-item">
                    <a class="nav-link fw-bold active" href="#">
                      <span class="d-none d-md-block">Data</span>
                      <i data-feather="rss" class="d-block d-md-none"></i>
                    </a>
                  </li>
                </ul>
                <!-- edit button -->
                <a class="btn btn-primary" href="doctor_profile_edit.php">
                  <i data-feather="edit" class="d-block d-md-none"></i>
                  <span class="fw-bold d-none d-md-block">Add</span>
                </a>
              </div>
            </div>
            <!--/ collapse  -->
          </nav>
          <!--/ navbar -->
        </div>
      </div>
    </div>
  </div>
  <!--/ profile header -->


  

  
</div>

        </div>
      </div>
</div>
    <!-- END: Content-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
  <div class="row match-height">
    <!-- BEGIN: Customizer-->
    <div class="customizer d-none d-md-block"><a class="customizer-toggle d-flex align-items-center justify-content-center" href="#"><i class="spinner" data-feather="settings"></i></a><div class="customizer-content">
  <!-- Customizer header -->
  <div class="customizer-header px-2 pt-1 pb-0 position-relative">
    <h4 class="mb-0">Theme Customizer</h4>
    <p class="m-0">Customize & Preview in Real Time</p>

    <a class="customizer-close" href="#"><i data-feather="x"></i></a>
  </div>

  <hr />
  

  <!-- Styling & Text Direction -->
  <div class="customizer-styling-direction px-2">
    <p class="fw-bold">Skin</p>
    <div class="d-flex">
      <div class="form-check me-1">
        <input
          type="radio"
          id="skinlight"
          name="skinradio"
          class="form-check-input layout-name"
          checked
          data-layout=""
        />
        <label class="form-check-label" for="skinlight">Light</label>
      </div>
      <div class="form-check me-1">
        <input
          type="radio"
          id="skinbordered"
          name="skinradio"
          class="form-check-input layout-name"
          data-layout="bordered-layout"
        />
        <label class="form-check-label" for="skinbordered">Bordered</label>
      </div>
      <div class="form-check me-1">
        <input
          type="radio"
          id="skindark"
          name="skinradio"
          class="form-check-input layout-name"
          data-layout="dark-layout"
        />
        <label class="form-check-label" for="skindark">Dark</label>
      </div>
      <div class="form-check">
        <input
          type="radio"
          id="skinsemidark"
          name="skinradio"
          class="form-check-input layout-name"
          data-layout="semi-dark-layout"
        />
        <label class="form-check-label" for="skinsemidark">Semi Dark</label>
      </div>
    </div>
  </div>

  <hr />

  

  <!-- Menu -->
  <div class="customizer-menu px-2">
    <div id="customizer-menu-collapsible" class="d-flex">
      <p class="fw-bold me-auto m-0">Menu Collapsed</p>
      <div class="form-check form-check-primary form-switch">
        <input type="checkbox" class="form-check-input" id="collapse-sidebar-switch" />
        <label class="form-check-label" for="collapse-sidebar-switch"></label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Layout Width -->
  <div class="customizer-footer px-2">
    <p class="fw-bold">Layout Width</p>
    <div class="d-flex">
      <div class="form-check me-1">
        <input type="radio" id="layout-width-full" name="layoutWidth" class="form-check-input" checked />
        <label class="form-check-label" for="layout-width-full">Full Width</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="layout-width-boxed" name="layoutWidth" class="form-check-input" />
        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
      </div>
    </div>
  </div>
  <hr />
  

  <!-- Navbar -->
  <div class="customizer-navbar px-2">
    <div id="customizer-navbar-colors">
      <p class="fw-bold">Navbar Color</p>
      <ul class="list-inline unstyled-list">
        <li class="color-box bg-white border selected" data-navbar-default=""></li>
        <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
        <li class="color-box bg-secondary" data-navbar-color="bg-secondary"></li>
        <li class="color-box bg-success" data-navbar-color="bg-success"></li>
        <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
        <li class="color-box bg-info" data-navbar-color="bg-info"></li>
        <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
        <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
      </ul>
    </div>
    
   
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT  &copy; 2022<a class="ms-25" href="#" target="_blank">My Health</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


   
    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/page-profile.min.js"></script>
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
  </body>
  <!-- END: Body-->
</html>

















