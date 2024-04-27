<?php
// Set the timezone
date_default_timezone_set('Asia/Manila');

// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Retrieve form data
    $expense_category = $_POST['expense_category'];
    $expense_date = $_POST['expense_date'];
    $quantity = $_POST['quantity'];
    $amount = $_POST['amount'];
    $total = $_POST['total'];
    $description = $_POST['description'];

    // Convert date to MySQL format ('Y-m-d')
    $formattedDate = date("Y-m-d", strtotime($expense_date));

    // Database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "snc"; // Replace with your actual database name

    // Creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Using SQL to insert expense data into the database
    $sql = "INSERT INTO expense (e_category, e_date, e_quantity, e_amount, e_total, e_description) VALUES ('$expense_category', '$formattedDate', '$quantity', '$amount', '$total', '$description')";

    // Execute SQL query
    if (mysqli_query($con, $sql)) {
        echo "Expense added successfully";
        header("Location: createexpense.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    // Close connection
    mysqli_close($con);
}
?>
