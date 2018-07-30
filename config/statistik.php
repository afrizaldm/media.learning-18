
    
<?php
include 'connection.php';

$ip      = $_SERVER['REMOTE_ADDR']; // Dapatkan IP user
$tanggal = date("Ymd"); // Dapatkan tanggal sekarang
$waktu   = time(); // Dapatkan nilai waktu

// Cek user yang mengakses berdasarkan IP-nya 
$s = mysqli_query($con, "SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'");

// Kalau belum ada, simpan datanya sebagai user baru
if(mysqli_num_rows($s) == 0){
    mysqli_query($con, "INSERT INTO statistik(ip, tanggal, hits, online) VALUES('$ip', '$tanggal', '1', '$waktu')");
}
// Kalau sudah ada, update data hits user  
else{
    mysqli_query($con, "UPDATE statistik SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
}

//jumlah pengunjung hari ini
$query1     = mysqli_query($con, "SELECT * FROM statistik WHERE tanggal='$tanggal' GROUP BY ip");
$pengunjung = mysqli_num_rows($query1);

//total jumlah pengunjung yang pernah mengakses
$query2        = mysqli_query($con, "SELECT COUNT(hits) as total FROM statistik");
$hasil2        = mysqli_fetch_array($query2);
$totpengunjung = $hasil2['total'];

//jumlah hits
$query3 = mysqli_query($con, "SELECT SUM(hits) as jumlah FROM statistik WHERE tanggal='$tanggal' GROUP BY tanggal");
$hasil3 = mysqli_fetch_array($query3);
$hits   = $hasil3['jumlah'];

//total hits
$query4  = mysqli_query($con, "SELECT SUM(hits) as total FROM statistik");
$hasil4  = mysqli_fetch_array($query4);
$tothits = $hasil4['total'];

//cek berapa pengunjung yang sedang mengakses web ini
$bataswaktu       = time() - 300; 
$pengunjungonline = mysqli_num_rows(mysqli_query($con, "SELECT * FROM statistik WHERE online > '$bataswaktu'"));

//ubah digit angka menjadi enam digit
$totpengunjunggbr = sprintf("%06d", $totpengunjung);

?>