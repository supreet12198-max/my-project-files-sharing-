<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Home - File Sharing System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    margin:0;
    font-family: Arial;
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card-box{
    background: white;
    padding: 40px;
    border-radius: 15px;
    text-align: center;
    width: 400px;
    box-shadow: 0px 8px 25px rgba(0,0,0,0.2);
}

.title{
    font-size: 26px;
    font-weight: bold;
    margin-bottom: 10px;
}

.subtitle{
    color: gray;
    margin-bottom: 25px;
}

.btn-custom{
    width: 100%;
    margin-top: 10px;
    padding: 10px;
    font-size: 16px;
    border-radius: 8px;
}

.icon{
    font-size: 50px;
    margin-bottom: 10px;
}
</style>

</head>

<body>

<div class="card-box">

<div class="icon">📁</div>

<div class="title">File Sharing System</div>
<div class="subtitle">Upload, View & Share Files Easily</div>

<a href="upload.php" class="btn btn-primary btn-custom">
    📤 Upload File
</a>

<a href="view.php" class="btn btn-success btn-custom">
    📂 View Files
</a>

</div>

</body>
</html>
