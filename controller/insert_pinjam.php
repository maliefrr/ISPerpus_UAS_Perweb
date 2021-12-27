<?php 
    include "connection.php";
    $judul = $_POST['judul'];
    $nama = $_POST['nama'];
    $pinjam = $_POST['tanggal_peminjaman'];
    $db->query("INSERT INTO transaksi (id_buku,id_mahasiswa,tanggal_peminjaman,tanggal_pengembalian) VALUES ('$judul','$nama','$pinjam','')");
    header("Location:../transaksi.php");
?>