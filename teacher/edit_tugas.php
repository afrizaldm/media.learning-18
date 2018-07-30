<?php
    include '../config/connection.php';

    //menangkap parameter yang dikirimkan dari detail.php
//    $id          = $_POST['id_item'];
    
$allowed_tug    = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf');
$tugas_name     = rand(1000,100000).'-'.$_FILES['ftugas']['name'];
$tugas_ext      = strtolower(end(explode('.', $tugas_name)));
$tugas_size     = $_FILES['ftugas']['size'];
$tugas_tmp      = $_FILES['ftugas']['tmp_name'];




$new_tugas_name = strtolower($tugas_name);
$final_tugas     = str_replace(' ','-',$new_tugas_name);

$id          = $_POST['id'];
$nama           = $_POST['tugas'];

$dguru          = $_POST['idguru'];
//$tgl		= date("Y-m-d");
//$nama_tugas     = $_POST['nama_tugas'];
//$nama_video     = $_POST['nama_video'];

if( in_array($tugas_ext, $allowed_tug) === true ){
    if(  ($tugas_size < 6000000)   ){
        
     
        
        $lokasi_t = '../files/tugas/'.$final_tugas;
        move_uploaded_file($tugas_tmp, $lokasi_t);
        
       
        $query  = "UPDATE tugas set nama_tugas='$nama',file_tugas='$final_tugas',userid='$dguru' where id_tugas='$id' ";
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
        echo "<div>'Error tingkat 1'</div>";
    }
}
else{
    echo "<div>'Error tingkat 2'</div>";
}

?>