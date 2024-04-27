<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $product_name = $_POST['product_name'];
        $sku = $_POST['sku'];
        $category = $_POST['category'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "snc";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO products (p_name, p_sku, p_category, p_quantity, p_price) VALUES ('$product_name', '$sku','$category', '$quantity', '$price')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
        header("Location: productlist.php");
        exit();
    }
  
    // close connection
    mysqli_close($con);

?>