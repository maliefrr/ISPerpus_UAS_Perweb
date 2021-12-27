<?php 
    include "connection.php";
    $judul = $_POST['judul'];
    $nama = $_POST['nama'];
    $kembali = $_POST['tanggal_pengembalian'];
    $db->query("INSERT INTO transaksi (id_buku,id_mahasiswa,tanggal_pengembalian) VALUES ('$judul','$nama','$kembali')");
    header("Location:../transaksi.php");
?>