<?php

require 'functions.php';

// $result = mysqli_query($conn, "SELECT * FROM tb_mahasiswa");

$rows = query ("SELECT * FROM tb_mahasiswa");
// if(!($result)==1) {
//     echo mysqli_error($conn);
// }

// $mahasiswa = mysqli_fetch_assoc($result);
// var_dump($mahasiswa);

// echo $mahasiswa['nim'];
// echo $mahasiswa['nama'];

// while ($mahasiswa = mysqli_fetch_assoc($result)):
//     echo $mahasiswa["nama"];
//     echo "<br>";
//     echo $mahasiswa["email"];
//     echo "<br>";
// endwhile

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a href="tambah.php">Tambah Data</a>
    <br>
    <br>
    <table border="1" cellpadding=10 cellspacing=0>
        <thead>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Aksi</th>
        </thead>
        <tbody>
        <?php foreach($rows as $row): ?>
            <tr>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["nim"] ?></td>
                <td><?php echo $row["nama"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td><?php echo $row["jurusan"] ?></td>
                <td>
                    <a href="">Ubah |</a>
                    <a href="hapus.php? id= <?php echo $row["id"] ?>" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
            <!-- <tr>
                <td>2</td>
                <td>002</td>
                <td>Ferdian Priambodho</td>
                <td>fpio@gmail.com</td>
                <td>Teknik Informatika</td>
            </tr>
            <tr>
                <td>3</td>
                <td>003</td>
                <td>Farid Zaki Adhiwangsa</td>
                <td>fzaki@gmail.com</td>
                <td>Teknik Nuklir</td>
            </tr> -->
        </tbody>
    </table>
</body>
</html>