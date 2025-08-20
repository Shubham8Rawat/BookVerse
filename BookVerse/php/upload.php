<!-- 47,136,142 -->
<?php
session_start();

// Include database connection
require "DBconnect.php";
$table = "books";


// Create the books table if it doesn't exist
$createTableQuery = "CREATE TABLE IF NOT EXISTS $database.$table (
    book_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    file_name VARCHAR(255),
    original_file_name VARCHAR(255),
    upload_timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    main_tag VARCHAR(255), -- Add column for main tag
    additional_tags TEXT,  -- Add column for additional tags (serialized array)
    description TEXT,      -- Add column for description
    thumbnail_path VARCHAR(255),  -- Add column for thumbnail path
    views INT DEFAULT 0,
    FOREIGN KEY (user_id) REFERENCES user(UId)
)";

$conn = mysqli_connect($DBserver, $DBusername, $DBpassword, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully<br>";


if (mysqli_query($conn, $createTableQuery)) {
    echo "Table 'books' was created successfully.<br>";
} else {
    echo "Error creating table 'books': " . mysqli_error($conn) . "<br>";
}

$createRatingTable = "CREATE TABLE IF NOT EXISTS ratings (
    rating_id INT AUTO_INCREMENT PRIMARY KEY,
    book_id INT,
    user_id INT,
    rating INT, -- Allow rating to be nullable
    comment TEXT, -- Add column for comments
    FOREIGN KEY (book_id) REFERENCES books(book_id),
    FOREIGN KEY (user_id) REFERENCES user(UId)
)";

if (mysqli_query($conn, $createRatingTable)) {
    echo "Table 'ratings' was created successfully.<br>";
} else {
    echo "Error creating table 'ratings': " . mysqli_error($conn) . "<br>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the user is logged in
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }
    
    // Handle file upload
    $absolute_path='C:/xampp/htdocs/cws/Project/pdf/';
    /////////////////////////////
    $targetDir = "../pdf/"; // Directory where uploaded files will be stored
    $targetFile = $targetDir . basename($_FILES["bookFile"]["name"]); // Path to the uploaded file
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    //TARGET PATH ABSOLUTE
    $pdfPath=$absolute_path . basename($_FILES["bookFile"]["name"]);
    
    // Check file size (max 50MB)
    if ($_FILES["bookFile"]["size"] > 50 * 1024 * 1024) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow only PDF format
    if ($fileType !== "pdf") {
        echo "Sorry, only PDF files are allowed.";
        $uploadOk = 0;
    }
    

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Move the file to the designated directory
        if (move_uploaded_file($_FILES["bookFile"]["tmp_name"], $targetFile)) {
            // File uploaded successfully, record metadata in the database
            $userId = $_SESSION['user_id'];
            
            $originalFileName = $_FILES["bookFile"]["name"];
            $filename = substr($originalFileName, 0, -4); // Remove last 4 characters (".php")
            $fileName = pathinfo($originalFileName, PATHINFO_FILENAME);
            //$fileName = basename($fileName);
            
            
            $uploadTimestamp = date("Y-m-d H:i:s");
            $mainTag = $_POST['mainTag']; // Get main tag value

            // Get additional tags value (up to 3)
            $additionalTags = isset($_POST['tags']) ? array_slice($_POST['tags'], 0, 3) : array();
            $additionalTags = serialize($additionalTags);

            $description = $_POST['description']; // Get description value
            
            $bookTitle = isset($_POST['bookTitle']) ? $_POST['bookTitle'] : '';
            $fileName = !empty($bookTitle) ? $bookTitle : $fileName;
            

           
            // Insert metadata into the database using prepared statements
            $query = "INSERT INTO $table (user_id, file_name, original_file_name, upload_timestamp, main_tag, additional_tags, description) 
                      VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $query);
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "issssss", $userId, $fileName, $originalFileName, $uploadTimestamp, $mainTag, $additionalTags, $description);
                mysqli_stmt_execute($stmt);
                $book_id = mysqli_insert_id($conn); // Get the last inserted book ID
                
                // Generate thumbnail
                $host_fetch_pic = generateThumbnail($pdfPath, $book_id, $fileName);
                
                // Update the thumbnail path
                $update_query = "UPDATE $table SET thumbnail_path = ? WHERE book_id = ?";
                $update_stmt = mysqli_prepare($conn, $update_query);
                if ($update_stmt) {
                    mysqli_stmt_bind_param($update_stmt, "si", $host_fetch_pic, $book_id);
                    mysqli_stmt_execute($update_stmt);
                    mysqli_stmt_close($update_stmt);
                } else {
                    echo "Error preparing update statement: " . mysqli_error($conn);
                }
                
                mysqli_stmt_close($stmt);
                
                echo "The file " . htmlspecialchars(basename($_FILES["bookFile"]["name"])) . " has been uploaded.";
                echo '<script>alert("The file ' . htmlspecialchars(basename($_FILES['bookFile']['name'])) . ' has been uploaded.");</script>';
                echo '<script>window.location.href = "index.php";</script>';
                exit();
            } else {
                echo "Error preparing insert statement: " . mysqli_error($conn);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

function generateThumbnail($pdfPath, $book_id, $fileName) {
    $basePath_dir = 'C:/xampp/htdocs/cws/Project';
    //$convertedImagePath = $basePath_dir . '/temp/'. $bookId .'converted_image.jpg';
    // Define Ghostscript path
    $ghostscriptPath = 'C:/Program Files/gs/gs10.03.0/bin/gswin64c.exe'; // Adjust the path as needed
    $thumbnailPath = $basePath_dir.'/thumbnails/' . $book_id . '_' . $fileName . '.jpg'; // Adjust path as needed

    $host_fetch_pic='http://localhost/cws/Project'.'/thumbnails/' . $book_id . '_' . $fileName . '.jpg';
    $command = "\"$ghostscriptPath\" -q -dQUIET -dSAFER -dBATCH -dNOPAUSE -dNOPROMPT -sDEVICE=jpeg -dJPEGQ=100 -dTextAlphaBits=4 -dGraphicsAlphaBits=4 -r72 -dFirstPage=1 -dLastPage=1 -sOutputFile=\"$thumbnailPath\" \"$pdfPath\" 2>&1";
    exec($command, $output, $returnCode);
    return $host_fetch_pic; 
}

?>
