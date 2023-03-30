<?php
// error_reporting(true);

include('inc/connection.php');

$id = $_REQUEST['id'];
$email = $_SESSION['email'];

$patient_email = "";
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
      
   <!-- BEGIN: Vendor CSS-->
   <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/wizard/bs-stepper.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-wizard.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

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
    <!-- <button class="btn btn-primary waves-effect waves-float waves-light" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">Add </button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Record</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </div> -->


  <section class="app-user-view-account">
  <div class="row">
    <!-- User Sidebar -->
    <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
      <!-- User Card -->
      <div class="card">
        <div class="card-body">
          <div class="user-avatar-section">
            <div class="d-flex align-items-center flex-column">
              <img
                class="img-fluid rounded mt-3 mb-2"
                src="app-assets/images/patient.png"
                height="110"
                width="110"
                alt="User avatar"
              />
              <div class="user-info text-center">
                <?php
                $query = "SELECT * FROM `appointment` WHERE `id` = $id";
                $result = mysqli_query($con,$query);
                $row = mysqli_fetch_assoc($result);
                $patient_email = $row['email'];
                ?>
                <h4><?php echo $row['name'] ?></h4>
                <span class="badge bg-light-secondary">Patient</span>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-around my-2 pt-75">
            <div class="d-flex align-items-start me-2">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="check" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <?php
                $query1 = "SELECT * FROM `appointment` WHERE `doctor_email` = '$email' AND `email` = '$patient_email' AND `status` = 'done'";
                $result1 = mysqli_query($con,$query1);
                $num = mysqli_num_rows($result1);
               
                ?>
                <h4 class="mb-0"><?php echo $num; ?></h4>
                <small>Completed Appointment </small>
              </div>
            </div>
            <div class="d-flex align-items-start">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="briefcase" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <?php
                 $query1 = "SELECT * FROM `appointment` WHERE `doctor_email` = '$email' AND `email` = '$patient_email' AND `status` = 'pending'";
                  $result1 = mysqli_query($con,$query1);
                  $num = mysqli_num_rows($result1);
                ?>
                <h4 class="mb-0"><?php echo $num; ?></h4>
                <small>pending Appointment</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /User Card -->
    </div>
    <!--/ User Sidebar -->

  </div>
</section>
  


<!-- list and filter start -->
    <div class="card">
        <div class="card-body border-bottom">
          <h4 class="card-title">Completed Appointment details</h4>
          <button class="btn btn-primary waves-effect waves-float waves-light" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">Add </button>

          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Fill Deails</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <div class="col-md-12 col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Make a Appointment</h4>
            </div>
            <div class="card-body">
              <form class="form form-horizontal" method="post" action="patient_appointments.php?id=<?php echo $id; ?>">
                <div class="row">
                  <div class="col-12">
                    <div class="mb-1 row">
                      <div class="col-sm-3">
                        <label class="col-form-label" for="fname-icon">First Name</label>
                      </div>
                      <div class="col-sm-9">
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i data-feather="user"></i></span>
                          <input
                            type="text"
                            id="fname-icon"
                            class="form-control"
                            name="fullname"
                            placeholder="First Name"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-1 row">
                      <div class="col-sm-3">
                        <label class="col-form-label" for="email-icon">Email</label>
                      </div>
                      <div class="col-sm-9">
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i data-feather="mail"></i></span>
                          <input
                            type="email"
                            id="email-icon"
                            name="email"
                            value="<?php echo $email; ?>"
                            class="form-control"
                            placeholder="Email"
                            readonly
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-1 row">
                      <div class="col-sm-3">
                        <label class="col-form-label" for="contact-icon">Mobile</label>
                      </div>
                      <div class="col-sm-9">
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i data-feather="smartphone"></i></span>
                          <input
                            type="number"
                            id="contact-icon"
                            name="phone"
                            class="form-control"
                            placeholder="Mobile"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-1 row">
                      <div class="col-sm-3">
                        <label class="col-form-label" for="pass-icon">Gender</label>
                      </div>
                      <div class="col-sm-9">
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i data-feather="lock"></i></span>
                          <input
                            type="text"
                            id="pass-icon"
                            class="form-control"
                            name="gender"
                            placeholder="Gender"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-1 row">
                      <div class="col-sm-3">
                        <label class="col-form-label" for="fname-icon">Address</label>
                      </div>
                      <div class="col-sm-9">
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i data-feather="user"></i></span>
                          <input
                            type="text"
                            id="fname-icon"
                            class="form-control"
                            name="address"
                            placeholder="Address"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-1 row">
                      <div class="col-sm-3">
                        <label class="col-form-label" for="fname-icon">City</label>
                      </div>
                      <div class="col-sm-9">
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i data-feather="user"></i></span>
                          <input
                            type="text"
                            id="fname-icon"
                            class="form-control"
                            placeholder="City"
                            name="city"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-1 row">
                      <div class="col-sm-3">
                        <label class="col-form-label" for="fname-icon">Description</label>
                      </div>
                      <div class="col-sm-9">
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i data-feather="user"></i></span>
                          <input
                            type="text"
                            id="fname-icon"
                            class="form-control"
                            name="description"
                            placeholder="Description"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-9 offset-sm-3">
                    <button type="submit" name="submit" class="btn btn-primary me-1">Submit</button>
                  </div>
                  
                  
                </div>
              </form>
            </div>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>


      <div class="row">
        <div class="col-md-4 user_role"></div>
        <div class="col-md-4 user_plan"></div>
        <div class="col-md-4 user_status"></div>
      </div>
    </div>
    <div class="card-datatable table-responsive pt-0">
      <table class="user-list-table table">
        <thead class="table-light">
          <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Address</th>
            <th>city</th>
            <th>Description</th>
            <th>Doctor Email</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
                <?php
               $query1 = "SELECT * FROM `appointment` WHERE `doctor_email` = '$email' AND `email` = '$patient_email'";
               $result1 = mysqli_query($con,$query1);
               $num = mysqli_num_rows($result1);
               while($row = mysqli_fetch_assoc($result1)){
            ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['city'] ?></td>
                <td><?php echo $row['description'] ?></td>
                <td><?php echo $row['doctor_email'] ?></td>
                <td><?php echo $row['status'] ?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
      </table>
    </div>
    <!-- Modal to add new user starts-->
    <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
      <div class="modal-dialog">
        <form class="add-new-user modal-content pt-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
          <div class="modal-header mb-1">
            <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
          </div>
          <div class="modal-body flex-grow-1">
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
              <input
                type="text"
                class="form-control dt-full-name"
                id="basic-icon-default-fullname"
                placeholder="John Doe"
                name="user-fullname"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-uname">Username</label>
              <input
                type="text"
                id="basic-icon-default-uname"
                class="form-control dt-uname"
                placeholder="Web Developer"
                name="user-name"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-email">Email</label>
              <input
                type="text"
                id="basic-icon-default-email"
                class="form-control dt-email"
                placeholder="john.doe@example.com"
                name="user-email"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-contact">Contact</label>
              <input
                type="text"
                id="basic-icon-default-contact"
                class="form-control dt-contact"
                placeholder="+1 (609) 933-44-22"
                name="user-contact"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-company">Company</label>
              <input
                type="text"
                id="basic-icon-default-company"
                class="form-control dt-contact"
                placeholder="PIXINVENT"
                name="user-company"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="country">Country</label>
              <select id="country" class="select2 form-select">
                <option value="Australia">USA</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Belarus">Belarus</option>
                <option value="Brazil">Brazil</option>
                <option value="Canada">Canada</option>
                <option value="China">China</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Japan">Japan</option>
                <option value="Korea">Korea, Republic of</option>
                <option value="Mexico">Mexico</option>
                <option value="Philippines">Philippines</option>
                <option value="Russia">Russian Federation</option>
                <option value="South Africa">South Africa</option>
                <option value="Thailand">Thailand</option>
                <option value="Turkey">Turkey</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
              </select>
            </div>
            <div class="mb-1">
              <label class="form-label" for="user-role">User Role</label>
              <select id="user-role" class="select2 form-select">
                <option value="subscriber">Subscriber</option>
                <option value="editor">Editor</option>
                <option value="maintainer">Maintainer</option>
                <option value="author">Author</option>
                <option value="admin">Admin</option>
              </select>
            </div>
            <div class="mb-2">
              <label class="form-label" for="user-plan">Select Plan</label>
              <select id="user-plan" class="select2 form-select">
                <option value="basic">Basic</option>
                <option value="enterprise">Enterprise</option>
                <option value="company">Company</option>
                <option value="team">Team</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary me-1 data-submit">Submit</button>
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
    <!-- Modal to add new user Ends-->
  </div>
  <!-- list and filter end -->

  

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
    <script src="app-assets/vendors/js/forms/wizard/bs-stepper.min.js"></script>
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/forms/form-wizard.min.js"></script>
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


