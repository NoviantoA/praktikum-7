<!DOCTYPE html>
<html>

<head>
    <title>Update</title>
</head>
<style>
p {
    width: 350px;
}

thead {
    background-color: #cccddd;
}
</style>

<body>
    <h2>Update Kepegawaian</h2>
    <form action="proses_update.php" method="post">
        <?php
        $id_pegawai = $_GET['id_pegawai'];
        include "koneksi.php";        
        $query = mysqli_query($conn, "SELECT * FROM pegawai where id_pegawai = $id_pegawai");
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <table>
            <input type="hidden" name="id_pegawai" value="<?php echo $data['id_pegawai']; ?>">
            <tr>
                <td>Nama</td>
                <td><input type=" text" name="Nama" value="<?php echo $data['Nama']; ?>"></td>
            </tr>
            <tr>
                <td>Tempat Tanggal Lahir</td>
                <td><input type="text" name="ttl" value="<?php echo $data['ttl']; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jk" value="<?php echo $data['jk'];  ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Simpan"></td>
            </tr>
        </table>
        <?php } ?>
    </form>
</body>

</html>