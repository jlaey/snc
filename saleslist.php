<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>Slice n' Cup Admin</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/SLICE n TEA.jpg">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

<div class="header">

<div class="header-left active">
<a href="index.php" class="logo">
<img src="assets/img/sncn.jpg" alt="">
</a>
<a href="index.php" class="logo-small">
<img src="assets/img/snc.jpg" alt="">
</a>
<a id="toggle_btn" href="javascript:void(0);">
</a>
</div>

<a id="mobile_btn" class="mobile_btn" href="#sidebar">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>

<ul class="nav user-menu">

<li class="nav-item dropdown has-arrow main-drop">
<a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
<span class="user-img"><img src="assets/img/profiles/avator1.jpg" alt="">
<span class="status online"></span></span>
</a>
<div class="dropdown-menu menu-drop-user">
<div class="profilename">
<div class="profileset">
<span class="user-img"><img src="assets/img/profiles/avator1.jpg" alt="">
<span class="status online"></span></span>
<div class="profilesets">
<h6>Slice n' Cup</h6>
<h5>Admin</h5>
</div>
</div>
<hr class="m-0">
<a class="dropdown-item" href="userlists.html"> <i class="me-2" data-feather="user"></i> My Profile</a>
<hr class="m-0">
<a class="dropdown-item logout pb-0" href="signin.html"><img src="assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
</div>
</div>
</li>
</ul>


<div class="dropdown mobile-user-menu">
<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="userlists.php">My Profile</a>
<a class="dropdown-item" href="signin.html">Logout</a>
</div>
</div>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li>
<a href="index.php"><img src="assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Product</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="productlist.php">Product List</a></li>
<li><a href="addproduct.html">Add Product</a></li>
<li><a href="categorylist.php">Ingredient List</a></li>
<li><a href="addcategory.html">Add Ingredients</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/sales1.svg" alt="img"><span> Sales</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="saleslist.php" class="active">Sales List</a></li>
<li><a href="add-sales.php">New Sales</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/expense1.svg" alt="img"><span> Expense</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="expenselist.php">Expense List</a></li>
<li><a href="createexpense.php">Add Expense</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/users1.svg" alt="img"><span> Users</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="userlists.php">Users List</a></li>
</ul>
</li>
</div>
</div>
</div>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Sales List</h4>
<h6>Manage your sales</h6>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="table-top">
<div class="search-set">
<div class="search-path">
</div>
<div class="search-input">
<a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img"></a>
</div>
</div>
<div class="wordset">
<ul>
</ul>
</div>
</div>

<div class="card" id="filter_inputs">
<div class="card-body pb-0">
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
</div>
</div>
</div>
</div>
</div>

<div class="table-responsive">
    <table class="table datanew">
        <thead>
            <tr>
                <th>
                    <label class="checkboxs">
                        <input type="checkbox" id="select-all">
                        <span class="checkmarks"></span>
                    </label>
                </th>
                <th>Date</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Amount</th>
                <th>Total</th>  
            </tr>
        </thead>
        <tbody>
            <?php
            // Database details    
            $host = "localhost";      
            $username = "root";      
            $password = "";      
            $dbname = "snc";

            // Creating a connection
            $con = mysqli_connect($host, $username, $password, $dbname);
       
            // Ensure that the connection is made
            if (!$con) {
            
                die("Connection failed!" . mysqli_connect_error());
            }
        
            // Using SQL to fetch sales data
            $sql = "SELECT * FROM sales";
            $result = mysqli_query($con, $sql);
        
            // Loop through the sales data and display it
       
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td><label class='checkboxs'><input type='checkbox'><span class='checkmarks'></span></label></td>";
                echo "<td>" . $row['s_date'] . "</td>";
                echo "<td>" . $row['s_product'] . "</td>";
                echo "<td>" . $row['s_quantity'] . "</td>";
                echo "<td>" . $row['s_price'] . "</td>";   
                echo "<td>" . $row['s_total'] . "</td>";
                echo "</tr>";
            
            }
       
            mysqli_close($con);
            ?>

        </tbody>
    </table>
</div>  




<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>