<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/abstack/layouts/gradient-horizontal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Apr 2024 04:00:37 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Abstack - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
    
                        <li class="d-none d-sm-block">
                            <form class="app-search">
                                <div class="app-search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit">
                                                <i class="fe-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </li>

                        <li class="dropdown d-none d-lg-block">
                                <a class="nav-link dropdown-toggle mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/flags/us.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">English <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="assets/images/flags/germany.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="assets/images/flags/italy.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="assets/images/flags/spain.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="assets/images/flags/russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                                    </a>

                                </div>
                            </li>
            
                            <li class="dropdown notification-list">
                                    <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <i class="fe-bell noti-icon"></i>
                                        <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5 class="m-0">
                                                <span class="float-right">
                                                    <a href="#" class="text-dark">
                                                        <small>Clear All</small>
                                                    </a>
                                                </span>Notification
                                            </h5>
                                        </div>

                                        <div class="slimscroll noti-scroll">

                                             <!-- item-->
                                             <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                    <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                                    <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                                </a>

                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                    <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                                    <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                                </a>

                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                    <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                                </a>

                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                    <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                                    <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                                </a>

                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                    <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
                                                    <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
                                                </a>

                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                    <div class="notify-icon bg-primary"><i class="mdi mdi-heart"></i></div>
                                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                                                </a>

                                        </div>

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                            View all
                                            <i class="fi-arrow-right"></i>
                                        </a>

                                    </div>
                                </li>
    
                                <li class="dropdown notification-list">
                                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                            <span class="ml-1">Samuel <i class="mdi mdi-chevron-down"></i> </span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                            <!-- item-->
                                            <div class="dropdown-header noti-title">
                                                <h6 class="text-overflow m-0">Welcome !</h6>
                                            </div>
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <i class="fe-user"></i>
                                                <span>Profile</span>
                                            </a>
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <i class="fe-settings"></i>
                                                <span>Settings</span>
                                            </a>
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <i class="fe-lock"></i>
                                                <span>Lock Screen</span>
                                            </a>
    
                                            <div class="dropdown-divider"></div>
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <i class="fe-log-out"></i>
                                                <span>Logout</span>
                                            </a>
    
                                        </div>
                                    </li>
    
                        <li class="dropdown notification-list">
                            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                                <i class="fe-settings noti-icon"></i>
                            </a>
                        </li>
    
                    </ul>
    
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="index.html" class="logo text-center">
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="16">
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">U</span> -->
                                <img src="assets/images/logo-sm.png" alt="" height="24">
                            </span>
                        </a>
                    </div>
    
                </div> <!-- end container-fluid-->
            </div>
            <!-- end Topbar -->

            <div class="topbar-menu">
                    <div class="container-fluid">
                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navigation-menu">
    
                                <li class="has-submenu">
                                    <a href="index.html"><i class="fe-airplay"></i>Dashboard</a>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="fe-briefcase"></i>UI Kit
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="ui-typography.html">Typography</a></li>
                                        <li><a href="ui-cards.html">Cards</a></li>
                                        <li><a href="ui-buttons.html">Buttons</a></li>
                                        <li><a href="ui-modals.html">Modals</a></li>
                                        <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                        <li><a href="ui-tabs.html">Tabs</a></li>
                                        <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                        <li><a href="ui-notifications.html">Notification</a></li>
                                        <li><a href="ui-grid.html">Grid</a></li>
                                        <li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
                                        <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                    </ul>
                                </li>
    
                                <li class="has-submenu">
                                    <a href="#">
                                        <i class="fe-box"></i>Components</a>
                                    <ul class="submenu">
                                        <li class="has-submenu">
                                            <a href="#">Icons <div class="arrow-down"></div></a>
                                            <ul class="submenu">
                                                <li><a href="icons-materialdesign.html">Material Design</a></li>
                                                <li><a href="icons-dripicons.html">Dripicons</a></li>
                                                <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                                <li><a href="icons-feather.html">Feather Icons</a></li>
                                            </ul>
                                        </li>
    
                                        <li class="has-submenu">
                                            <a href="#">Forms <div class="arrow-down"></div></a>
                                            <ul class="submenu">
                                                <li><a href="form-elements.html">Form Elements</a></li>
                                                <li><a href="form-advanced.html">Form Advanced</a></li>
                                                <li><a href="form-validation.html">Form Validation</a></li>
                                                <li><a href="form-pickers.html">Form Pickers</a></li>
                                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                                <li><a href="form-mask.html">Form Masks</a></li>
                                                <li><a href="forms-quilljs.html">Quilljs Editor</a></li>
                                                <li><a href="form-x-editable.html">X Editable</a></li>
                                                <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                            </ul>
                                        </li>
    
                                        <li class="has-submenu">
                                            <a href="#">Tables <div class="arrow-down"></div></a>
                                            <ul class="submenu">
                                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                                <li><a href="tables-datatable.html">Data Tables</a></li>
                                                <li><a href="tables-responsive.html">Responsive Table</a></li>
                                                <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                                                <li><a href="tables-editable.html">Editable Tables</a></li>
                                            </ul>
                                        </li>
    
                                        <li class="has-submenu">
                                            <a href="#">Graphs <div class="arrow-down"></div></a>
                                            <ul class="submenu">
                                                <li><a href="charts-flot.html">Flot Chart</a></li>
                                                <li><a href="charts-morris.html">Morris Chart</a></li>
                                                <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                                <li><a href="charts-sparkline.html">Sparkline Chart</a></li>
                                                <li><a href="charts-knob.html">Jquery Knob</a></li>
                                            </ul>
                                        </li>
    
                                        <li class="has-submenu">
                                            <a href="#">Maps <div class="arrow-down"></div></a>
                                            <ul class="submenu">
                                                <li><a href="maps-google.html">Google Maps</a></li>
                                                <li><a href="maps-vector.html">Vector Maps</a></li>
                                                <li><a href="maps-mapael.html">Mapael Maps</a></li>
                                            </ul>
                                        </li>
    
                                        <li>
                                            <a href="calendar.html">Calendar</a>
                                        </li>
    
                                    </ul>
                                </li>

    
                                <li class="has-submenu">
                                    <a href="#"> <i class="fe-mail"></i>Email
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="email-inbox.html">Inbox</a></li>
                                        <li><a href="email-read.html">Read Email</a></li>
                                        <li><a href="email-compose.html">Compose Email</a></li>
                                    </ul>
                                </li>
    
                                <li class="has-submenu">
                                    <a href="#"> <i class="fe-book-open"></i>Pages
                                    </a>

                                    <ul class="submenu megamenu">
                                        <li>
                                            <ul>
                                                <li><a href="pages-starter.html">Starter Page</a></li>
                                                <li><a href="pages-login.html">Login</a></li>
                                                <li><a href="pages-register.html">Register</a></li>
                                                <li><a href="pages-logout.html">Logout</a></li>
                                                <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                                <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                                                <li><a href="pages-404.html">Error 404</a></li>
                                                <li><a href="pages-404-alt.html">Error 404-alt</a></li>
                                                <li><a href="pages-500.html">Error 500</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
    
                                <li class="has-submenu">
                                    <a href="#"> <i class="fe-plus-square"></i> Extra Pages 
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="extras-timeline.html">Timeline</a></li>
                                        <li><a href="extras-invoice.html">Invoice</a></li>
                                        <li><a href="extras-faq.html">FAQ</a></li>
                                        <li><a href="extras-pricing.html">Pricing</a></li>
                                        <li><a href="extras-email-template.html">Email Templates</a></li>
                                    </ul>
                                </li>
    
                            </ul>
                            <!-- End navigation menu -->
    
                            <div class="clearfix"></div>
                        </div>
                        <!-- end #navigation -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- end navbar-custom -->

        </header>
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">ABC Foundation</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Welcome !</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card-box tilebox-one">
                                <i class="fe-box float-right"></i>
                                <h5 class="text-muted text-uppercase mb-3 mt-0">Orders</h5>
                                <h3 class="mb-3" data-plugin="counterup">1,587</h3>
                                <span class="badge badge-primary"> +11% </span> <span class="text-muted ml-2 vertical-middle">From previous period</span>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="card-box tilebox-one">
                                <i class="fe-layers float-right"></i>
                                <h5 class="text-muted text-uppercase mb-3 mt-0">Revenue</h5>
                                <h3 class="mb-3">$<span data-plugin="counterup">46,782</span></h3>
                                <span class="badge badge-primary"> -29% </span> <span class="text-muted ml-2 vertical-middle">From previous period</span>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="card-box tilebox-one">
                                <i class="fe-tag float-right"></i>
                                <h5 class="text-muted text-uppercase mb-3 mt-0">Average Price</h5>
                                <h3 class="mb-3">$<span data-plugin="counterup">15.9</span></h3>
                                <span class="badge badge-primary"> 0% </span> <span class="text-muted ml-2 vertical-middle">From previous period</span>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="card-box tilebox-one">
                                <i class="fe-briefcase float-right"></i>
                                <h5 class="text-muted text-uppercase mb-3 mt-0">Product Sold</h5>
                                <h3 class="mb-3" data-plugin="counterup">1,890</h3>
                                <span class="badge badge-primary"> +89% </span> <span class="text-muted ml-2 vertical-middle">Last year</span>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xl-7">
                            <div class="card-box">
                                <h4 class="header-title">Transactions History</h4>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="text-center mt-3">
                                            <h6 class="font-normal text-muted font-14">Conversion Rate</h6>
                                            <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">1.78%</span> <small></small></h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center mt-3">
                                            <h6 class="font-normal text-muted font-14">Average Order Value</h6>
                                            <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">25.87</span> <small>USD</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center mt-3">
                                            <h6 class="font-normal text-muted font-14">Total Wallet Balance</h6>
                                            <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">87,4517</span> <small>USD</small></h6>
                                        </div>
                                    </div>
                                </div>

                                <canvas id="transactions-chart" height="350" class="mt-4"></canvas>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="card-box">
                                <h4 class="header-title">Sales History</h4>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="text-center mt-3">
                                            <h6 class="font-normal text-muted font-14">Conversion Rate</h6>
                                            <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">3.94%</span> <small></small></h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center mt-3">
                                            <h6 class="font-normal text-muted font-14">Average Sales</h6>
                                            <h6 class="font-18"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> <span class="text-dark">16.25</span> <small>USD</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center mt-3">
                                            <h6 class="font-normal text-muted font-14">Total Sales</h6>
                                            <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">124,858.67</span> <small>USD</small></h6>
                                        </div>
                                    </div>
                                </div>

                                <canvas id="sales-history" height="350" class="mt-4"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card-box">
                                <h4 class="header-title mb-3">Messages</h4>

                                <div class="inbox-widget slimscroll" style="max-height: 370px;">
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                                            <p class="inbox-item-author">Chadengle</p>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <p class="inbox-item-date">13:40 PM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                                            <p class="inbox-item-author">Tomaslau</p>
                                            <p class="inbox-item-text">I've finished it! See you so...</p>
                                            <p class="inbox-item-date">13:34 PM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                                            <p class="inbox-item-author">Stillnotdavid</p>
                                            <p class="inbox-item-text">This theme is awesome!</p>
                                            <p class="inbox-item-date">13:17 PM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                                            <p class="inbox-item-author">Kurafire</p>
                                            <p class="inbox-item-text">Nice to meet you</p>
                                            <p class="inbox-item-date">12:20 PM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                                            <p class="inbox-item-author">Shahedk</p>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <p class="inbox-item-date">10:15 AM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                                            <p class="inbox-item-author">Adhamdannaway</p>
                                            <p class="inbox-item-text">This theme is awesome!</p>
                                            <p class="inbox-item-date">9:56 AM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-8.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                                            <p class="inbox-item-author">Arashasghari</p>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <p class="inbox-item-date">10:15 AM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-9.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                                            <p class="inbox-item-author">Joshaustin</p>
                                            <p class="inbox-item-text">I've finished it! See you so...</p>
                                            <p class="inbox-item-date">9:56 AM</p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-box">
                                <h4 class="header-title mb-3">Latest Comments</h4>

                                <div class="comment-list slimscroll" style="max-height: 370px;">
                                    <a href="#">
                                        <div class="comment-box-item">
                                            <div class="badge badge-pill badge-success">Ubold - Admin</div>
                                            <p class="commnet-item-date">1 month ago</p>
                                            <h6 class="commnet-item-msg">Do you have any plans to add a vertical menu?</h6>
                                            <p class="commnet-item-user">Ubold User</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="comment-box-item">
                                            <div class="badge badge-pill badge-warning">Adminox - Admin</div>
                                            <p class="commnet-item-date">1 month ago</p>
                                            <h6 class="commnet-item-msg">Hello, what is your plan to upgrade Bootstrap 4 versions? Beta or wait for stable?</h6>
                                            <p class="commnet-item-user">Ubold User</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="comment-box-item">
                                            <div class="badge badge-pill badge-primary">Staro - Landing</div>
                                            <p class="commnet-item-date">1 month ago</p>
                                            <h6 class="commnet-item-msg">Hi coderthemes – do you have PSD for this admin UI? I could really use it.</h6>
                                            <p class="commnet-item-user">Ubold User</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="comment-box-item">
                                            <div class="badge badge-pill badge-dark">Ubold - Admin</div>
                                            <p class="commnet-item-date">1 month ago</p>
                                            <h6 class="commnet-item-msg">Do you have any plans to add a vertical menu?</h6>
                                            <p class="commnet-item-user">Ubold User</p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card-box">
                                <h4 class="header-title mb-3">Last Transactions</h4>

                                <ul class="list-unstyled transaction-list slimscroll mb-0" style="max-height: 370px;">
                                    <li>
                                        <i class="dripicons-arrow-down text-success"></i>
                                        <span class="tran-text">Advertising</span>
                                        <span class="float-right text-success tran-price">+$230</span>
                                        <span class="float-right text-muted">07/09/2017</span>
                                        <span class="clearfix"></span>
                                    </li>

                                    <li>
                                        <i class="dripicons-arrow-up text-danger"></i>
                                        <span class="tran-text">Support licence</span>
                                        <span class="float-right text-danger tran-price">-$965</span>
                                        <span class="float-right text-muted">07/09/2017</span>
                                        <span class="clearfix"></span>
                                    </li>

                                    <li>
                                        <i class="dripicons-arrow-down text-success"></i>
                                        <span class="tran-text">Extended licence</span>
                                        <span class="float-right text-success tran-price">+$830</span>
                                        <span class="float-right text-muted">07/09/2017</span>
                                        <span class="clearfix"></span>
                                    </li>

                                    <li>
                                        <i class="dripicons-arrow-down text-success"></i>
                                        <span class="tran-text">Advertising</span>
                                        <span class="float-right text-success tran-price">+$230</span>
                                        <span class="float-right text-muted">05/09/2017</span>
                                        <span class="clearfix"></span>
                                    </li>

                                    <li>
                                        <i class="dripicons-arrow-up text-danger"></i>
                                        <span class="tran-text">New plugins added</span>
                                        <span class="float-right text-danger tran-price">-$452</span>
                                        <span class="float-right text-muted">05/09/2017</span>
                                        <span class="clearfix"></span>
                                    </li>

                                    <li>
                                        <i class="dripicons-arrow-down text-success"></i>
                                        <span class="tran-text">Google Inc.</span>
                                        <span class="float-right text-success tran-price">+$230</span>
                                        <span class="float-right text-muted">04/09/2017</span>
                                        <span class="clearfix"></span>
                                    </li>

                                    <li>
                                        <i class="dripicons-arrow-up text-danger"></i>
                                        <span class="tran-text">Facebook Ad</span>
                                        <span class="float-right text-danger tran-price">-$364</span>
                                        <span class="float-right text-muted">03/09/2017</span>
                                        <span class="clearfix"></span>
                                    </li>

                                    <li>
                                        <i class="dripicons-arrow-down text-success"></i>
                                        <span class="tran-text">New sale</span>
                                        <span class="float-right text-success tran-price">+$230</span>
                                        <span class="float-right text-muted">03/09/2017</span>
                                        <span class="clearfix"></span>
                                    </li>

                                    <li>
                                        <i class="dripicons-arrow-down text-success"></i>
                                        <span class="tran-text">Advertising</span>
                                        <span class="float-right text-success tran-price">+$230</span>
                                        <span class="float-right text-muted">29/08/2017</span>
                                        <span class="clearfix"></span>
                                    </li>

                                    <li>
                                        <i class="dripicons-arrow-up text-danger"></i>
                                        <span class="tran-text">Support licence</span>
                                        <span class="float-right text-danger tran-price">-$854</span>
                                        <span class="float-right text-muted">27/08/2017</span>
                                        <span class="clearfix"></span>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>



                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        
        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                        2017 - 2019 &copy; Abstack theme by <a href="#">Coderthemes</a> 
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <hr class="mt-0">
                <h5 class="pl-3">Basic Settings</h5>
                <hr class="mb-0" />


                <div class="p-3">
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                        <label class="custom-control-label" for="customCheck1">Notifications</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                        <label class="custom-control-label" for="customCheck2">API Access</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                        <label class="custom-control-label" for="customCheck3">Auto Updates</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck4" checked>
                        <label class="custom-control-label" for="customCheck4">Online Status</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                        <label class="custom-control-label" for="customCheck5">Auto Payout</label>
                    </div>
                </div>

                <!-- Messages -->
                <hr class="mt-0" />
                <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">24</span></h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);">Chadengle</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                            <p class="inbox-item-date">13:40 PM</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                            <p class="inbox-item-date">13:34 PM</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                            <p class="inbox-item-date">13:17 PM</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                            <p class="inbox-item-date">12:20 PM</p>

                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                            <p class="inbox-item-date">10:15 AM</p>

                        </div>
                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Chart JS -->
        <script src="assets/libs/chart-js/Chart.bundle.min.js"></script>

        <!-- Init js -->
        <script src="assets/js/pages/dashboard.init.js"></script>
  

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/abstack/layouts/gradient-horizontal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Apr 2024 04:01:09 GMT -->
</html>