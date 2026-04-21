<?php
session_start();

// check login
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Sharing System</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: linear-gradient(to right, #4facfe, #00f2fe);
        }

        .main-box{
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-box{
            width: 400px;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            background: white;
        }
    </style>

    <script>
        function validateForm(){

            let fileInput = document.getElementById("file");

            // file check
            if(fileInput.files.length === 0){
                alert("Please select a file first");
                return false;
            }

            let file = fileInput.files[0];

            // size check (2MB)
            if(file.size > 2 * 1024 * 1024){
                alert("File is too large. Maximum size allowed is 2MB");
                return false;
            }

            // optional: extension check
            let allowed = ["jpg","png","pdf","txt"];
            let ext = file.name.split('.').pop().toLowerCase();

            if(!allowed.includes(ext)){
                alert("Only jpg, png, pdf, txt files are allowed");
                return false;
            }

            return true;
        }
    </script>

</head>

<body>

<!-- navbar -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand">📁 File Sharing System</span>
        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
</nav>

<!-- main -->
<div class="container main-box">

    <div class="card-box shadow">

        <h3 class="mb-3">Upload File</h3>

        <form action="upload.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">

            <input type="file" name="file" id="file" class="form-control mb-3" required>

            <button type="submit" class="btn btn-primary w-100">
                Upload File
            </button>

        </form>

        <a href="display.php" class="btn btn-success w-100 mt-3">
            View Uploaded Files
        </a>

    </div>

</div>

</body>
</html>
