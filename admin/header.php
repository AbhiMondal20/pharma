<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Upcube - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- jquery.vectormap css -->
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
        type="text/css" />

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
<style>
    .footers {
    bottom: 0;
    padding: 20px calc(#{$grid-gutter-width} / 2);
    position: absolute;
    right: 0;
    color: $footer-color;
    left: $sidebar-width;
    height: $footer-height;
    box-shadow: $box-shadow;
    background-color: $footer-bg;
}
</style>
</head>
<body class="sidebar-enable vertical-collpsed">

<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="logo-sm" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="logo-dark" height="20">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="logo-sm-light" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="logo-light" height="20">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="ri-search-line"></span>
                </div>
            </form>

            <!-- Masters Menu -->
            <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                    aria-haspopup="false" aria-expanded="false">
                    Masters
                    <i class="mdi mdi-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">
                        <div class="col-sm-8">

                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="font-size-14">Masters</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Medicine Group / SubGroup</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Medicine Master</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Medicine Details</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Supplier</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Unit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Tax</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Department / Sub Store</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Salt Master</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Department Wise ROL</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Reason Master</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Template (dept Wise Indenting)</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">User Department Linking</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Package Medicine Linking</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Order Profile (PMS)</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Pharmacy Account Category</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Schedule Master</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Medicine Master (Editable)</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Discount Master</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Indent Approval User Linking</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Company Department Linking</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Edit Item Unit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Link Group To Service</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Medicine Category Level Hike</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Change Medicine Tax Type</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Medicine Salt Linking</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Dept Wise Indent Medicine Linking</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Section Master</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Patient Category wise Medicine Linking</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Item Presentation</a>
                                            
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Profile Ward Linking</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Department Ward Linking</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Counter Collection</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Medicine Department Level Hike</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Medicine Rack Linking</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Rack</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Shelf</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Medicine Rack Linking</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Medicine Rack Linking</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Order Type</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Item Group Subgroup Change</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Purchase Requisition Approver</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Purchase Order Approver</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Medicine Category Level Hike (Group Wise)</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Medicine Fix Sale Price Setting</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">B2B Medicine Party Level Hike</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Grn Supplier Change</a>
                                        </li>
                                    </ul>
                                    <h5 class="font-size-16">Sale Discount Related</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Medicine Category</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Link Medicine With Medicine Category</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Medicine Category Level Discount</a>
                                        </li>
                                    </ul>
                                    <h5 class="font-size-16">Sale Related</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Medicine Category</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Drug Classification</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Salt Head Master</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Salt Head Wise Salt Linking</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Salt Interactions</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-5">
                                    <div>
                                        <img src="assets/images/megamenu-img.jpg" height="120px" alt="megamenu-img"
                                            class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Activity -->
            <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                    aria-haspopup="false" aria-expanded="false">
                    Activity
                    <i class="mdi mdi-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">
                        <div class="col-sm-8">

                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="font-size-14">UI Components</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Lightbox</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Range Slider</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Sweet Alert</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Rating</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Forms</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Tables</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Charts</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="font-size-14">Applications</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Ecommerce</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Calendar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Email</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Projects</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Tasks</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Contacts</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="font-size-14">Extra Pages</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Light Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Compact Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Horizontal layout</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Maintenance</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Coming Soon</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">FAQs</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="font-size-14">UI Components</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Lightbox</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Range Slider</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Sweet Alert</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Rating</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Forms</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Tables</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Charts</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-5">
                                    <div>
                                        <img src="assets/images/megamenu-img.png" alt="megamenu-img"
                                            class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Reports -->
            <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                    aria-haspopup="false" aria-expanded="false">
                    Reports
                    <i class="mdi mdi-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">
                        <div class="col-sm-8">

                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="font-size-14">UI Components</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Lightbox</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Range Slider</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Sweet Alert</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Rating</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Forms</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Tables</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Charts</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="font-size-14">Applications</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Ecommerce</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Calendar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Email</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Projects</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Tasks</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Contacts</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="font-size-14">Extra Pages</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Light Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Compact Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Horizontal layout</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Maintenance</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Coming Soon</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">FAQs</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="font-size-14">UI Components</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Lightbox</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Range Slider</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Sweet Alert</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Rating</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Forms</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Tables</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Charts</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-5">
                                    <div>
                                        <img src="assets/images/megamenu-img.png" alt="megamenu-img"
                                            class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ri-search-line"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="mb-3 m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="ri-search-line"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">Admin</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#"><i
                            class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="ri-settings-2-line"></i>
                </button>
            </div>

        </div>
    </div>
</header>

