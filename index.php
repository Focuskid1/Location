<?php
// Open the file in "a" mode to append data to the file without overwriting it
$myfile = fopen("location.txt", "a");

// Get data from the URL parameters and server variables
$txt = "lat: " . $_GET["lat"] . "\nlong: " . $_GET["long"] . "\nIP: " . $_SERVER["REMOTE_ADDR"] . "\nUser agent: " . $_GET["uagent"] . "\nTimestamp: " . date("Y-m-d H:i:s") . "\n";

// Add a separator between each user's data for readability
$txt .= "-------------------------------\n";

// Write the data to the file
fwrite($myfile, $txt);

// Close the file
fclose($myfile);

echo "User information stored successfully!";
?>
