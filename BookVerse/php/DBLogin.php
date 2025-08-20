<?php
session_start();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve user credentials from the form
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // Include database connection
    require "DBconnect.php";
    $table = "user";

    // Connect to the database
    $conn = mysqli_connect($DBserver, $DBusername, $DBpassword, $database);

    // Check if the connection was successful
    if (!$conn) {
        die("Sorry, we failed to connect: " . mysqli_connect_error() . "<br>");
    } else {
        echo "Connection established successfully<br>";

        // Prepare and execute the query to fetch user data based on email and password
        $query = "SELECT * FROM $table WHERE email='$email' AND password='$pass'";
        $result = mysqli_query($conn, $query);

        // Check if the login was successful
        if (mysqli_num_rows($result) > 0) {
            // Login successful
            $datarow = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $datarow['UId'];

            // Redirect the user back to the previous page or index.php if no previous page stored
            $redirect_url = isset($_COOKIE['redirectUrl']) ? $_COOKIE['redirectUrl'] : "index.php";
            echo '<script>alert("Welcome!! ' . $datarow['name'] . ' Login successful!");';
            echo 'window.location.href = "' . $redirect_url . '";</script>';
            exit();
        } else {
            // Invalid credentials, redirect to login page with error
            header("Location: login.php?error=1");
            exit();
        }
    }
} else {
    // Redirect to login page if accessed directly
    header("Location: login.php");
    exit();
}
?>
