<?php session_start(); 
  if(isset($_GET['book_id'])){
    $book_id = $_GET['book_id'];
  }
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
    <link rel="stylesheet" href="..\css\Itemcarousel.css">
    <link rel="stylesheet" href="..\css\bookcarousel.css">
    <link rel="stylesheet" href="..\css\view.css">
    <link rel="stylesheet" href="..\css\upload.css" />
    <link rel="stylesheet" href="..\css\rate.css" />
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
  
  <?php require "DBconnect.php";
    $table = "books";
    //$book_id=5;
    $conn = mysqli_connect($DBserver, $DBusername, $DBpassword,$database);
    //$target_dir="../uploads/";
    $target_dir="../pdf/";

    if (!$conn) {
        die("Sorry, we failed to connect: " . mysqli_connect_error() . "<br>");
    } else {
        //echo "Connection established successfully<br>";
        $query = "SELECT * FROM $table WHERE book_id=$book_id";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
          // login successfull
          $datarow = mysqli_fetch_assoc($result);
          $OGfile=$datarow['original_file_name'];
          $book_info=$datarow['description'];
          $thumbnails_dir=$datarow['thumbnail_path'];
          $main_tag=$datarow['main_tag'];
          $display_name=$datarow['file_name'];
          //$thumbnails_dir='../thumbnails/' . $book_id . '_' . $display_name . '.jpg';
          

          $uploader=$datarow['user_id'];
          $userquery="SELECT * FROM user WHERE UId=$uploader";
          $userresult = mysqli_query($conn, $userquery);
          if (mysqli_num_rows($userresult) > 0) {
            $authorrow=mysqli_fetch_assoc($userresult);
          $author=$authorrow['name'];
          
          }
          //echo $OGfile; //for my testing
          
        } else {
          // wrong pass, display error message and redirect to login page with error
          echo '<script>alert("Book NOT FOUND!! ");';
        echo 'window.location.href = "index.php";</script>';
        exit();
        }
      }
  ?>

<?php


// Assuming you have already established a database connection
if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
}
// Get the current user's ID from the session

$userRating = null;
$average_rating = null;

// Construct the SQL query to retrieve the user's rating for the current book
$queryR = "SELECT rating FROM ratings WHERE book_id = ? AND user_id = ?";
$stmt = mysqli_prepare($conn, $queryR);
mysqli_stmt_bind_param($stmt, "ii", $book_id, $user_id);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $userRating);

// Fetch the result
mysqli_stmt_fetch($stmt);

// Close the statement
mysqli_stmt_close($stmt);
// Now $userRating contains the user's rating for the current book, if it exists

$queryAR = "SELECT AVG(rating) AS average_rating FROM ratings WHERE book_id = ?";
$stmt = mysqli_prepare($conn, $queryAR);
mysqli_stmt_bind_param($stmt, "i", $book_id);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $average_rating);

// Fetch the result
mysqli_stmt_fetch($stmt);

// Close the statement
mysqli_stmt_close($stmt);
?>

    <main>
      <div class="product_container">
        
        <div class="item_pic">
            <img src="<?php echo $thumbnails_dir;?>">
        

            <div class="rate">
                <input type="radio" id="star5" name="rating" value="5" <?php echo isset($userRating) && $userRating == 5 ? 'checked' : ''; ?>>
                <label for="star5" title="5 stars">5 stars</label>
                <input type="radio" id="star4" name="rating" value="4" <?php echo isset($userRating) && $userRating == 4 ? 'checked' : ''; ?>>
                <label for="star4" title="4 stars">4 stars</label>
                <input type="radio" id="star3" name="rating" value="3" <?php echo isset($userRating) && $userRating == 3 ? 'checked' : ''; ?>>
                <label for="star3" title="3 stars">3 stars</label>
                <input type="radio" id="star2" name="rating" value="2" <?php echo isset($userRating) && $userRating == 2 ? 'checked' : ''; ?>>
                <label for="star2" title="2 stars">2 stars</label>
                <input type="radio" id="star1" name="rating" value="1" <?php echo isset($userRating) && $userRating == 1 ? 'checked' : ''; ?>>
                <label for="star1" title="1 star">1 star</label>
            </div>

        </div>

        <div class="item_info">
            <div class="item_heading">
                <h2><?php echo $display_name; ?></h2>
              <div class="tags">
              <strong>Tags:</strong> <?php echo $main_tag; ?>
              &nbsp;&nbsp;&nbsp; Ratings:<?php echo number_format($average_rating, 1); ?>
            </div>
          
            <div class="sep"></div>
            </div>
            

            <div class="item_text">
              <h3>Uploaded by: <?php echo $author;?></h3>
                <p> <?php echo $book_info;?></p>
            <br><br></div>
      
            <div class="download">
                <div class="dwn_label">Click below to view PDF<br>
                    <!-- Disable the anchor tag if user is not logged in -->
                    <a href="pdfView.php?book_id=<?php echo $book_id; ?>&file_name=<?php echo $OGfile; ?>"
              
                    

                       <?php echo isset($_SESSION['user_id']) ? 'onclick="incrementViews(' . $book_id . ')"' : 'onclick="return false;"' ?>>View
                      </a>
                </div>
                <br>
                <div class="dwn_label">Click below to Download PDF<br>
                    <!-- Disable the anchor tag if user is not logged in -->
                    <a href="<?php echo isset($_SESSION['user_id']) ? 'download.php?file=' . $target_dir . $OGfile : '#' ?>"
                       <?php echo isset($_SESSION['user_id']) ? 'onclick="incrementViews(' . $book_id . ')"' : 'onclick="return false;"' ?>>Download</a>
                </div>
            </div>
      </div>

      </div>


<div class="sep"></div>
<?php
$genre=$main_tag;  
include 'category.php';
?>
  </main>
  <?php require 'footer.php';?>
  
  <script>
    // Add event listeners to view and download buttons
    document.querySelectorAll('.download a').forEach(function(button) {
        button.addEventListener('click', function(event) {
            // Check if user is logged in
            if (!<?php echo isset($_SESSION['user_id']) ? 'true' : 'false'; ?>) {
                // User is not logged in, prevent default action and show alert
                event.preventDefault();
                alert('You must be logged in to view and download.');
            }
        });
    });
  </script>

<script>
    function incrementViews(book_id) {
        // Send a synchronous request to the server to increment views
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "increment_views.php?book_id=" + book_id, false);  // Synchronous request
        xhr.send();
        
        // Reload the page after incrementing views
        location.reload();
    }
</script>

<script>
  document.querySelectorAll('.rate input').forEach(function(input) {
    input.addEventListener('change', function(event) {
      var rating = event.target.value;
      var bookId = <?php echo $book_id; ?>;
      rateBook(bookId, rating);
    });
  });

  function rateBook(bookId, rating) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "rate_book.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle response if needed
            console.log(xhr.responseText);
            // Reload the page after rating
            location.reload();
        }
    };
    xhr.send("book_id=" + bookId + "&rating=" + rating);
  }
</script>


<script>
    // JavaScript function to enable or disable radio buttons based on user's rating
    function checkUserRating() {
        <?php if(isset($_SESSION['user_id'])) { ?>
            var userRating = <?php echo isset($userRating) ? $userRating : 'null'; ?>;
            var userHasRated = userRating !== null;
            var radioButtons = document.querySelectorAll('input[type="radio"][name="rating"]');
            radioButtons.forEach(function(radioButton) {
                radioButton.disabled = userHasRated;
                if (userHasRated && radioButton.value == userRating) {
                    radioButton.checked = true;
                }
            });
        <?php } ?>
    }

    // Call the function when the page loads
    window.onload = function() {
        checkUserRating();
    };
</script>

  <script src="..\js\formlogin.js" defer></script>
  <script src="..\js\formregister.js" defer></script>
  <script src="..\js\form.js" defer></script>
  <script src="..\js\flickitybookcarousel.js"></script>
  <script src="..\js\upload.js"></script>
  </body>
</html>