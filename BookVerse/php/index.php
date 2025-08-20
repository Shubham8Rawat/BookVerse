<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>BookVerse!</title>
    <link rel="stylesheet" href="..\css\main.css">
    <link rel="stylesheet" href="..\css\herocarousel.css">
    <link rel="stylesheet" href="..\css\scroll.css">
    <link rel="stylesheet" href="..\css\form.css">
    <link rel="stylesheet" href="..\css\login.css">
    <link rel="stylesheet" href="..\css\register.css">
    <link rel="stylesheet" href="..\css\Itemcarousel.css">
    <link rel="stylesheet" href="..\css\bookcarousel.css" />
    <link rel="stylesheet" href="..\css\upload.css" />
    <link rel="stylesheet" href="..\css\search.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
       
  </head>
  <body>
  <?php require 'form.php'; ?>
  <?php require 'nav.php'; ?>
  <?php require 'uploadform.php'; ?>
  
    <main>

      <?php require 'heroCarousel.php'; ?>

      <div class="slogan" id="slogan">
        <h1><center>BookVerse: Where Ever Page Unveils a World of Possibilities - Your Gateway to Infinite Stories!</center></h1>
        
      </div>
<div class="sep">
  
</div>

<?php
  include 'popular.php';

  $categoryName= array("Action/Adventure","Comedy","Drama","SciFi","Thriller","Educational","Biography");
  foreach ($categoryName as $genre) {
    include 'category.php';
  }

?>
  </main>
  <?php require 'footer.php';?>
  <script src="..\js\slider.js"></script>
  <script src="..\js\formlogin.js" defer></script>
  <script src="..\js\formregister.js" defer></script>
  <script src="..\js\form.js" defer></script>
  <script src="..\js\flickitybookcarousel.js"></script>
  <script src="..\js\upload.js"></script>
  </body>
</html>