<?php
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $name=$_POST['name'];
    //alert-warning,-danger for the prompt being in red color
    echo "HI ! Your Email is ".$email." And Name is ".$name .".";
  //Submit these to Database
// Connection
require "DBconnect.php";
$table = "user";
$conn = mysqli_connect($DBserver, $DBusername, $DBpassword);

if (!$conn) {
    die("Sorry, we failed to connect: " . mysqli_connect_error() . "<br>");
} else {
    echo "Connection established successfully<br>";

    // Check if the database exists
    $check_database_query = "CREATE DATABASE IF NOT EXISTS $database";
    if (mysqli_query($conn, $check_database_query)) {
        echo "Database exists or was created successfully.<br>";
        // Reconnect to the database
        $conn = mysqli_connect($DBserver, $DBusername, $DBpassword, $database);
    } else {
        echo "Error creating database: " . mysqli_error($conn) . "<br>";
    }

    //another one
    $createTable="CREATE TABLE IF NOT EXISTS $database.$table (`UId` INT(11) NOT NULL AUTO_INCREMENT, `name` VARCHAR(20) NULL DEFAULT NULL, `email` VARCHAR(50) NOT NULL, `password` VARCHAR(20) NOT NULL,PRIMARY KEY (`UId`), UNIQUE KEY (`email`))";

    if (mysqli_query($conn, $createTable)) {
        echo "Table,$table was created successfully.<br>";
    } else {
        echo "Error creating Table: " . mysqli_error($conn) . "<br>";
    }


    $insertTable = "INSERT INTO `$table` (`name`, `email`,`password`) VALUES ('$name', '$email','$pass')";
//if (mysqli_multi_query($conn, $alterTable)) {}
    if (mysqli_query($conn, $insertTable)) {
        echo "Table,$table was updated successfully.<br>";
        header("Location: index.php");
              exit(); 
    } else {
        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn) . "<br>";
    }
}
mysqli_close($conn); // Close the database connection

// mysqli_close($conn); // Close the database connection
  }
?>
