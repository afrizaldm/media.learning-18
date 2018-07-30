<?php
session_start();

if(!isset($_SESSION['teacher'])){
    echo '<script language="javascript">alert("Teacher Area"); document.location="../index.php";</script>';
}

if (isset($_SESSION['teacher'])){
    if($_SESSION['akses']!="teacher"){
    echo "<script>alert('Retricted Area! Teacher Only');window.location=('../index.php');</script>";
    }
}