<?php
session_start();
$book_id=$_GET['book_id'];
require "DBconnect.php";
$table = "books";

echo $book_id;
echo $table;
var_dump($_SESSION['user_id']) ;
 var_dump($book_id);

if (isset($book_id)) {
$conn = mysqli_connect($DBserver, $DBusername, $DBpassword,$database);


if (!$conn) {
    die("Sorry, we failed to connect: " . mysqli_connect_error() . "<br>");
} else {
    $sql = "UPDATE books SET views = views + 1 WHERE book_id = $book_id";
    $result =mysqli_query($conn,$sql);
    
    if($result)
    {
        echo "sucessfull";
    }
}



// Send a response back to the client if needed
echo "Views incremented successfully.";
}
else {
    echo "Error: book_id is not defined.";
}
?>