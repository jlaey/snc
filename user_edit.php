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
        $name = $_POST['name'];
        $email = $_POST['email'];
    
        // Update user details in the database
        $sql = "UPDATE users SET name='$name', email='$email' WHERE snc_id=$user_id";
    
        if (mysqli_query($con, $sql)) {
            echo '<script>';
            echo 'if (confirm("User details updated successfully. Do you want to proceed to signin page?")) {';
            echo 'window.location.href = "signin.html";';
            echo '} else {';
            echo 'window.location.href = "index.php";'; // Redirect to dashboard
            echo '}';
            echo '</script>';
        } else {
            echo "Error updating user details: " . mysqli_error($con);
        }
    }
    

    // Fetch user details from the database
    $sql = "SELECT * FROM users WHERE snc_id = $user_id";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Display an HTML form to edit user details
        ?>
        <form method="post" action="">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>"><br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>"><br><br>

            <input type="submit" value="Update">
            <a href="userlists.php"><button type="button">Cancel</button>s</a> <!-- Add cancel button -->
        </form>
        <?php
    } else {
        echo "User not found.";
    }
} else {
    echo "User ID not provided.";
}

// Close connection
mysqli_close($con);
?>
