<!--carousel HTML -->
<div class="category">
    <h2 class="description"><?php echo $genre; ?>
    <a href="browse.php?main_tag=<?php echo $genre; ?>">
    <img src="../img/viewMore.png">
    </a>
    </h2>
    <div class="carousel" data-flickity='{ "groupCells": true ,"pageDots": false}'>
        <?php
        // Include database connection
        require "DBconnect.php";
        $table = "books";
    
        $conn = mysqli_connect($DBserver, $DBusername, $DBpassword, $database);
        if (!$conn) {
            die("Sorry, we failed to connect: " . mysqli_connect_error() . "<br>");
        }
        
        // Query to fetch books for the current genre from the database
        $query = "SELECT * FROM books WHERE main_tag = ? ORDER BY RAND() LIMIT 14"; // Limit to 14 books
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "s", $genre);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // Loop through 14 times to ensure 14 cells are displayed
        for ($i = 1; $i <= 14; $i++) {
            // If there are books available for this genre, display them
            if ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="carousel-cell">
                    <a href="view.php?book_id=<?php echo $row['book_id']; ?>">
                        <img class="image" src="<?php echo $row['thumbnail_path']; ?>">
                    </a>
                    <div class="item-title"><?php echo $row['file_name']; ?></div>
                </div>
                <?php
            } else {
                // If there are no more books available, display an empty cell
                ?>
                <div class="carousel-cell">
                    <!-- Empty cell -->
                </div>
                <?php
            }
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        ?>
        <div class="carousel-cell">
                    <a href="browse.php?main_tag=<?php echo $row['main_tag']; ?>">
                        <img class="image" id="browseButton" src="../img/browseButton.png">
                    </a>
                    <div class="item-title">BROWSE MORE!!</div>
        </div>
    </div>
</div>
