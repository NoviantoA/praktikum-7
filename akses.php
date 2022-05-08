<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akses Ke Database</title>
</head>

<body>

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

$sql = "SELECT  kode, negara, champion FROM liga";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    // output data
    while($row = mysqli_fetch_assoc($result)){
        echo "Kode : ". $row["kode"]. "-Negara : " .$row["negara"]. "" .$row["champion"]. "<br>";
    }
}else {
    echo "0 result";
}

mysqli_close($conn);
?>

</body>

</html>