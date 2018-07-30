<?php
include '../config/connection.php';

$hapus = "DELETE FROM media WHERE id_materi='$_GET[id]'";
mysqli_query($con, $hapus);

header('location: index.php?page=belajar');
?>