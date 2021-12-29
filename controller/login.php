<?php
    include "connection.php";
    $username = $_GET['username'];
    $password = $_GET['password'];

    if($username == 'admin' && $password == 'admin'){
        header("Location:../dashboard_admin.php");
    } else {
        header("Location:../history.php?id=$username");
    }
?>