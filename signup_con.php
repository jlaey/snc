<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_DEFAULT); // Hash the password
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
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password_hash')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
        header("Location: index.php");
        exit();
    }
  
    // close connection
    mysqli_close($con);

?>