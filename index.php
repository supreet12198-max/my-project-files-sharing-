<!DOCTYPE html>
<html>
<head>
<title>File Sharing System</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background-color: #eef2f7;
}

/* Hero */
.hero{
    background-color: #0d6efd;
    color: white;
    padding: 60px 20px;
    text-align: center;
}

/* Upload Card */
.upload-box{
    margin-top: -40px;
}

/* Footer */
footer{
    margin-top: 50px;
    padding: 15px;
    background: #212529;
    color: white;
    text-align: center;
}
</style>

<script>
function validate(){
    let file = document.getElementById("file");

    if(file.value == ""){
        alert("Please select a file");
        return false;
    }

    let size = file.files[0].size;

    if(size > 2000000){
        alert("File must be less than 2MB");
        return false;
    }

    return true;
}
</script>

</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
<div class="container">
<span class="navbar-brand">📁 File Sharing System</span>
</div>
</nav>

<!-- Hero Section -->
<div class="hero">
    <h1>Welcome Supreet 👋</h1>
    <p>Upload, Store and Preview Your Files Easily</p>
</div>

<!-- Upload Section -->
<div class="container upload-box">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card shadow p-4">

<h4 class="mb-3 text-center">Upload File</h4>

<form action="upload.php" method="post" enctype="multipart/form-data" onsubmit="return validate()">

<input type="file" name="file" id="file" class="form-control mb-3">

<button class="btn btn-primary w-100">Upload</button>

</form>

<a href="display.php" class="btn btn-success mt-3 w-100">View Files</a>

</div>

</div>

</div>

</div>

<!-- Features -->
<div class="container mt-5 text-center">

<h3 class="mb-4">Project Features</h3>

<div class="row">

<div class="col-md-4">
<div class="card p-3 shadow-sm">
<h5>Upload</h5>
<p>Users can upload files easily</p>
</div>
</div>

<div class="col-md-4">
<div class="card p-3 shadow-sm">
<h5>Store</h5>
<p>Files are saved on server & database</p>
</div>
</div>

<div class="col-md-4">
<div class="card p-3 shadow-sm">
<h5>Preview & Download</h5>
<p>Files can be viewed and downloaded</p>
</div>
</div>

</div>

</div>

<!-- Footer -->
<footer>
    <p>© 2026 Supreet Kaur | File Sharing System</p>
</footer>

</body>
</html>