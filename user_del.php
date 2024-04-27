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

// Check if a user ID is provided in the URL
if (isset($_GET['snc_id'])) {
    $user_id = $_GET['snc_id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if confirmation is received
        if (isset($_POST['confirm'])) {
            // Delete user from the database
            $sql = "DELETE FROM users WHERE snc_id = $user_id";
            if (mysqli_query($con, $sql)) {
                echo "User deleted successfully.";
                // Redirect to signin.html after successful deletion
                header("Location: signin.html");
                exit; // Ensure no further code is executed after redirection
            } else {
                echo "Error deleting user: " . mysqli_error($con);
            }
        } else {
            echo "Deletion cancelled by user.";
            // Redirect to index.php after cancellation
            header("Location: index.php");
            exit; // Ensure no further code is executed after redirection
        }
    } else {
        // Fetch user details from the database
        $sql = "SELECT * FROM users WHERE snc_id = $user_id";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            // Display a confirmation message and form to delete user account
            ?>
            <form method="post" action="">
                <p>Are you sure do you want to delete your account?</p>
                <input type="submit" name="confirm" value="Confirm">
                <input type="submit" name="cancel" value="Cancel">
            </form>
            <?php
        } else {
            echo "User not found.";
        }
    }
} else {
    echo "User ID not provided.";
}

// Close connection
mysqli_close($con);
?>
