<?php
include '../config/connection.php';




$allowed_tug    = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf');
$tugas_name     = rand(1000,100000).'-'.$_FILES['fjawab']['name'];
$tugas_ext      = strtolower(end(explode('.', $tugas_name)));
$tugas_size     = $_FILES['fjawab']['size'];
$tugas_tmp      = $_FILES['fjawab']['tmp_name'];




$new_tugas_name = strtolower($tugas_name);
$final_tugas     = str_replace(' ','-',$new_tugas_name);



$idmateri       = $_POST['idmateri'];
$dsiswa         = $_SESSION['userid'];
$tema           = $_POST['tema'];
//$tgl		= date("Y-m-d");
//$nama_tugas     = $_POST['nama_tugas'];
//$nama_video     = $_POST['nama_video'];

if( in_array($tugas_ext, $allowed_tug) === true ){
    if(  ($tugas_size < 6000000)   ){
        
        $lokasi_t = '../../files/jawaban/'.$final_tugas;
        move_uploaded_file($tugas_tmp, $lokasi_t);
       
        $query  = "INSERT INTO jawaban VALUES('null','$idmateri','$tema','$final_tugas','$dsiswa')";
        $input  = mysqli_query($con, $query);
        
        if($input){
            echo '<script language="javascript">alert("Success"); document.location="index.php?page=belajar";</script>';
            exit();
        }
        else{
            echo '<script language="javascript">alert("Failed!"); document.location="index.php?page=belajar";</script>';
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