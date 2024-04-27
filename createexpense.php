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

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

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
<li>
<a href="index.php"><img src="assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Product</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="productlist.php">Product List</a></li>
<li><a href="addproduct.html">Add Product</a></li>
<li><a href="categorylist.php">Ingredient List</a></li>
<li><a href="addcategory.html">Add Ingridients</a></li>
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
<li><a href="createexpense.php" class="active">Add Expense</a></li>
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
                <h4>Expense Add</h4>
                <h6>Add/Update Expenses</h6>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="createexpense_con.php" method="POST">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Expense Date </label>
                                <div class="input-groupicon">
                                    <input type="text" name="expense_date" placeholder="Choose Date" class="datetimepicker">
                                    <div class="addonset">
                                        <img src="assets/img/icons/calendars.svg" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        // Assuming you have a database connection
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "snc";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        
                        // Fetch all products from the database
                        $sql = "SELECT * FROM ingredients";
                        $result = $conn->query($sql);
                        // Close the database connection
                        $conn->close();
                        ?>
                        
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="product">Category</label>
                                <select name="expense_category" id="expense_category" class="form-control">
                                    
                                    <?php
                                    // Check if there are products in the database
                                    if ($result->num_rows > 0) {
                                        // Output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row["i_name"] . '">' . $row["i_name"] . '</option>';
                                        }
                                    } else {
                                        echo '<option value="">No products available</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Quantity</label>
                                <div class="input-groupicon">
                                    <input type="number" name="quantity">
                                    <div class="addonset"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Amount</label>
                                <div class="input-groupicon">
                                    <input type="number" name="amount">
                                    <div class="addonset"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Total</label>
                                <div class="input-groupicon">
                                    <input type="number" name="total">
                                    <div class="addonset"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="form-group">
                                <label>Description</label>
                                <select class="select" name="description">
                                    <option>Description</option>
                                            <option>For Milk Tea</option>
                                            <option>For Coffee</option>
                                            <option>For Fruit Tea</option>
                                            <option>For Snacks</option>
                                            <option>For Coffee and Tea</option>
                                </select>
                            </div>
                        </div>
                    <div class="col-lg-12">
                        <button type="submit" name="submit" class="btn btn-submit me-2">Submit</button>
                        <a href="#" class="btn btn-cancel">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
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

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>