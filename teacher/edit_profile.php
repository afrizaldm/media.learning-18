<?php
    include '../config/connection.php';
    $ids         = $_SESSION['ids'];    
    $username    = $_POST['username'];
    $fname       = $_POST['ndepan'];
    $lname       = $_POST['nbelakang'];
    $alamat      = $_POST['alamat'];
    $email       = $_POST['email'];
    
    $edit   = "UPDATE users SET first_name='$fname', last_name='$lname', alamat='$alamat', email='$email', username='$username' "
            . "WHERE id_user='$ids'";
    $hasil  = mysqli_query($con, $edit);

    if($hasil){
        echo '<script language="javascript">alert("Success"); document.location="index.php?page=profile";</script>';
        exit();
    }

    else{
        echo '<script language="javascript">alert("Failed!"); document.location="index.php?page=edit-profile";</script>';
    }
?>