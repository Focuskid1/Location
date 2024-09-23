<?php
// Specify the path to the file you want to view
$filename = 'location.txt';  // Adjust the path if the file is in a different directory

// Check if the file exists
if (file_exists($filename)) {
    // Read and display the file content
    $content = file_get_contents($filename);
    echo nl2br($content);  // nl2br converts newlines to <br> tags for proper formatting in HTML
} else {
    echo "The file does not exist.";
}
?>
