<?php
    include 'koneksi.php';
    $id_pegawai = $_GET['id_pegawai']; 
    mysqli_query($conn, "DELETE FROM pegawai WHERE id_pegawai = $id_pegawai");
    header("location:home.php");
?>