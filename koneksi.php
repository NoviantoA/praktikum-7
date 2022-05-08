<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Database MySql</title>
</head>

<body>

    <h1>Demo Koneksi Database MySQL</h1>
    <?php
    $con = mysqli_connect("localhost","root", "", "my_db");
    echo "Berhasil Terkoneksi ke MySQL";

    // check koneksi
    if(mysqli_connect_error()){
        echo "Gagal Untuk Terkoneksi ke MySQL" . mysqli_connect_error();
        exit();
    }
?>

</body>

</html>