<?php include_once('inc/connection.php');

?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="">
    <meta name="author" content="LS Web">
    <title>Customers</title>
    <?php //Header Links
    include('inc/head-link.php'); ?>
  </head>
    <style>
    .form-floating>.form-control, .form-floating>label, .form-select, .input-group-text, .form-control {
        padding: 0.571rem 1rem !important;}
    </style>
  <!-- END: Head-->
  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="">
    
    <!-- BEGIN: Header-->
    <?php include('inc/top_bar.php'); ?>
    <!-- END: Header-->
    <?php 
    include('inc/sidebar.php');
     ?>
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row"></div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <div class="col-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                        <h2 class="float-start mb-0">Customers</h2>
                                            <div class="float-end mb-0">
                                            <button class="btn btn-primary addNew waves-effect waves-float waves-light" data-bs-toggle="modal" data-bs-target="#Customer">Add New</button>
                                            </div>
                                    </div>
                                    <div class="modal fade" id="Customer" tabindex="-1" aria-modal="true" role="dialog">
                                      <div class="modal-dialog modal-lg modal-dialog-centered">
                                          <div class="modal-content">
                                          <div class="modal-header bg-transparent">
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body pb-5 px-sm-5 pt-50">
                                              <div class="text-center mb-2">
                                              <h1 class="mb-1">Customer Information</h1>
                                              </div>
                                              <form method="POST" id="CstDetailForm" class="row gy-1 pt-75" novalidate="novalidate" enctype="multipart/form-data">
                                              <div class="col-12 col-md-6">
                                                  <label class="form-label" for="cst_first_name">First Name</label><span class="text-danger">*</span>
                                                  <input type="text" id="cst_first_name" name="cst_first_name" class="form-control" value=""  placeholder="Enter First name" required>
                                              </div>
                                              <div class="col-12 col-md-6">
                                                  <label class="form-label" for="cst_last_name">Last Name</label><span class="text-danger">*</span>
                                                  <input type="text" id="cst_last_name" name="cst_last_name" class="form-control" value=""  placeholder="Enter Last name" required>
                                              </div>

                                              <div class="col-12 col-md-6">
                                                  <label class="form-label" for="cst_email">Email</label><span class="text-danger">*</span>
                                                  <input type="email" id="cst_email" name="cst_email" class="form-control" value=""  placeholder="Enter email" required>
                                              </div>
                                              <div class="col-12 col-md-6">
                                                  <label class="form-label" for="cst_mobile">Mobile Number</label><span class="text-danger">*</span>
                                                  <input type="tel" id="cst_mobile" name="cst_mobile" class="form-control" value=""  placeholder="Enter phone number" required>
                                              </div>
                                              <div class="col-12 col-md-6 password">
                                                  <label class="form-label" for="register-password">Password</label><span class="text-danger">*</span>
                                                  <div class="input-group input-group-merge form-password-toggle">
                                                      <input class="form-control form-control-merge" id="register-password" type="password" name="register-password" value="" placeholder="············" aria-describedby="register-password" required/><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                                  </div>
                                              </div>
                                              <div class="col-12 col-md-6 password">
                                                  <label class="form-label" for="confirm-password">Confirm Password</label><span class="text-danger">*</span>
                                                  <div class="input-group input-group-merge form-password-toggle">
                                                      <input type="password" name="confirm-password" id="confirm-password" class="form-control" placeholder="············" aria-describedby="confirm-password" required equalTo="#register-password"/><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                                  </div>
                                              </div>
                                              <div class="col-12">
                                                  <label class="form-label" for="cst_address">Address</label><span class="text-danger">*</span>
                                                  <input type="text" id="cst_address" name="cst_address" class="form-control" value=""  placeholder="Enter Full Address" required/>
                                              </div>
                                              <div class="col-12 col-md-6">
                                                  <label class="form-label" for="cst_postal">Post Code</label><span class="text-danger">*</span>
                                                  <input type="text" id="cst_postal" name="cst_postal" class="form-control" value=""  placeholder="Enter Full Address">
                                              </div>
                                              <div class="col-12 col-md-6">
                                                  <label class="form-label" for="cst_city">City</label><span class="text-danger">*</span>
                                                  <input type="text" id="cst_city" name="cst_city" class="form-control" value=""  placeholder="City Name" required>
                                              </div>
                                              
                                              <div class="col-12 col-md-6">
                                                  <label class="form-label" for="cst_town">Town</label><span class="text-danger">*</span>
                                                  <input type="text" id="cst_town" name="cst_town" class="form-control" value=""  placeholder="Town Name" required/>
                                              </div>
                                              <div class="col-12 col-md-6">
                                                  <div>
                                                  <label class="form-label" for="cst_country">Country</label><span class="text-danger">*</span>
                                                  <select id="cst_country" name="cst_country" class="form-select select2">
                                                      <option value="">Select</option>
                                                      <option value="africa">Africa</option>
                                                      <option value="india">India</option>
                                                      <option value="canada">Canada</option>
                                                  </select>
                                                  </div>
                                              </div>
                                              <div class="col-12 col-md-6 text-center">
                                                  <div class="d-flex align-items-center mt-2">
                                                  <div class="form-check form-switch form-check-success">
                                                      <input type="checkbox" name="cst_status" class="form-check-input" id="cst_status" checked="">
                                                      <label class="form-check-label" for="cst_status">
                                                      <span class="switch-icon-left"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                                                      <span class="switch-icon-right"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                                                      </label>
                                                  </div>
                                                  <label class="form-check-label fw-bolder" for="cst_status">Status</label>
                                                  </div>
                                              </div>
                                              <div class="col-12 col-md-6 profile">
                                                  <label for="user_profile" class="form-label btn btn-outline-secondary mt-2" style="width: 85%;"> <i data-feather='image'></i> <span>Upload profile picture</span></label>
                                                  <span class="MYuserImg">
                                                  <a href="" target="_blank"><img class="img" src="https://www.freeiconspng.com/uploads/profile-icon-9.png" style="width: 35px;height:35px;border-radius: 30px;margin: 15px 5px 0 5px;"></a>
                                                  </span>
                                                  <input class="form-control" style="width: 0px;height: 0;border: 0;padding: 0px !important;margin: 0;" type="file" id="user_profile" name="user_profile" accept="image/*" onchange="preview(this)">
                                                 
                                              </div>
                                              <div class="col-12 text-center mt-2 pt-50">
                                                  <input id="custID" type="hidden" name="CSTID" />
                                                  <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light addCustomer" id="cstBtn" name="addCustomer" value="submit">Register</button>
                                                  <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal" aria-label="Close">Discard</button>
                                              </div>
                                            
                                              </form>
                                          </div>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="modal fade" id="CustomerDetails" tabindex="-1" aria-modal="true" role="dialog">
                                      <div class="modal-dialog modal-lg modal-dialog-centered">
                                          <div class="modal-content">
                                          <div class="modal-header bg-transparent">
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body pb-5 px-sm-5 pt-50">
                                              <div class="text-center mb-2">
                                              <h1 class="mb-1">Customer Details</h1>
                                              </div>
                                              <form method="POST" id="CustomerInfo" class="row gy-1 pt-75" novalidate="novalidate" enctype="multipart/form-data">
                                              <div class="col-12 col-md-6">
                                                  <label class="form-label" for="cst_first_name">First Name</label><span class="text-danger">*</span>
                                                  <input type="text" id="vw_first_name" name="cst_first_name" class="form-control" value=""  placeholder="Enter First name" readonly>
                                              </div>
                                              <div class="col-12 col-md-6">
                                                  <label class="form-label" for="cst_last_name">Last Name</label><span class="text-danger">*</span>
                                                  <input type="text" id="vw_last_name" name="cst_last_name" class="form-control" value=""  placeholder="Enter Last name" readonly>
                                              </div>
                                              
                                              <div class="col-12 col-md-6">
                                                  <label class="form-label" for="cst_email">Email</label><span class="text-danger">*</span>
                                                  <input type="email" id="vw_email" name="cst_email" class="form-control" value=""  placeholder="Enter email" readonly>
                                              </div>
                                              <div class="col-12 col-md-6">
                                                  <label class="form-label" for="cst_mobile">Mobile Number</label><span class="text-danger">*</span>
                                                  <input type="tel" id="vw_mobile" name="cst_mobile" class="form-control" value=""  placeholder="Enter phone number" readonly>
                                              </div>
                                              <!-- <div class="col-12 col-md-6 password">
                                                  <label class="form-label" for="register-password">Password</label><span class="text-danger">*</span>
                                                  <div class="input-group input-group-merge form-password-toggle">
                                                      <input class="form-control form-control-merge" id="vw-register-password" type="password" name="register-password" value="" placeholder="············" aria-describedby="register-password" readonly/><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                                  </div>
                                              </div>
                                              <div class="col-12 col-md-6 password">
                                                  <label class="form-label" for="confirm-password">Confirm Password</label><span class="text-danger">*</span>
                                                  <div class="input-group input-group-merge form-password-toggle">
                                                      <input type="password" name="confirm-password" id="vw-confirm-password" class="form-control" placeholder="············" aria-describedby="confirm-password" readonly equalTo="#register-password"/><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                                  </div>
                                              </div> -->
                                              <div class="col-12">
                                                  <label class="form-label" for="cst_address">Address</label><span class="text-danger">*</span>
                                                  <input type="text" id="vw_address" name="cst_address" class="form-control" value=""  placeholder="Enter Full Address" readonly/>
                                              </div>
                                              <div class="col-12 col-md-6">
                                                  <label class="form-label" for="cst_postal">Post Code</label><span class="text-danger">*</span>
                                                  <input type="text" id="vw_postal" name="cst_postal" class="form-control" value=""  placeholder="Enter Full Address" readonly>
                                              </div>
                                              <div class="col-12 col-md-6">
                                                  <label class="form-label" for="cst_city">City</label><span class="text-danger">*</span>
                                                  <input type="text" id="vw_city" name="cst_city" class="form-control" value=""  placeholder="City Name" readonly>
                                              </div>
                                             
                                              <div class="col-12 col-md-6">
                                                  <label class="form-label" for="cst_town">Town</label><span class="text-danger">*</span>
                                                  <input type="text" id="vw_town" name="cst_town" class="form-control" value=""  placeholder="Town Name" readonly/>
                                              </div>
                                              <div class="col-12 col-md-6">
                                                  <div>
                                                  <label class="form-label" for="cst_country">Country</label><span class="text-danger">*</span>
                                                  <select id="vw_country" name="cst_country" class="form-select select2" disabled>
                                                      <option value="">Select</option>
                                                      <option value="Africa">Africa</option>
                                                      <option value="India">India</option>
                                                      <option value="Canada">Canada</option>
                                                  </select>
                                                  </div>
                                              </div>
                                              <!-- <div class="col-12 col-md-6 text-center">
                                                  <div class="d-flex align-items-center mt-2">
                                                  <div class="form-check form-switch form-check-success">
                                                      <input type="checkbox" name="cst_status" class="form-check-input" id="vw_status" checked="" readonly>
                                                      <label class="form-check-label" for="cst_status">
                                                      <span class="switch-icon-left"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                                                      <span class="switch-icon-right"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                                                      </label>
                                                  </div>
                                                  <label class="form-check-label fw-bolder" for="cst_status">Status</label>
                                                  </div>
                                              </div> -->
                                              <div class="col-12 col-md-6 profile">
                                                  <!-- <label for="user_profile" class="form-label btn btn-outline-secondary mt-2" style="width: 85%;"> <i data-feather='image'></i> <span>Upload profile picture</span></label> -->
                                                  <span class="MYuserImg">
                                                  <a href="" target="_blank"><img class="img" src="https://www.freeiconspng.com/uploads/profile-icon-9.png" style="width: 100px;height:100px;border-radius: 10px;margin: 5px 5px;"></a>
                                                  </span>
                                                  <!-- <input class="form-control" style="width: 0px;height: 0;border: 0;padding: 0px !important;margin: 0;" type="file" id="user_profile" name="user_profile" accept="image/*" onchange="preview(this)" readonly>
                                                  
                                              </div>
                                              <div class="col-12 text-center mt-2 pt-50">
                                                  <input id="custID" type="hidden" name="CSTID"/>
                                                   <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light addCustomer" id="cstBtn" name="addCustomer" value="submit">Register</button> -->
                                                  <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal" aria-label="Close">Close</button>
                                              </div>
                                            
                                              </form>
                                          </div>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="card-body card-datatable table-responsive pt-0">
                                    <table id="CustTable" class="user-list-table datatables-basic table table-striped table-sm dataTable no-footer" data-page-length="30">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                
                                                <th>Password</th>
                                                <!-- <th>Mobile</th>
                                                <th>Country</th>
                                                <th>Status</th>
                                                <th>Action</th>  -->
                                            </tr>
                                            <?php
                                                $sql = "SELECT * FROM `users`";
                                                $result = mysqli_query($con,$sql);

                                                while($row = mysqli_fetch_assoc($result)){

                                                
                                            ?>
                                            <tr>
                                                <td>#</td>
                                                <td><?php echo $row['username'] ?></td>
                                                <td><?php echo $row['email'] ?></td>
                                                <td><?php echo $row['pwd'] ?></td>
                                               
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                        </thead>
                                    </table>
                                    </div>
                                </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->
            </div>
      </div>
    </div>
    <!-- END: Content-->
    <?php
    //  include('inc/customizer.php'); 
    ?>
    <!-- BEGIN: Vendor JS-->
  
    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
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