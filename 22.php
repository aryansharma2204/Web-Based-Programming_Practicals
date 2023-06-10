<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if a file was uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imageTmpPath = $_FILES['image']['tmp_name'];
        $imageName = $_FILES['image']['name'];

        // Move the uploaded file to a desired location
        $uploadPath = 'uploads/' . $imageName;
        move_uploaded_file($imageTmpPath, $uploadPath);

        // Display the uploaded image
        echo '<h2>Uploaded Image:</h2>';
        echo '<img src="' . $uploadPath . '" alt="Uploaded Image">';
    } else {
        echo 'Error: No file uploaded.';
    }
}
?>
