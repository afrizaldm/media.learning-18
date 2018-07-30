<title>Redirecting...</title>
<?php
include '../config/connection.php';
$id = $_POST['id'];

$password_baru  = md5($_POST['password_baru']);
$konf_password  = $_POST['konf_password'];

if (($_POST['password_baru']) != ($_POST['konf_password'])) {
    echo '<script language="javascript">alert("Konfirmasi Password Tidak Sama!"); document.location="index.php?page=data-siswa";</script>';
}
else{
    $query2  = "UPDATE users SET password='$password_baru' WHERE id_user='$id'";
    $sql2    = mysqli_query($con, $query2);

    if ($sql2) {
        echo '<script language="javascript">alert("Berhasil Memperbarui Password"); document.location="index.php?page=data-siswa";</script>';
    } else {
        echo '<script language="javascript">alert("Gagal Memperbarui Password"); document.location="index.php?page=data-siswa";</script>';
    }
}

?>