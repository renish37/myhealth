<!DOCTYPE html>
<!--
Template Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/vuexy_admin
Renew Support: https://1.envato.market/vuexy_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template/layout-collapsed-menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Dec 2021 08:36:02 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Layout collapsed menu - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/toastr.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-ecommerce.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/charts/chart-apex.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/ext-component-toastr.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <?php
    include('inc/top_bar.php'); 
    if(isset($_SESSION['username'])){
      include('inc/sidebar.php');
    }
    ?>

    <!-- END: Header-->




    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Home</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-detached">
                <div class="content-body">
                    <!-- Blog Detail -->
                    <div class="blog-detail-wrapper">
                        <div class="row">
                            <!-- Blog -->
                            <div class="col-12">
                                <div class="card">
                                    <img src="app-assets/images/portrait/home.jpg" class="img-fluid card-img-top"
                                        alt="Blog Detail Pic" style="height: 46rem;width: 100%;" />
                                    <div class="card-body">
                                        <h4 class="card-title">The Best Features Coming to iOS and Web design</h4>
                                        <div class="d-flex">
                                            <div class="avatar me-50">
                                                <img src="app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar"
                                                    width="24" height="24" />
                                            </div>
                                            <div class="author-info">
                                                <small class="text-muted me-25">by</small>
                                                <small><a href="#" class="text-body">Ghani Pradita</a></small>
                                                <span class="text-muted ms-50 me-25">|</span>
                                                <small class="text-muted">Jan 10, 2020</small>
                                            </div>
                                        </div>
                                        <div class="my-1 py-25">
                                            <a href="#">
                                                <span class="badge rounded-pill badge-light-danger me-50">Gaming</span>
                                            </a>
                                            <a href="#">
                                                <span class="badge rounded-pill badge-light-warning">Video</span>
                                            </a>
                                        </div>
                                        <p class="card-text mb-2">
                                            Before you get into the nitty-gritty of coming up with a perfect title,
                                            start with a rough draft: your
                                            working title. What is that, exactly? A lot of people confuse working titles
                                            with topics. Let's clear that
                                            Topics are very general and could yield several different blog posts. Think
                                            "raising healthy kids," or
                                            "kitchen storage." A writer might look at either of those topics and choose
                                            to take them in very, very
                                            different directions.A working title, on the other hand, is very specific
                                            and guides the creation of a
                                            single blog post. For example, from the topic "raising healthy kids," you
                                            could derive the following working
                                            title See how different and specific each of those is? That's what makes
                                            them working titles, instead of
                                            overarching topics.
                                        </p>
                                        <h4 class="mb-75">Unprecedented Challenge</h4>
                                        <ul class="p-0 mb-2">
                                            <li class="d-block">
                                                <span class="me-25">-</span>
                                                <span>Preliminary thinking systems</span>
                                            </li>
                                            <li class="d-block">
                                                <span class="me-25">-</span>
                                                <span>Bandwidth efficient</span>
                                            </li>
                                            <li class="d-block">
                                                <span class="me-25">-</span>
                                                <span>Green space</span>
                                            </li>
                                            <li class="d-block">
                                                <span class="me-25">-</span>
                                                <span>Social impact</span>
                                            </li>
                                            <li class="d-block">
                                                <span class="me-25">-</span>
                                                <span>Thought partnership</span>
                                            </li>
                                            <li class="d-block">
                                                <span class="me-25">-</span>
                                                <span>Fully ethical life</span>
                                            </li>
                                        </ul>
                                        <div class="d-flex align-items-start">
                                            <div class="avatar me-2">
                                                <img src="app-assets/images/portrait/small/avatar-s-6.jpg" width="60"
                                                    height="60" alt="Avatar" />
                                            </div>
                                            <div class="author-info">
                                                <h6 class="fw-bolder">Willie Clark</h6>
                                                <p class="card-text mb-0">
                                                    Based in London, Uncode is a blog by Willie Clark. His posts explore
                                                    modern design trends through photos
                                                    and quotes by influential creatives and web designer around the
                                                    world.
                                                </p>
                                            </div>
                                        </div>
                                        <hr class="my-2" />
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex align-items-center me-1">
                                                    <a href="#" class="me-50">
                                                        <i data-feather="message-square"
                                                            class="font-medium-5 text-body align-middle"></i>
                                                    </a>
                                                    <a href="#">
                                                        <div class="text-body align-middle">19.1K</div>
                                                    </a>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="me-50">
                                                        <i data-feather="bookmark"
                                                            class="font-medium-5 text-body align-middle"></i>
                                                    </a>
                                                    <a href="#">
                                                        <div class="text-body align-middle">139</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="dropdown blog-detail-share">
                                                <i data-feather="share-2" class="font-medium-5 text-body cursor-pointer"
                                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"></i>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item py-50 px-1">
                                                        <i data-feather="github" class="font-medium-3"></i>
                                                    </a>
                                                    <a href="#" class="dropdown-item py-50 px-1">
                                                        <i data-feather="gitlab" class="font-medium-3"></i>
                                                    </a>
                                                    <a href="#" class="dropdown-item py-50 px-1">
                                                        <i data-feather="facebook" class="font-medium-3"></i>
                                                    </a>
                                                    <a href="#" class="dropdown-item py-50 px-1">
                                                        <i data-feather="twitter" class="font-medium-3"></i>
                                                    </a>
                                                    <a href="#" class="dropdown-item py-50 px-1">
                                                        <i data-feather="linkedin" class="font-medium-3"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Blog -->

                            <!-- Blog Comment -->
                            <div class="col-12 mt-1" id="blogComment">
                                <h6 class="section-label mt-25">Comment</h6>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="avatar me-75">
                                                <img src="app-assets/images/portrait/small/avatar-s-9.jpg" width="38"
                                                    height="38" alt="Avatar" />
                                            </div>
                                            <div class="author-info">
                                                <h6 class="fw-bolder mb-25">Chad Alexander</h6>
                                                <p class="card-text">May 24, 2020</p>
                                                <p class="card-text">
                                                    A variation on the question technique above, the multiple-choice
                                                    question great way to engage your
                                                    reader.
                                                </p>
                                                <a href="#">
                                                    <div class="d-inline-flex align-items-center">
                                                        <i data-feather="corner-up-left"
                                                            class="font-medium-3 me-50"></i>
                                                        <span>Reply</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Blog Comment -->

                            <!-- Leave a Blog Comment -->
                            <div class="col-12 mt-1">
                                <h6 class="section-label mt-25">Leave a Comment</h6>
                                <div class="card">
                                    <div class="card-body">
                                        <form action="javascript:void(0)" class="form">
                                            <div class="row">
                                                <div class="col-sm-6 col-12">
                                                    <div class="mb-2">
                                                        <input type="text" class="form-control" placeholder="Name" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <div class="mb-2">
                                                        <input type="email" class="form-control" placeholder="Email" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <div class="mb-2">
                                                        <input type="url" class="form-control" placeholder="Website" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <textarea class="form-control mb-2" rows="4"
                                                        placeholder="Comment"></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check mb-2">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="blogCheckbox" />
                                                        <label class="form-check-label" for="blogCheckbox">Save my name,
                                                            email, and website in this browser for the next time I
                                                            comment.</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary">Post Comment</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--/ Leave a Blog Comment -->
                        </div>
                    </div>
                    <!--/ Blog Detail -->

                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- BEGIN: Customizer-->
    <div class="customizer d-none d-md-block"><a
            class="customizer-toggle d-flex align-items-center justify-content-center" href="#"><i class="spinner"
                data-feather="settings"></i></a>
        <div class="customizer-content">
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
                        <input type="radio" id="skinlight" name="skinradio" class="form-check-input layout-name" checked
                            data-layout="" />
                        <label class="form-check-label" for="skinlight">Light</label>
                    </div>
                    <div class="form-check me-1">
                        <input type="radio" id="skinbordered" name="skinradio" class="form-check-input layout-name"
                            data-layout="bordered-layout" />
                        <label class="form-check-label" for="skinbordered">Bordered</label>
                    </div>
                    <div class="form-check me-1">
                        <input type="radio" id="skindark" name="skinradio" class="form-check-input layout-name"
                            data-layout="dark-layout" />
                        <label class="form-check-label" for="skindark">Dark</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="skinsemidark" name="skinradio" class="form-check-input layout-name"
                            data-layout="semi-dark-layout" />
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
                        <input type="radio" id="layout-width-full" name="layoutWidth" class="form-check-input"
                            checked />
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

                <p class="navbar-type-text fw-bold">Navbar Type</p>
                <div class="d-flex">
                    <div class="form-check me-1">
                        <input type="radio" id="nav-type-floating" name="navType" class="form-check-input" checked />
                        <label class="form-check-label" for="nav-type-floating">Floating</label>
                    </div>
                    <div class="form-check me-1">
                        <input type="radio" id="nav-type-sticky" name="navType" class="form-check-input" />
                        <label class="form-check-label" for="nav-type-sticky">Sticky</label>
                    </div>
                    <div class="form-check me-1">
                        <input type="radio" id="nav-type-static" name="navType" class="form-check-input" />
                        <label class="form-check-label" for="nav-type-static">Static</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="nav-type-hidden" name="navType" class="form-check-input" />
                        <label class="form-check-label" for="nav-type-hidden">Hidden</label>
                    </div>
                </div>
            </div>
            <hr />

            <!-- Footer -->
            <div class="customizer-footer px-2">
                <p class="fw-bold">Footer Type</p>
                <div class="d-flex">
                    <div class="form-check me-1">
                        <input type="radio" id="footer-type-sticky" name="footerType" class="form-check-input" />
                        <label class="form-check-label" for="footer-type-sticky">Sticky</label>
                    </div>
                    <div class="form-check me-1">
                        <input type="radio" id="footer-type-static" name="footerType" class="form-check-input"
                            checked />
                        <label class="form-check-label" for="footer-type-static">Static</label>
                    </div>
                    <div class="form-check me-1">
                        <input type="radio" id="footer-type-hidden" name="footerType" class="form-check-input" />
                        <label class="form-check-label" for="footer-type-hidden">Hidden</label>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End: Customizer-->


    </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2022<a
                    class="ms-25" href="#" target="_blank">My Health</a><span class="d-none d-sm-inline-block">, All
                    rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i
                    data-feather="heart"></i></span></p>
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
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
    </script>
</body>
<!-- END: Body-->

</html>