<?php
include '../config/connection.php';

$hapus = "DELETE FROM users WHERE id_user='$_GET[id]'";
mysqli_query($con, $hapus);

header('location: index.php?page=data-siswa');
?>