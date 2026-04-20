<?php
include "db.php";

$result = mysqli_query($conn,"SELECT * FROM files");
?>

<!DOCTYPE html>
<html>
<head>
<title>Uploaded Files</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background-color: #f4f6f9;
}
</style>

</head>

<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">📂 Uploaded Files</h2>

    <div class="card shadow p-4">

        <table class="table table-bordered table-hover text-center">

            <thead class="table-dark">
                <tr>
                    <th>File Name</th>
                    <th>Preview</th>
                    <th>Download</th>
                </tr>
            </thead>

            <tbody>

            <?php
            while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['filename']; ?></td>

                <td>
                    <a href="<?php echo $row['filepath']; ?>" target="_blank" class="btn btn-info btn-sm">
                        Preview
                    </a>
                </td>

                <td>
                    <a href="<?php echo $row['filepath']; ?>" download class="btn btn-primary btn-sm">
                        Download
                    </a>
                </td>
            </tr>
            <?php } ?>

            </tbody>

        </table>

        <!-- Back Button -->
        <div class="text-center mt-3">
            <a href="index.php" class="btn btn-secondary">⬅ Back to Home</a>
        </div>

    </div>

</div>

</body>
</html>