<?php
include "db.php";
session_start();

// check login
if (!isset($_SESSION['username'])) {
    die("Please login first");
}

if (isset($_POST['id'])) {

    $id = $_POST['id'];

    // first get file path from database
    $query = "SELECT filepath FROM files WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row) {

        $filepath = $row['filepath'];

        // delete file from folder
        if (file_exists($filepath)) {
            unlink($filepath);
        }

        // delete from database
        $sql = "DELETE FROM files WHERE id = '$id'";
        mysqli_query($conn, $sql);

        header("Location: display.php?msg=File deleted successfully");
        exit();

    } else {
        header("Location: display.php?msg=File not found");
        exit();
    }

} else {
    header("Location: display.php");
    exit();
}
?>