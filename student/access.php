<?php
session_start();

if(!isset($_SESSION['student'])){
    echo '<script language="javascript">alert("Please, Login First!"); document.location="../index.php";</script>';
}
