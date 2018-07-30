<title>Redirecting...</title>
<?php
include '../config/connection.php';
$id = $_SESSION['ids'];

$password_lama  = md5($_POST['password_lama']);
$password_baru  = md5($_POST['password_baru']);
$konf_password  = $_POST['konf_password'];

//cek old password
$query1  = "SELECT * FROM users WHERE id_user='$id' AND password='$password_lama'";
$detail  = mysqli_query($con, $query1);
$hasil1  = mysqli_num_rows($detail);

if(!$hasil1 >= 1){
    echo '<script language="javascript">alert("Password Lama Tidak Sesuai!"); document.location="index.php?page=setting";</script>';
}
else if (($_POST['password_baru']) != ($_POST['konf_password'])) {
    echo '<script language="javascript">alert("Konfirmasi Password Tidak Sama!"); document.location="index.php?page=setting";</script>';
}
else{
    $query2  = "UPDATE users SET password='$password_baru' WHERE id_user='$id'";
    $sql2    = mysqli_query($con, $query2);

    if ($sql2) {
        echo '<script language="javascript">alert("Berhasil Memperbarui Password"); document.location="index.php?page=dashboard";</script>';
    } else {
        echo '<script language="javascript">alert("Gagal Memperbarui Password"); document.location="index.php?page=setting";</script>';
    }
}

?>