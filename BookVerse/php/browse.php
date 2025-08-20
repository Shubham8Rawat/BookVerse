<?php session_start();
if(isset($_GET['main_tag'])){
    $genre = $_GET['main_tag'];
  }
//else i will set $genre to popular taki browse standalone bhi chl jae
?>
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
    <h2 class="Title_browse"><?php  echo $genre; ?>  
<div class="sep"></div>

<?php
        require "DBconnect.php";
        $table = "books";
        //$book_id=5;
        $conn = mysqli_connect($DBserver, $DBusername, $DBpassword,$database);
        //$target_dir="../uploads/";
        $target_dir="../pdf/";
        // Include database connection
    
        if (!$conn) {
            die("Sorry, we failed to connect: " . mysqli_connect_error() . "<br>");
        }
        
        // Query to fetch books for the current genre from the database
        $query = "SELECT * FROM books WHERE main_tag = ? ORDER BY RAND() "; // Limit to 14 books
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "s", $genre);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // Loop through 14 times to ensure 14 cells are displayed
        for ($i = 1; $i <= mysqli_num_rows($result); $i++) {
            // If there are books available for this genre, display them
            if ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="browse-cell">
                    <a href="view.php?book_id=<?php echo $row['book_id']; ?>">
                        <img class="image" src="<?php echo $row['thumbnail_path']; ?>">
                    </a>
                    <div class="item-title"><?php echo $row['file_name']; ?></div>
                </div>
                <?php
            } 
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
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