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
                <div class="dropdown-menu dropdown-megamenu" style="max-height: 400px; overflow-y: auto; ">
                    <div class="row">
                        <div class="col-sm-8">

                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="font-size-16">Masters</h5>
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
                <div class="dropdown-menu dropdown-megamenu" style="max-height: 400px; overflow-y: auto; ">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="font-size-16">Activity</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Due Deposit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Bill Cancellation</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Return Medicines</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">PatientWise Medicine Return</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Medicine Return Without Bill</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Bill Modify</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Multi Due Deposit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Payment Mode Change</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Item Correction Mrp. and Exp. Date</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Package Medicine Limit Increase</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Pharmacy Clearance</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Receive Medicines Against Indent</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Medicine Return By Nursing Staff</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Counter Close</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Counter Cash Received By User</a>
                                        </li>

                                        <li>
                                            <a href="javascript:void(0);">Counter Cash Received By Accountant</a>
                                        </li>
                                        
                                        <li>
                                            <a href="javascript:void(0);">Stock Verification</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Pharmacy Multiple Due Deposit (Excel)</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Prescription Order List</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Pharmacy Bill Settlement</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Payment Mode Change (Refund)</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Supplier Payment</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Purchase Return Cancel</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Expiry Item Scrap</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Expiry Item Return To Central Stock</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Due Deposit Cancel</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Supplier Wise Bill Attachment</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Purchase Requisition Cancellation</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Po Cancellation</a>
                                        </li>
                                        
                                       
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Receive Return Medicine</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Receive Medicines Without Indent</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Sale Return Cancellation</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Pharmacy Credit Receipt</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">PMS Medicine List</a>
                                        </li>
                                    </ul>
                                    <hr>
                                    <h5 class="font-size-16">Advance Related</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Pharmacy Interim Advance</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Refund Against Interim Advance(Pharmacy)</a>
                                        </li>
                                    </ul>
                                    <hr>
                                    <h5 class="font-size-16">Challan</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Challan Settlement By Bill</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Challan Correction</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Challan Cancel</a>
                                        </li>
                                    </ul>
                                    <hr>
                                    <h5 class="font-size-16">Medicine Return</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Medicine Return Request</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Medicine Return Request Approval/Decline</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Medicine Return Request List/a>
                                        </li>
                                    </ul>
                                    <h5 class="font-size-16">Department(Sub Store)</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Return Goods To Main Store</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Consumption</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Create Indent</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Consumption (Patient Wise)</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Return Goods To Substore</a>
                                        </li>
                                    </ul>
                                    <hr>
                                    <h5 class="font-size-16">Stock Management</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Opening Balance Entry</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Scrap Reconcilization</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Opening Balance Editing</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Supplier Ledger Mgt</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Supplier Ledger Mgt Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Supplier Ledger Mgt Cancellation</a>
                                        </li>
                                    </ul>
                                    <hr>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="font-size-16">Medicine Issue</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Issue to Dept (Direct)</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Issue To Dept (Against Indent)</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Indent Approval</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Create Indent From Substore</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Indent Approval From Substore</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Issue To Dept From Substore(Against Indent)</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Issue Department To Department</a>
                                        </li>
                                    </ul>
                                    <hr>
                                    <h5 class="font-size-16">GRN</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">GRN - Entry</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">GRN-Posting</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">GRN Correction</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">GRN Entry Editing</a>
                                        </li>
                                    </ul>
                                    <hr>
                                    <h5 class="font-size-16">Purchases</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">PO Creation</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Purchase Return</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">PO Correction (Before Approval)</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Multiple Bill Purchase Return(With Expiry)</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">PO Approval/Decline</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Purchase Requisition Approval / Decline</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Purchase Requisition</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Rate Contract</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Purchase Return Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Purchase Order Mail Send</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Auto PO Creation Against Multiple Purchase Request</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">PO Correction (After Approval)</a>
                                        </li>
                                    </ul>
                                    <hr>
                                    <h5 class="font-size-16">Sale</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Sale From Main Pharmacy Store</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Sale From Department</a>
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
                                                <a href="javascript:void(0);">PMS Order List (Main Store)</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">PMS Order List (From Department)</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">PMS Order Approval (For Pharmacy)</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">PMS Outside Order</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">OPD Prescription View</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Sale Edit from Main Pharmacy Store</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Sale Edit from Department</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Provisional Sale</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Provisional Sale Status</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">OPD Prescription Medicine Order List</a>
                                            </li>
                                        </ul>
                                    <hr>
                                    <h5 class="font-size-16">Duplicate Printing</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">GRN</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Purchase Order (PO)</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Issue To Dept (Direct)</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Issue To Dept (Indent Wise)</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Return To Central Store</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Scrap</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Purchase Return</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Multiple Bill Purchase Return</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Multiple Bill Purchase Return</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Multiple Bill Purchase Return</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Medicine Barcode Print</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Patient Wise Consumption Of Item</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Patient Wise Consumption Of Item</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Patient Wise Consumption Of Item</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Nursing Medicine Return</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Indent Approval</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Grn Entry</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Indent (Before Approval)</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Department Wise Consumption</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-5">
                                    <div>
                                        <img src="assets/images/megamenu-img.jpg" alt="megamenu-img"
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
                <div class="dropdown-menu dropdown-megamenu" style="max-height: 400px; overflow-y: auto; ">
                    <div class="row">
                        <div class="col-sm-8">

                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="font-size-16">UI Components</h5>
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
                                    <h5 class="font-size-16">Applications</h5>
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
                                    <h5 class="font-size-16">Extra Pages</h5>
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
                                    <h5 class="font-size-16">UI Components</h5>
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

