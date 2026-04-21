<?php
include "db.php";
session_start();

if(!isset($_SESSION['username'])){
    die("Please login first");
}

if(isset($_POST['upload'])){

    $file = $_FILES['file'];

    $filename = $file['name'];
    $tmp_name = $file['tmp_name'];

    $folder = "uploads/";

    // create unique file name
    $newName = time() . "_" . $filename;

    $path = $folder . $newName;

    // move file to uploads folder
    if(move_uploaded_file($tmp_name, $path)){

        $query = "INSERT INTO files (filename, filepath) 
                  VALUES ('$newName', '$path')";

        if(mysqli_query($conn, $query)){
            
            // ✅ redirect to view page after upload
            header("Location: view.php");
            exit();

        } else {
            echo "DB Error: " . mysqli_error($conn);
        }

    } else {
        echo "<script>alert('Upload Failed');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Upload File</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f4f6f9;
}
.box{
    background:white;
    padding:30px;
    border-radius:10px;
    margin-top:50px;
    text-align:center;
}
</style>

</head>

<body>

<div class="container">

<div class="box">

<h3 class="mb-4">Upload File</h3>

<form method="POST" enctype="multipart/form-data">
    
    <input type="file" name="file" class="form-control mb-3" required>
    
    <button type="submit" name="upload" class="btn btn-primary">
        Upload
    </button>

</form>

<!-- View Files Button -->
<div class="mt-4">
    <a href="view.php" class="btn btn-success">
        View Uploaded Files
    </a>
</div>

</div>

</div>

</body>
</html>
