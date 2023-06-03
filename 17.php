<?php

$file = '17.txt'; // Specify the file name

// Open the file in write mode
$handle = fopen($file, 'w');

if ($handle === false) {
    echo "Failed to create the file.";
} else {
    // Write content to the file
    $content = "This is an example file.";
    fwrite($handle, $content);

    // Close the file
    fclose($handle);

    echo "File created successfully.";
}

?>
