<?php
include '../config/connection.php';

$hapus = "DELETE FROM tugas WHERE id_tugas='$_GET[id]'";
mysqli_query($con, $hapus);

header('location: index.php?page=tugas');
?>