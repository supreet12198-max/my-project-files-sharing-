<?php
include "db.php";

if(isset($_POST['login'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        header("Location: index.php");
    } else {
        echo "<script>alert('Invalid Login');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(to right, #4facfe, #00f2fe);
}
</style>

</head>

<body>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-4">

<div class="card p-4 shadow">

<h3 class="text-center mb-3">Login</h3>

<form method="post">

<input type="text" name="username" placeholder="Username" class="form-control mb-3">

<input type="password" name="password" placeholder="Password" class="form-control mb-3">

<button name="login" class="btn btn-primary w-100">Login</button>

</form>

</div>

</div>

</div>

</div>

</body>
</html>