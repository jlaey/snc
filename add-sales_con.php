<?php
// Set the timezone
date_default_timezone_set('Asia/Manila');

// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Retrieve form data
    $sku = $_POST['sku'];
    $product = $_POST['product'];
    $date = $_POST['date'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $amount = $_POST['amount'];
    $total = $_POST['total'];

    // Convert date to MySQL format (assuming the date is in 'MM/DD/YYYY' format)
    $formattedDate = date("Y-m-d", strtotime($date));

    // Database details for 'snc' database
    $snc_host = "localhost";
    $snc_username = "root";
    $snc_password = "";
    $snc_dbname = "snc";

    // Creating connection for 'snc' database
    $snc_con = mysqli_connect($snc_host, $snc_username, $snc_password, $snc_dbname);

    // Check connection
    if (!$snc_con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Using SQL to insert sale data into the 'sales' table in 'snc' database
    $sql_sales_snc = "INSERT INTO sales (s_sku, s_product, s_date, s_category, s_quantity, s_price, s_total) VALUES ('$sku', '$product', '$formattedDate', '$category', '$quantity', '$amount', '$total')";

    // Execute SQL query for 'snc' database
    if (mysqli_query($snc_con, $sql_sales_snc)) {
        // Update product quantity in 'snc' database
        $sql_update_quantity_snc = "UPDATE products SET p_quantity = p_quantity - '$quantity' WHERE p_sku = '$sku'";
        mysqli_query($snc_con, $sql_update_quantity_snc);

        echo "Sales added successfully";
        // Redirect to add-sales.php after successful submission
        header("Location: add-sales.php");
        exit();
    } else {
        echo "Error: " . $sql_sales_snc . "<br>" . mysqli_error($snc_con);
    }

    // Close connection
    mysqli_close($snc_con);
}
?>

