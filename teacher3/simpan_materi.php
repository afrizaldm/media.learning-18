<?php
include '../config/connection.php';



$allowed_ext    = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
$file_name	= rand(1000,100000).'-'.$_FILES['fmateri']['name'];
$file_ext	= strtolower(end(explode('.', $file_name)));
$file_size	= $_FILES['fmateri']['size'];
$file_tmp	= $_FILES['fmateri']['tmp_name'];

$allowed_tug    = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf');
$tugas_name     = rand(1000,100000).'-'.$_FILES['ftugas']['name'];
$tugas_ext      = strtolower(end(explode('.', $tugas_name)));
$tugas_size     = $_FILES['ftugas']['size'];
$tugas_tmp      = $_FILES['ftugas']['tmp_name'];

$allowed_vid    = array('mp4','mpg','avi');
$video_name     = rand(1000,100000).'-'.$_FILES['fvideo']['name'];
$video_type     = $_FILES['fvideo']['type'];
$video_ext      = strtolower(end(explode('.', $video_name)));
$video_size     = $_FILES['fvideo']['size'];
$video_tmp      = $_FILES['fvideo']['tmp_name'];


$new_file_name  = strtolower($file_name);
$final_file     = str_replace(' ','-',$new_file_name);
$new_tugas_name = strtolower($tugas_name);
$final_tugas     = str_replace(' ','-',$new_tugas_name);
$new_video_name = strtolower($video_name);
$final_video     = str_replace(' ','-',$new_video_name);

$id             = $_POST['itemid'];
$nama           = $_POST['materi'];
$materi         = $_POST['description'];
$dguru          = $_POST['idguru'];
$tema           = $_POST['tema'];
//$tgl		= date("Y-m-d");
//$nama_tugas     = $_POST['nama_tugas'];
//$nama_video     = $_POST['nama_video'];

if( (in_array($file_ext, $allowed_ext) === true) || (in_array($tugas_ext, $allowed_tug) === true) || (in_array($video_ext, $allowed_vid) === true) ){
    if( ($video_type == "video/mp4") || ($file_size < 6000000) || ($tugas_size < 6000000) || ($video_size < 60000000)  ){
        
        $lokasi = '../../files/materi/'.$final_file;
        move_uploaded_file($file_tmp, $lokasi);
        
        $lokasi_t = '../../files/tugas/'.$final_tugas;
        move_uploaded_file($tugas_tmp, $lokasi_t);
       
        $lokasi_v = '../../files/video/'.$final_video;
        move_uploaded_file($video_tmp, $lokasi_v);
        
        $query  = "INSERT INTO media VALUES('null','$dguru','$tema','$nama','$materi','$final_file','$final_tugas','$final_video', 'NOT ACTIVE')";
        $input  = mysqli_query($con, $query);
        
        if($input){
            echo '<script language="javascript">alert("Success"); document.location="index.php?page=belajar";</script>';
            exit();
        }
        else{
            echo '<script language="javascript">alert("Failed!"); document.location="index.php?page=add-materi";</script>';
            echo $final_file;
        }
    }
    else{
        echo '<script language="javascript">alert("Ukuran File Terlalu Besar!"); document.location="index.php?page=add-materi";</script>';
    }
}
else{
    echo '<script language="javascript">alert("Terjadi Kesalahan Pada Format File! MP4 untuk format video."); document.location="index.php?page=add-materi";</script>';
}



?>