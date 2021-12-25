<?php 
    include "connection.php";
    $id = $_GET['id'];
    $db->query("DELETE FROM mahasiswa WHERE id_mahasiswa='$id'");
    header("Location:../mahasiswa.php");
?>