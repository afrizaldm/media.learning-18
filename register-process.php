<title>Reirecting...</title>
<?php
session_start();
include './config/connection.php';
$userid     = $_POST['nis'];
$username   = $_POST['usernm'];
$password   = md5($_POST['passwd']);
$address    = $_POST['address'];
$first_name = $_POST['firstname'];
$last_name  = $_POST['lastname'];
$email      = $_POST['email'];

// Cek Username dan Email di database
$cek1   = "SELECT username FROM users WHERE username='$_POST[usernm]'";
$ch1    = mysqli_query($con, $cek1);
$cek_username = mysqli_num_rows($ch1);

$cek2   = "SELECT email FROM users WHERE email='$_POST[email]'";
$ch2    = mysqli_query($con, $cek2);
$cek_email = mysqli_num_rows($ch2);

// Kalau username sudah ada yang pakai
if ($cek_username > 0){
    echo '<script language="javascript">alert("Username Sudah Dipakai!"); document.location="index.php";</script>';
}
else if ($cek_email > 0){
    echo '<script language="javascript">alert("Email Sudah Dipakai!"); document.location="index.php";</script>';
}
else if(strlen($username)<6){
    echo '<script language="javascript">alert("Username Min 6 Karakter!"); document.location="index.php";</script>';
}

// Kalau username valid, inputkan data ke tabel users
else{
    $query  = "INSERT INTO users(userid, first_name, last_name, alamat, email, username, password)"
        . "VALUES('$userid', '$first_name', '$last_name', '$address', '$email', '$username', '$password')";
    $input  = mysqli_query($con, $query);

    if($input){
        echo '<script language="javascript">alert("Success"); document.location="index.php";</script>';
        exit();
    }
    else{
        echo '<script language="javascript">alert("Failed!"); document.location="index.php";</script>';
    }
}

?>
