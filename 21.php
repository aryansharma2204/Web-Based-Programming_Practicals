<!DOCTYPE html>
<html>
<head>
    <title>File Upload and Download</title>
</head>
<body>
    <h1>File Upload and Download</h1>
    
    <?php
    // Check if a file has been uploaded
    if(isset($_FILES['fileToUpload'])){
        $file = $_FILES['fileToUpload'];
        
        // File details
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];
        
        // Specify the directory where the file should be uploaded
        $uploadDir = 'uploads/';
        
        // Check if there are no errors
        if($fileError === 0){
            // Move the uploaded file to the desired directory
            $fileDestination = $uploadDir . $fileName;
            move_uploaded_file($fileTmpName, $fileDestination);
            echo "File uploaded successfully!";
        } else {
            echo "Error uploading the file.";
        }
    }
    ?>
    
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="fileToUpload">
        <button type="submit" name="submit">Upload</button>
    </form>
    
    <h2>Uploaded Files</h2>
    
    <?php
    // List all the files in the upload directory
    $files = scandir($uploadDir);
    foreach($files as $file){
        if($file !== '.' && $file !== '..'){
            echo '<a href="'.$uploadDir.$file.'">'.$file.'</a><br>';
        }
    }
    ?>
</body>
</html>
