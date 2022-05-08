<?php
    include 'koneksi.php';
    $id_pegawai = $_POST['id_pegawai'];
    $Nama = $_POST['Nama'];
    $ttl = $_POST['ttl'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    echo $id_pegawai,$Nama,$ttl,$jk,$alamat;
    mysqli_query($conn, "UPDATE pegawai SET Nama='$Nama',ttl='$ttl',jk='$jk',
    alamat='$alamat' WHERE id_pegawai = $id_pegawai");
    header("location:home.php");
?>