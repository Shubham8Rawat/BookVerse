<?php
// Include your database connection file if it's not already included
require_once 'DBconnect.php';

// Define the searchBooks function
// Define the searchBooks function
function searchBooks($searchQuery) {
    global $DBserver, $DBusername, $DBpassword, $database; // Access global variables
    
    // Initialize an empty array to store search results
    $searchResults = array();
    
    // Establish connection to the database
    $conn = mysqli_connect($DBserver, $DBusername, $DBpassword, $database);
    
    // Check if the connection was successful
    if (!$conn) {
        die("Sorry, we failed to connect: " . mysqli_connect_error() . "<br>");
    }
    
    // Prepare the SQL statement to search for books
    $query = "SELECT * FROM books WHERE file_name LIKE ?"; // You can customize this query based on your database structure
    
    // Bind parameters and execute the prepared statement
    $stmt = mysqli_prepare($conn, $query);
    $searchParam = "%" . $searchQuery . "%"; // Add wildcards to search for partial matches
    mysqli_stmt_bind_param($stmt, "s", $searchParam);
    mysqli_stmt_execute($stmt);
    
    // Get the result set
    $result = mysqli_stmt_get_result($stmt);
    
    // Fetch results and store them in the searchResults array
    while ($row = mysqli_fetch_assoc($result)) {
        $searchResults[] = $row;
    }
    
    // Close the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
    // Return the search results
    return $searchResults;
}

?>
<?php
if (isset($_GET['query'])) {
    // Retrieve the search query
    $searchQuery = $_GET['query'];
    
    // Use the search query to search your database or any other data source
    // Implement your search logic here, for example:
    // You can modify your existing database query to filter results based on the search query
    // For demonstration, let's assume you have a function called searchBooks() that searches for books in your database
    $searchResults = searchBooks($searchQuery); } ?>

<!doctype html>
<html lang="en">
  <head>
    <title>BookVerse!</title>
    <link rel="stylesheet" href="..\css\main.css">
    <link rel="stylesheet" href="..\css\scroll.css">
    <link rel="stylesheet" href="..\css\form.css">
    <link rel="stylesheet" href="..\css\login.css">
    <link rel="stylesheet" href="..\css\register.css">
    <!-- <link rel="stylesheet" href="..\css\Itemcarousel.css"> -->
    <link rel="stylesheet" href="..\css\bookcarousel.css">
    <link rel="stylesheet" href="..\css\view.css">
    <link rel="stylesheet" href="..\css\upload.css" />
    <link rel="stylesheet" href="..\css\browse.css" />
    <link rel="stylesheet" href="..\css\search.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
       
  </head>
  <body>
  <?php require 'form.php'; ?>
  <?php require 'nav.php'; ?>
  <?php require 'uploadform.php'; ?>
  
    <main>
    <h2 class="Title_browse"><?php  echo "search result for: ".$searchQuery; ?>  
<div class="sep"></div>

<?php
       
       if (!empty($searchResults)) {
        foreach ($searchResults as $book) {
            ?>
            <div class="browse-cell">
                <a href="view.php?book_id=<?php echo $book['book_id']; ?>">
                <img class="image" src="<?php echo $book['thumbnail_path']; ?>">
            </a>
            <div class="item-title"><?php echo $book['file_name']; ?></div>
                </div>
        <?php
        }
    } 
    else {
        echo 'No results found.';
    }
        ?>

  </main>
  <?php require 'footer.php';?>
  
  <script src="..\js\formlogin.js" defer></script>
  <script src="..\js\formregister.js" defer></script>
  <script src="..\js\form.js" defer></script>
  <script src="..\js\flickitybookcarousel.js"></script>
  <script src="..\js\upload.js"></script>
  </body>
</html>