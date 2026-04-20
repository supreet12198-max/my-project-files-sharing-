<!DOCTYPE html>
<html>
<head>
<title>File Sharing System</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(to right, #4facfe, #00f2fe);
}

/* Hero section */
.hero{
    height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

/* Card style */
.card{
    border-radius: 15px;
    padding: 30px;
}
</style>

</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
<div class="container">
<span class="navbar-brand">📁 File Sharing System</span>
<a href="login.php" class="btn btn-light btn-sm">Login</a>
</div>
</nav>

<!-- Hero Section -->
<div class="container hero">

<div class="card shadow-lg col-md-6">

<h1 class="mb-3">Welcome Supreet 👋</h1>

<p class="mb-4">
This project allows users to upload, store, preview and download files easily.
</p>

<!-- Buttons -->
<div class="d-grid gap-2">

<a href="login.php" class="btn btn-primary">Login to Continue</a>

<a href="display.php" class="btn btn-success">View Files</a>

</div>

</div>

</div>

<!-- Features -->
<div class="container text-center mt-5">

<h3 class="mb-4 text-white">Features</h3>

<div class="row">

<div class="col-md-4">
<div class="card p-3 shadow-sm">
<h5>Upload</h5>
<p>Upload files easily</p>
</div>
</div>

<div class="col-md-4">
<div class="card p-3 shadow-sm">
<h5>Store</h5>
<p>Save files on server & database</p>
</div>
</div>

<div class="col-md-4">
<div class="card p-3 shadow-sm">
<h5>Preview & Download</h5>
<p>View files without downloading</p>
</div>
</div>

</div>

</div>

<!-- Footer -->
<footer class="text-center text-white mt-5 p-3">
© 2026 Supreet Kaur | File Sharing System
</footer>

</body>
</html>