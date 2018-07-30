<?php
error_reporting(0);
session_start();
ob_start();

date_default_timezone_set('Asia/Jakarta');

$con = mysqli_connect('localhost', 'root', '', 'medilearn');
//$con = mysqli_connect('mysql.hostinger.co.id', 'u967199008_root', 'learning@18', 'u967199008_tudet');

// //koneksi mysql biasa
// mysql_connect("localhost", "root", "");
// mysql_select_db("medilearn");
// if ($con->connect_error) {
//     die("Connection failed: " . $con->connect_error);
// }

?>
