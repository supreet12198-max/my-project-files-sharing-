<?php
include "db.php";
session_start();

if (!isset($_SESSION['username'])) {
    die("Please login first");
}

$result = mysqli_query($conn, "SELECT * FROM files ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Uploaded Files</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: #f1f5f9;
    font-family: Arial;
}

.card-box{
    margin-top: 30px;
    padding: 20px;
    border-radius: 10px;
    background: white;
    box-shadow: 0px 3px 10px rgba(0,0,0,0.1);
}

.preview-img{
    width: 70px;
    height: 70px;
    object-fit: cover;
    border-radius: 10px;
}

.file-box{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
    border-bottom: 1px solid #eee;
}

.file-box:last-child{
    border-bottom: none;
}
</style>

</head>

<body>

<div class="container">

<h2 class="text-center mt-4">📁 Uploaded Files</h2>

<div class="card-box">

<?php if(mysqli_num_rows($result) > 0){ ?>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<?php
$fileName = htmlspecialchars($row['filename']);
$filePath = htmlspecialchars($row['filepath']);
?>

<div class="file-box">

    <!-- Preview -->
    <div>
        <img src="<?php echo $filePath; ?>" class="preview-img">
    </div>

    <!-- File Name -->
    <div>
        <strong><?php echo $fileName; ?></strong>
    </div>

    <!-- Buttons -->
    <div>

        <!-- VIEW -->
        <a href="<?php echo $filePath; ?>" target="_blank" class="btn btn-primary btn-sm">
            View
        </a>

        <!-- DOWNLOAD -->
        <a href="<?php echo $filePath; ?>" download class="btn btn-success btn-sm">
            Download
        </a>

        <!-- DELETE -->
        <form action="delete.php" method="POST" style="display:inline;">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <button class="btn btn-danger btn-sm"
                onclick="return confirm('Are you sure you want to delete this file?')">
                Delete
            </button>
        </form>

        <!-- SHARE -->
        <button class="btn btn-info btn-sm"
            onclick="shareLink('<?php echo $filePath; ?>')">
            Share
        </button>

    </div>

</div>

<?php } ?>

<?php } else { ?>

<p class="text-center text-muted">No files uploaded</p>

<?php } ?>

</div>

</div>

<!-- Share Script -->
<script>
function shareLink(link){
    let fullLink = window.location.origin + "/first_project/" + link;
    prompt("Copy this link and share:", fullLink);
}
</script>

</body>
</html>
