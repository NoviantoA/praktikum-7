<?php
    include 'koneksi.php';
    $id_pegawai = $_POST['id_pegawai'];
    $Nama = $_POST['Nama'];
    $ttl  = $_POST['ttl'];
    $jk = $_POST['jk'];
    $alamat  = $_POST['alamat'];
    mysqli_query($conn, "INSERT INTO pegawai VALUES('$id_pegawai','$Nama','$ttl','$jk','$alamat')");
    header("location:home.php");
?>