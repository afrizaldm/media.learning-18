<?php
include '../config/connection.php';
$status = "ACTIVE";
if($_GET["status"] == 1)
{
    $status = "NON ACTIVE";
}
$update_status = "UPDATE media SET status='$status' WHERE id_materi='$_GET[id]'";
mysqli_query($con, $update_status);

header('location: index.php?page=belajar');
?>