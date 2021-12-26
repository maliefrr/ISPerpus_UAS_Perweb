<?php 
    include "connection.php";
    $judul = $_POST['judul_buku'];
    $pengarang = $_POST['nama_pengarang'];
    $penerbit = $_POST['nama_penerbit'];
    $tahun = $_POST['tahun_terbit'];
    $db->query("INSERT INTO buku (judul_buku,nama_pengarang,nama_penerbit,tahun_terbit) VALUES ('$judul','$pengarang','$penerbit','$tahun')");
    header("Location:../buku.php");
?>