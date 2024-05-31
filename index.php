<?php
session_start();

// Check if the user is logged in by checking the session variable
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to sign-in page if not logged in
    header("Location: signin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>Slice n' Cup Admin</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/SLICE n TEA.jpg">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

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

<li class="nav-item">
<div class="top-nav-search">
<a href="javascript:void(0);" class="responsive-search">
<i class="fa fa-search"></i>
</a>
<form action="#">
<div class="searchinputs">
<input type="text" placeholder="Search Here ...">
<div class="search-addon">
<span><img src="assets/img/icons/closes.svg" alt="img"></span>
</div>
</div>
<a class="btn" id="searchdiv"><img src="assets/img/icons/search.svg" alt="img"></a>
</form>
</div>
</li>

<li class="nav-item dropdown has-arrow main-drop">
<a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
<span class="user-img"><img src="assets/img/profiles/snc.jpg" alt="">
<span class="status online"></span></span>
</a>
<div class="dropdown-menu menu-drop-user">
<div class="profilename">
<div class="profileset">
<span class="user-img"><img src="assets/img/profiles/sncnb.jpg" alt="">
<span class="status online"></span></span>
<div class="profilesets">
<h6>Slice n' Cup</h6>
<h5>Admin</h5>
</div>
</div>
<hr class="m-0">
<a class="dropdown-item" href="userlists.php"> <i class="me-2" data-feather="user"></i> My Profile</a>
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
<li class="active">
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
<li><a href="saleslist.php">Sales List</a></li>
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
</ul>
</div>
</div>
</div>


<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash1">
                    <div class="dash-widgetimg">
                        <span><img src="assets/img/icons/dash2.svg" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
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

                        // Using SQL to fetch total sales
                        $sql = "SELECT SUM(s_total) AS totalSales FROM sales";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($result);

                        // Display total sales
                        echo '<h5>₱<span class="counters" data-count="' . $row['totalSales'] . '">₱' . number_format($row['totalSales'], 2) . '</span></h5>';
                        echo '<h6>Total Sales</h6>';

                        // Close connection
                        mysqli_close($con);
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget">
                    <div class="dash-widgetimg">
                        <span><img src="assets/img/icons/dash1.svg" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
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

                        // Using SQL to fetch total sales
                        $sql = "SELECT SUM(e_total) AS totalExp FROM expense";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($result);

                        // Display total sales
                        echo '<h5>₱<span class="counters" data-count="' . $row['totalExp'] . '">₱' . number_format($row['totalExp'], 2) . '</span></h5>';
                        echo '<h6>Total Expenses</h6>';

                        // Close connection
                        mysqli_close($con);
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash3">
                    <div class="dash-widgetimg">
                        <span><img src="assets/img/icons/dash4.svg" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
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

                        // Using SQL to fetch the lowest sales
                        $sql = "SELECT MAX(s_total) AS highestSales FROM sales";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($result);

                        // Display the lowest sales
                        echo '<h5>₱<span class="counters" data-count="' . $row['highestSales'] . '">₱' . number_format($row['highestSales'], 2) . '</span></h5>';
                        echo '<h6>Highest Sales</h6>';
                        
                        // Close connection
                        mysqli_close($con);
                        ?>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash2">
                    <div class="dash-widgetimg">
                        <span><img src="assets/img/icons/dash3.svg" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
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

                        // Using SQL to fetch the lowest sales
                        $sql = "SELECT MIN(s_total) AS lowestSales FROM sales";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($result);

                        // Display the lowest sales
                        echo '<h5>₱<span class="counters" data-count="' . $row['lowestSales'] . '">₱' . number_format($row['lowestSales'], 2) . '</span></h5>';
                        echo '<h6>Lowest Sales</h6>';
                        
                        // Close connection
                        mysqli_close($con);
                        ?>
                    </div>
                </div>
            </div>
        </div>
            

<div class="row">
    <div class="col-lg-6 col-sm-12 col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">Recently Added Products</h4>
                <div class="dropdown">
                    <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li>
                            <a href="productlist.php" class="dropdown-item">Product List</a>
                        </li>
                        <li>
                            <a href="addproduct.html" class="dropdown-item">Product Add</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive dataview">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>Products</th>
                                <th>Category</th>
                                <th>Price</th>
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

                            // Using SQL to fetch user data
                            $sql = "SELECT * FROM products";
                            $result = mysqli_query($con, $sql);

                            // Loop through the user data and display it
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['p_name'] . "</td>";
                                echo "<td>" . $row['p_category'] . "</td>";
                                echo "<td>" . $row['p_price'] . "</td>";
                                echo "</tr>";
                            }

                            // Close connection
                            mysqli_close($con);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Recently Added Ingredients -->
    <div class="col-lg-6 col-sm-12 col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">Recently Added Ingredients</h4>
                <div class="dropdown">
                    <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li>
                            <a href="categorylist.php" class="dropdown-item">Ingredient List</a>
                        </li>
                        <li>
                            <a href="addcategory.html" class="dropdown-item">Add Ingredients</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive dataview">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>Ingredients</th>
                                <th>Amount</th>
                                <th>Description</th>
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

                            // Using SQL to fetch user data
                            $sql = "SELECT * FROM ingredients";
                            $result = mysqli_query($con, $sql);

                            // Loop through the user data and display it
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['i_name'] . "</td>";
                                echo "<td>" . $row['i_amount'] . "</td>";
                                echo "<td>" . $row['i_description'] . "</td>";
                                echo "</tr>";
                            }

                            // Close connection
                            mysqli_close($con);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>
