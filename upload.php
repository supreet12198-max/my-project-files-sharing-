<?php
include "db.php";

$filename = $_FILES['file']['name'];
$tempname = $_FILES['file']['tmp_name'];

$folder = "uploads/".$filename;

move_uploaded_file($tempname, $folder);

$sql = "INSERT INTO files(filename, filepath) VALUES('$filename','$folder')";
mysqli_query($conn, $sql);

echo "File Uploaded Successfully<br>";
echo "<a href='index.php'>Go Back</a>";
?>