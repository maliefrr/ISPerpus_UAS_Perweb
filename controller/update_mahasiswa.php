<?php 
    include "connection.php";
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $db->query("UPDATE mahasiswa SET nama='$nama',nim='$nim' WHERE id_mahasiswa='$id'");
    header("Location:../mahasiswa.php");
?>