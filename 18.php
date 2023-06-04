<?php

// File Manipulation

// Copy a file
$sourceFile = '18.txt';
$destinationFile = '18a.txt';
if (copy($sourceFile, $destinationFile)) {
    echo "File copied successfully.";
} else {
    echo "Failed to copy the file.";
}

echo "<br>";

// Rename a file
$oldName = '18aaa.txt';
$newName = '18aa.txt';
if (rename($oldName, $newName)) {
    echo "File renamed successfully.";
} else {
    echo "Failed to rename the file.";
}

echo "<br>";

// Delete a file
$fileToDelete = '18aaaa.txt';
if (unlink($fileToDelete)) {
    echo "File deleted successfully.";
} else {
    echo "Failed to delete the file.";
}

echo "<br>";

// Directory Manipulation

// Create a directory
$directory = 'new_directory1';
if (mkdir($directory)) {
    echo "Directory created successfully.";
} else {
    echo "Failed to create the directory.";
}

echo "<br>";

// Rename a directory
$oldDirectory = 'old_directory';
$newDirectory = 'new_directory';
if (rename($oldDirectory, $newDirectory)) {
    echo "Directory renamed successfully.";
} else {
    echo "Failed to rename the directory.";
}

echo "<br>";

// Delete a directory
$directoryToDelete = 'aryan';
if (rmdir($directoryToDelete)) {
    echo "Directory deleted successfully.";
} else {
    echo "Failed to delete the directory.";
}

?>
