<!DOCTYPE html>
<html>

<head>
    <title>Program Sederhana Kepegawaian</title>
    <style>
    table,
    tr,
    td {
        border: 1px solid black;
    }

    thead {
        background-color: #cccddd;
    }

    h2 {
        text-align: center;
    }

    table {
        margin: auto;
    }

    a {
        text-decoration: none;
    }

    .btn-tambah {
        text-decoration: none;
        margin-top: 2rem;
        margin-left: 35rem;
    }
    </style>
</head>

<body>
    <h2>Daftar Pegawai</h2>
    <table>
        <thead>
            <tr>
                <td>ID Pegawai</td>
                <td>Nama</td>
                <td>Tempat Tanggal Lahir</td>
                <td>Jenis Kelamin</td>
                <td>Alamat</td>
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM pegawai');
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['Nama'] ?></td>
            <td><?php echo $data['ttl'] ?></td>
            <td><?php echo $data['jk'] ?></td>
            <td><?php echo $data['alamat'] ?></td>
            <td class="update"><a href="update.php?id_pegawai=<?php echo $data['id_pegawai']; ?>">Update |</a>
                <a href="delete.php?id_pegawai=<?php echo $data['id_pegawai']; ?>">| Hapus</a>
            </td>
        </tr>
        <?php 
    }
     ?>
    </table>
    <button class="btn-tambah"><a href="insert.php">Tambah Pegawai</a></button>
</body>

</html>