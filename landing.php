<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>File Sharing System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    font-family: Arial;
    margin: 0;
}

/* Navbar */
.navbar{
    box-shadow: 0 2px 10px rgba(0,0,0,0.2);
}

/* Hero Section */
.hero{
    background: linear-gradient(to right, #4facfe, #00f2fe);
    height: 90vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
}

.hero h1{
    font-size: 40px;
    font-weight: bold;
}

.hero p{
    font-size: 18px;
}

/* Buttons */
.btn-lg{
    padding: 12px 25px;
    border-radius: 10px;
}

/* Features */
.features{
    padding: 60px 0;
}

.feature-card{
    border-radius: 15px;
    padding: 20px;
    transition: 0.3s;
}

.feature-card:hover{
    transform: translateY(-5px);
}

/* Footer */
footer{
    background: #111;
    color: white;
}
</style>

</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
<div class="container">

<span class="navbar-brand">📁 File Sharing System</span>

<?php if(isset($_SESSION['username'])) { ?>

    <!-- Only Logout -->
    <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>

<?php } else { ?>

    <!-- Login Button -->
    <a href="login.php" class="btn btn-light btn-sm">Login</a>

<?php } ?>

</div>
</nav>

<!-- Hero Section -->
<div class="hero">

<div>

<h1>Welcome to File Sharing System 👋</h1>

<p class="mt-3 mb-4">
Upload, store, preview and download files easily & securely
</p>

<?php if(isset($_SESSION['username'])) { ?>

    <!-- After Login -->
    <a href="upload.php" class="btn btn-light btn-lg">
        📂 Get Started
    </a>

<?php } else { ?>

    <!-- Before Login -->
    <a href="login.php" class="btn btn-light btn-lg">
        🚀 Get Started
    </a>

<?php } ?>

</div>

</div>

<!-- Features -->
<div class="container features text-center">

<h3 class="mb-5">✨ Features</h3>

<div class="row">

<div class="col-md-4">
<div class="card shadow-sm feature-card">
<h5>📤 Upload</h5>
<p>Upload files quickly and easily</p>
</div>
</div>

<div class="col-md-4">
<div class="card shadow-sm feature-card">
<h5>💾 Store</h5>
<p>Securely store files in database</p>
</div>
</div>

<div class="col-md-4">
<div class="card shadow-sm feature-card">
<h5>📂 View & Download</h5>
<p>Access files anytime from anywhere</p>
</div>
</div>

</div>

</div>

<!-- Footer -->
<footer class="text-center p-3">
© 2026 Supreet Kaur | File Sharing System
</footer>

</body>
</html>
