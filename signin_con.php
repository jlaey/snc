<?php
session_start();
// Check login credentials
if (isset($_POST['login_submit'])) {
    $login_email = $_POST['login_email'];
    $login_password = $_POST['login_password'];

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

    // Using SQL to retrieve hashed password from the database based on the provided email
    $sql = "SELECT * FROM users WHERE email='$login_email'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $storedHashedPassword = $row['password'];

        // Use password_verify to check if the entered password matches the stored hashed password
        if (password_verify($login_password, $storedHashedPassword)) {
            // Password is correct; proceed with login
            echo "Login successful!";
            header("Location: index.php");
            exit();
        } else {
            // Password is incorrect
            echo "Invalid login credentials";
        }
    } else {
        // User with the provided email not found
        echo "Invalid login credentials";
    }

    // Close connection
    mysqli_close($con);
}
?>



