<?php
session_start();

if(!isset($_SESSION['teacher3'])){
    echo '<script language="javascript">alert("Teacher Area"); document.location="../index.php";</script>';
}

if (isset($_SESSION['teacher3'])){
    if($_SESSION['akses']!="teacher3"){
    echo "<script>alert('Retricted Area! Teacher Only');window.location=('../index.php');</script>";
    }
}