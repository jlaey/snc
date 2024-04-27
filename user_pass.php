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
        // Retrieve form data
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        
        // Check if passwords match
        if ($password === $confirm_password) {
            // Hash the new password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            // Update user password in the database
            $sql = "UPDATE users SET password='$hashed_password' WHERE snc_id=$user_id";
        
            if (mysqli_query($con, $sql)) {
                echo '<script>';
                echo 'if (confirm("Password updated successfully. Do you want to proceed to the sign-in page?")) {';
                echo 'window.location.href = "signin.html";'; // Redirect to sign-in page
                echo '}';
                echo '</script>';
            } else {
                echo "Error updating password: " . mysqli_error($con);
            }
        } else {
            echo "Passwords do not match.";
        }
    }
    

    // Display an HTML form to change user password
    ?>
    <form method="post" action="">
        <label for="password">New Password:</label>
        <input type="password" id="password" name="password">
        <input type="checkbox" id="showPassword" onclick="togglePasswordVisibility('password')"> Show Password<br><br>
        
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password">
        <input type="checkbox" id="showConfirmPassword" onclick="togglePasswordVisibility('confirm_password')"> Show Password<br><br>

        <input type="submit" value="Change Password">
        <!-- Add a cancel button -->
        <a href="userlists.php"><button type="button">Cancel</button></a>
    </form>
    <?php
} else {
    echo "User ID not provided.";
}

// Close connection
mysqli_close($con);
?>

<script>
// JavaScript function to toggle password visibility
function togglePasswordVisibility(fieldId) {
    var passwordField = document.getElementById(fieldId);
    if (passwordField.type === "password") {
        passwordField.type = "text";
    } else {
        passwordField.type = "password";
    }
}
</script>
