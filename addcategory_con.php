<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $ingredient_name = $_POST['ingredient_name'];
        $amount = $_POST['amount'];
        $description = $_POST['description'];
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
    $sql = "INSERT INTO ingredients (i_name, i_amount, i_description) VALUES ('$ingredient_name', '$amount', '$description')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
        header("Location: categorylist.php");
        exit();
    }
  
    // close connection
    mysqli_close($con);
?>
