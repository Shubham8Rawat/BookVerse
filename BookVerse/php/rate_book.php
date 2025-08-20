<?php
// Start the session
session_start();

// Include database connection
require "DBconnect.php";

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page or handle unauthorized access
    header("Location: login.php");
    exit();
}

// Get book ID and rating from POST data
$bookId = $_POST['book_id'];
$rating = $_POST['rating'];

// Validate input data (optional but recommended)
// Check if book ID and rating are present
if (!isset($bookId) || !isset($rating)) {
    echo "Error: Book ID or rating is missing.";
    exit();
}

// Include database connection
require "DBconnect.php";

// Create connection
$conn = mysqli_connect($DBserver, $DBusername, $DBpassword, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the user has already voted for this book
$sql = "SELECT * FROM ratings WHERE book_id = ? AND user_id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ii", $bookId, $_SESSION['user_id']);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    // User has already voted for this book, handle accordingly
    echo "Error: You have already voted for this book.";
    echo '<script>alert("Error: You have already voted for this book.");</script>';
    exit();
}

// Prepare SQL statement to insert the rating
$sql = "INSERT INTO ratings (book_id, user_id, rating) VALUES (?, ?, ?)";

// Prepare and bind parameters
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "iii", $bookId, $_SESSION['user_id'], $rating);

// Execute the statement
if (mysqli_stmt_execute($stmt)) {
    echo "Rating updated successfully.";
} else {
    echo "Error updating rating: " . mysqli_error($conn);
    echo '<script>alert("Error: You have already voted for this book.");</script>';
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
