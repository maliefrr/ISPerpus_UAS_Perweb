<?php 
    include "connection.php";
    $id = $_GET['id'];
    $db->query("DELETE FROM buku WHERE id_buku='$id'");
    header("Location:../buku.php");
?>