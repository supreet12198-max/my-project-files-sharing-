<?php
include "db.php";
session_start();

if (!isset($_SESSION['username'])) {
    die("Please login first");
}

$result = mysqli_query($conn, "SELECT * FROM files ORDER BY id DESC");

if(!$result){
    die("Query Failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Uploaded Files</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: #f4f6f9;
    font-family: Arial;
}

.box{
    margin-top: 40px;
    background: white;
    padding: 20px;
    border-radius: 10px;
}

.file{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 12px;
    border-bottom: 1px solid #ddd;
}

.file:last-child{
    border-bottom: none;
}

.icon{
    font-size: 28px;
}

.name{
    flex: 1;
    margin-left: 15px;
    word-break: break-all;
}

.btns a, .btns button{
    margin-left: 5px;
}
</style>

</head>

<body>

<div class="container">

<h3 class="text-center mt-4">📁 Uploaded Files</h3>

<div class="box">

<?php if(mysqli_num_rows($result) > 0){ ?>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<?php
$fileName = htmlspecialchars($row['filename']);
$filePath = htmlspecialchars($row['filepath']);

// 🔥 IMPORTANT FIX: ensure correct relative path
if(!file_exists($filePath)){
    $filePath = "uploads/" . $fileName;
}
?>

<div class="file">

    <div class="icon">📄</div>

    <div class="name"><?php echo $fileName; ?></div>

    <div class="btns">

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
            onclick="return confirm('Delete file?')">
            Delete
            </button>
        </form>

        <!-- SHARE -->
        <button class="btn btn-info btn-sm"
        onclick="copyLink('<?php echo $filePath; ?>')">
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

<script>
function copyLink(link){
    navigator.clipboard.writeText(link)
    .then(() => alert("Link copied"))
    .catch(() => alert("Copy failed"));
}
</script>

</body>
</html>