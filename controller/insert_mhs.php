<?php 
    include "connection.php";
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $db->query("INSERT INTO mahasiswa (nama,nim) VALUES ('$nama','$nim')");
    header("Location:../mahasiswa.php");
?>