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
            include "module/materi/tambah-materi.php";
            break;
        case 'guru1':
            include "module/belajar/guru1.php";
            break;
        case 'guru2':
            include "module/belajar/guru2.php";
            break;
        case 'guru3':
            include "module/belajar/guru3.php";
            break;
        case 'guru3-1':
            include "module/belajar/guru3-1.php";
            break;
        case 'materi-info':
            include "module/belajar/materi-info.php";
            break;
        case 'add-materi':
            include "module/materi/tambah-materi.php";
            break;
        case 'info':
            include "module/belajar/materi-info.php";
            break;
            
            
		//Pencarian
		case 'pg1':
            include "module/belajar/pencarian-guru1.php";
            break;
		case 'pg2':
            include "module/belajar/pencarian-guru2.php";
            break;
		case 'pg3':
            include "module/belajar/pencarian-guru3.php";
            break;
		case 'pg3-1':
            include "module/belajar/pencarian-guru3-1.php";
            break;

        case 'diskusi':
            include "module/diskusi/diskusi.php";
            break;
        
        //Tugas
        case 'tugas':
            include "module/tugas/tugas.php";
            break;
        case 'tugas-guru1':
            include "module/tugas/tugas-guru1.php";
            break;
        case 'tugas-guru2':
            include "module/tugas/tugas-guru2.php";
            break;
        case 'tugas-guru3':
            include "module/tugas/tugas-guru3.php";
            break;
        case 'tugas-guru3-1':
            include "module/tugas/tugas-guru3-1.php";
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