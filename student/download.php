<?php
//Tentukan folder file yang boleh di download
$folder = "../../files/";
//Lalu cek menggunakan fungsi file_exist
if (!file_exists($folder.$_GET['file'])){
    echo "<h1>Access Forbidden!</h1>"
    . "<p>File Telah Hilang atau Rusak</p>";
    exit;
}
//Apabila mendownload file di folder files,
//Jalankan fungsi force header download
else{
    header("Content-Type: octet/stream");
    header("Content-Disposition: attachment; filename=\"".$_GET['file']."\"");
    $fp = fopen($folder.$_GET['file'], "r");
    $data = fread($fp, filesize($folder.$_GET['file']));
    fclose($fp);
    print $data;
    header("location: index.php?page=belajar");
}
?>
