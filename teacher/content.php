<title>Connecting...</title>

<?php
include '../config/connection.php';

if (isset($_SESSION['teacher'])){
    if($_SESSION['akses']!="teacher"){
    echo "<script>alert('Retricted Area! Teacher Only');window.location=('../index.php');</script>";
    }
}
if(isset($_GET['page'])){
    $page = $_GET['page'];
    $aksi = $_GET['aksi'];

    switch ($page) {
        case 'dashboard':
            include "module/dashboard/dashboard.php";
            break;
        
        //Materi
        case 'belajar':
            include "module/belajar/belajar.php";
            break;
        case 'add-materi':
            include "module/belajar/tambah-materi.php";
            break;
        case 'edit-materi':
            include "module/belajar/edit-materi.php";
            break;
        
        case 'diskusi':
            include "module/diskusi/diskusi.php";
            break;
        
        //Tugas
        case 'tugas':
            include "module/tugas/tugas.php";
            break;
        case 'add-tugas':
            include "module/tugas/tambah-tugas.php";
            break;
        case 'edit-tugas':
            include "module/belajar/edit-tugas.php";
            break;
        
        //Data Siswa
        case 'data-siswa':
            include "module/datasiswa/data-siswa.php";
            break;
        case 'add-siswa':
            include "module/datasiswa/tambah-siswa.php";
            break;
        case 'edit-siswa':
            include "module/datasiswa/edit-siswa.php";
            break;

        //Inbox
        case 'inbox':
            include "module/inbox/kotak-masuk.php";
            break;
        
        //User
        case 'profile':
            include "module/profile/profile.php";
            break;
        case 'edit-profile':
            include "module/profile/edit-profile.php";
            break;
        
        case 'setting':
            include "module/setting/setting.php";
            break;
        
        default:
            echo "<div class='text-center'><br><h3>Maaf. Halaman tidak di temukan !</h3></div>";
            break;
    }
}else{
    include "module/dashboard/dashboard.php";
}

?>