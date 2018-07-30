<?php
    include '../config/connection.php';
    
    //menangkap parameter yang dikirimkan dari detail.php
    $id          = $_POST['id'];
    
    $address    = $_POST['alamat'];
    $first_name = $_POST['fname'];
    $last_name  = $_POST['lname'];
    $email      = $_POST['email'];
    
    $edit = "UPDATE users SET first_name='$first_name', last_name='$last_name', alamat='$address', email='$email' "
            . "WHERE id_user='$id'";
    mysqli_query($con, $edit);

    if($edit){
        echo '<script language="javascript">alert("Success"); document.location="index.php?page=data-siswa";</script>';
        exit();
    }

    else{
        echo '<script language="javascript">alert("Failed!"); document.location="index.php?page=data-siswa";</script>';
    }
    
?>