<?php
$file=$_GET['file'];

// Replace backslashes with slashes (Windows)
$file = str_replace('\\', '/', $file);

// Ensure the file is within your intended directory
if (strpos($file, '../pdf/') !== 0) {
    exit('Invalid file path.');
}

header("content-disposition: attachment; filename=".
    urlencode(basename($file))
);

$fptr= fopen($file, "r");

while (!feof($fptr)) {
    echo fread($fptr, 8192);
    flush();
}

fclose($fptr);

?>