<?php
    include "connection.php";
    $username = $_GET['username'];
    $password = $_GET['password'];

    if($username == 'admin' && $password == 'admin'){
        header("Location:../mahasiswa.php");
    } else {
        header("Location:../pinjam.php");
    }
?>