<?php
session_start();
// Retrieve book ID and PDF file name from query parameters
if (isset($_GET['book_id']) && isset($_GET['file_name'])) {
    $book_id = $_GET['book_id'];
    $file_name = $_GET['file_name'];
    
    // Construct the URL for the PDF file
    $pdf_url = "../pdf/" . $file_name;
} else {
    // Handle missing parameters or invalid values
    echo "Error: Missing book ID or file name.";
    exit();
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
      
    <style>
        .pdfView{
            width: 100%;
            height: 100vh;  
            border: none; 
        }
    </style>

  </head>
  <body>
  <?php require 'form.php'; ?>
  <?php require 'nav.php'; ?>
  <?php require 'uploadform.php'; ?>
<body>
    <!-- Embed PDF using iframe -->
    <main>
    <div >
    <iframe class=pdfView src="<?php echo $pdf_url.'#toolbar=0'; ?>" ></iframe>
    </div>
</main>
    <?php require 'footer.php';?>
</body>
<script src="..\js\formlogin.js" defer></script>
  <script src="..\js\formregister.js" defer></script>
  <!-- <script src="..\js\form.js" defer></script> -->
  <script src="..\js\flickitybookcarousel.js"></script>
  <script src="..\js\upload.js"></script>
  </body>
</html>
