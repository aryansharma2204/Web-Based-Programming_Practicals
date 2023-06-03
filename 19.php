<?php

$filename = '19.txt'; // Specify the file name

// Check if the file exists
if (file_exists($filename)) {
    // Read the file content
    $content = file_get_contents($filename);

    // Display the file content
    echo "File Content:<br>";
    echo $content;
} else {
    echo "File does not exist.";
}

?>
