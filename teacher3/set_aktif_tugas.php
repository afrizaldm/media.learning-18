<?php
include '../config/connection.php';
$status = "ACTIVE";
if($_GET["status"] == 1)
{
    $status = "NON ACTIVE";
}
$update_status = "UPDATE tugas SET status='$status' WHERE id_tugas='$_GET[id]'";
mysqli_query($con, $update_status);

header('location: index.php?page=tugas');
?>