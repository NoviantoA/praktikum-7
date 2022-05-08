<?php
$servername = "localhost";
$username = "root";
$password = "";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password);

// check koneksi
if(!$conn){
    die("Koneksi Gagal : " . mysqli_connect_error());
}
// membuat database
$sql = "CREATE DATABASE Praktikum7";
if(mysqli_query($conn, $sql)){
    echo "Database Berhasil Dibuat";
}else {
    echo "Error Membuat Database" . mysqli_connect_error($conn);
}
mysqli_close($conn);
?>