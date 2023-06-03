<?php

$filename = '20.txt'; // Specify the file name

// Check if the file exists
if (file_exists($filename)) {
    // Read the file content
    $content = file_get_contents($filename);

    // Modify the file content
    $modifiedContent = str_replace('old text', 'new text', $content);

    // Write the modified content back to the file
    file_put_contents($filename, $modifiedContent);

    echo "File content modified successfully.";
} else {
    echo "File does not exist.";
}

?>
