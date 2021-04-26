<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_kampus');

if(isset($_POST["submit"])) {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    
    // echo $nim;
    // echo $nama;
    // echo $email;
    // echo $jurusan;

    $query = "INSERT INTO tb_mahasiswa VALUES ('', '$nim', '$nama', '$email', '$jurusan')";
    mysqli_query($conn, $query);
}

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
        <h1>Form Tambah Data Mahasiswa</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="nim" id="nim"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id="email"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="jurusan" id="jurusan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="submit">Simpan</button></td>
                </tr>
            </table>
        </form>
    </body>