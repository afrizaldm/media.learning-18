<?php
include '../config/connection.php';

$gettugas ="SELECT file_tugas FROM tugas WHERE id_tugas = '$_GET[id]'";
$file_tugas = mysqli_query($con, $gettugas);

if($file_tugas)
{
    
    $rows = mysqli_fetch_array($file_tugas);
    $hapus = "DELETE FROM tugas WHERE id_tugas='$_GET[id]'";
    $status = mysqli_query($con, $hapus);
    $file = '../../files/tugas/'.$rows[0];
    if($hapus)
    {
        if (file_exists($file)) {
            unlink($file);
        } else {
            // File not found.
        }
    }
}

header('location: index.php?page=tugas');
?>