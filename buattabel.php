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
$sql = "CREATE TABLE liga (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    kode VARCHAR(3) NOT NULL,
    negara VARCHAR(30) NOT NULL,
    champion int(3))";

    if(mysqli_query($conn, $sql)){
        echo "Tabel Berhasil Dibuat";
    }else{
        echo "Error Membuat Tabel" . $sql. "<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);
?>