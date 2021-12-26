<?php 
    include "connection.php";
    $id = $_POST['id_buku'];
    $judul = $_POST['judul_buku'];
    $pengarang = $_POST['nama_pengarang'];
    $penerbit = $_POST['nama_penerbit'];
    $tahun = $_POST['tahun_terbit'];
    $db->query("UPDATE buku SET judul_buku='$judul',nama_pengarang='$pengarang',nama_penerbit='$penerbit',tahun_terbit='$tahun' WHERE id_buku='$id'");
    header("Location:../buku.php");
?>