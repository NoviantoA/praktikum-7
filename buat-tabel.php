<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check koneksi
if(!$conn){
    die("Koneksi Gagal : " . mysqli_connect_error());
}
$sql = "CREATE TABLE buku_tamu (
    ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Nama VARCHAR(200) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    Isi TEXT(255))";

    if(mysqli_query($conn, $sql)){
        echo "Tabel Berhasil Dibuat";
    }else{
        echo "Error Membuat Tabel" . $sql. "<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);
?>