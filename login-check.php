<title>Connecting...</title>
<?php
    session_start();
    include './config/connection.php';
    
    if(!isset($_POST['userid'])){
        header('location: index.php');
        exit();
    }
    
    $username   = $_POST['userid'];
    $password   = md5($_POST['passwd']);
    //$password   = $_POST['passwd'];
    
    $error  = '';
    
    $query  = "SELECT * FROM users WHERE (username='$username' AND password='$password')";
    $login  = mysqli_query($con, $query);
    $ketemu = mysqli_num_rows($login);
    $data   = mysqli_fetch_array($login);

    if($ketemu > 0){
        //session_start();
        $_SESSION['ids']    = $data['id_user'];
        $_SESSION['userid'] = $data['userid'];
        $_SESSION['user']   = $data['username'];
        $_SESSION['pass']   = $data['password'];
        $_SESSION['nama1']  = $data['first_name'];
        $_SESSION['nama2']  = $data['last_name'];
        $_SESSION['email']  = $data['email'];
        $_SESSION['akses']  = $data['level'];

        if ($data['level'] == 'teacher'){
            // $_SESSION['teacher'] = $username;
            // echo '<script language="javascript">alert("Login as Teacher"); document.location="teacher/index.php";</script>';
            // exit();
        }
        else if($data['level'] == 'teacher3'){
            // $_SESSION['teacher3'] = $username;
            // echo '<script language="javascript">alert("Login as Teacher Tetra"); document.location="teacher3/index.php";</script>';
            // exit();
        }
        else {
            // $_SESSION['student'] = $username;
            // echo '<script language="javascript">alert("Login as Student"); document.location="student/index.php";</script>';
        }
    }
    else{
        // echo '<script language="javascript">alert("Username/E-mail dan Password tidak ditemukan!"); '
        // . 'document.location="./index.php";</script>';
    }

    if(!empty($error)){
        // $_SESSION['error'] = $error;
        // header('location: index.php');
        // exit();
    }
    
?>