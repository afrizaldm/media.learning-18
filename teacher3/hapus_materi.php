<?php
include '../config/connection.php';


$gettugas ="SELECT file_materi, file_tugas, file_video FROM media WHERE id_materi = '$_GET[id]'";
$file = mysqli_query($con, $gettugas);

if($file)
{
    
    $rows = mysqli_fetch_array($file);
    $file_materi = '../../files/materi/'.$rows["file_materi"];
    $file_tugas = '../../files/tugas/'.$rows["file_tugas"];
    $file_video = '../../files/video/'.$rows["file_video"];

    $hapus = "DELETE FROM media WHERE id_materi='$_GET[id]'";
    $status = mysqli_query($con, $hapus);
    if($status)
    {
        if (file_exists($file_materi)) {
            unlink($file_materi);
        } else {
            // File not found.
        }

        if (file_exists($file_tugas)) {
            unlink($file_tugas);
        } else {
            // File not found.
        }

        if (file_exists($file_video)) {
            unlink($file_video);
        } else {
            // File not found.
        }
    }

    // echo $file_materi."<br>".$file_tugas."<br>".$file_video;
}

header('location: index.php?page=belajar');
?>