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
$sql = "INSERT INTO liga(kode, negara, champion)
VALUES ('jer', 'jerman', '4')";

    if(mysqli_query($conn, $sql)){
        echo "Tabel Berhasil Dibuat";
    }else{
        echo "Error Membuat Tabel" . $sql. "<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);
?>