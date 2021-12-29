<?php
    include "connection.php";
    $username = $_GET['username'];
    $password = $_GET['password'];

    $query = $db->query("SELECT * from mahasiswa where nim='$username'");
    if($username == 'admin' && $password == 'admin'){
        header("Location:../dashboard_admin.php");
    } elseif(mysqli_num_rows($query) == 0){
        echo "The email or password are incorrect <a href='../index.php'>go back</a>";
    } else {
        header("Location:../history.php?id=$username");
    }
?>

