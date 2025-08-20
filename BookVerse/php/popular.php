<div class="category">
    <h2 class="description">Popular!</h2>
    <div class="carousel" data-flickity='{ "groupCells": true ,"pageDots": false}'>
        <?php
        // Include database connection
        require "DBconnect.php";
        $table = "books";

        $conn = mysqli_connect($DBserver, $DBusername, $DBpassword, $database);
        if (!$conn) {
            die("Sorry, we failed to connect: " . mysqli_connect_error() . "<br>");
        }

        // Query to fetch books ordered by views
        $query = "SELECT * FROM books ORDER BY views DESC LIMIT 15"; // Limit to 15 books
        $result = mysqli_query($conn, $query);

        // Check if there are any books available
        if (mysqli_num_rows($result) > 0) {
            // Loop through the retrieved books
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="carousel-cell">
                    <a href="view.php?book_id=<?php echo $row['book_id']; ?>">
                        <img class="image" src="<?php echo $row['thumbnail_path']; ?>">
                    </a>
                    <div class="item-title"><?php echo $row['file_name']; ?></div>
                </div>
                <?php
            }
        } else {
            // No books available
            echo "No books found.";
        }

        mysqli_close($conn);
        ?>
    </div>
</div>