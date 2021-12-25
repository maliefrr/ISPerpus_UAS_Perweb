<?php 
    include "connection.php";
    $id = $_GET['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $db->query("DELETE FROM mahasiswa WHERE id_mahasiswa='$id'");
    header("Location:../mahasiswa.php");
?>