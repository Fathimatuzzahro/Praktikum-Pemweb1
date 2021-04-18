<?php

require 'functions.php';

// if(isset($_POST['submit'])) {
    
// }
$id = $_GET['id'];

$rows = query ("SELECT * FROM tb_mahasiswa WHERE id=$id");

if(isset($_POST["submit"])) {
    if(ubah($_POST)>0) {
        echo "
        <script>
            alert('Data Berhasil Diubah');
            document.location.href = 'index.php';
        </script>
        ";
        // echo "Data Berhasil Ditambahkan";
    } else {
        echo "
        <script>
            alert('Data Gagal Diubah');
            document.location.href = 'index.php';
        </script>
        ";
    }
};

// if(isset($_POST["submit"])) {
//     echo $_POST["nim"];
//     echo $_POST["nama"];
// }

// if(isset($_POST["submit"])) {
//     if(tambah($_POST)>0) {
//         echo "
//         <script>
//             alert('Data Berhasil Ditambahkan');
//             document.location.href = 'index.php';
//         </script>
//         ";
//         // echo "Data Berhasil Ditambahkan";
//     } else {
//         echo "
//         <script>
//             alert('Data Gagal Ditambahkan');
//             document.location.href = 'index.php';
//         </script>
//         ";
//     }
// }

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
        <h1>Form Ubah Data Mahasiswa</h1>
        <form action="" method="post">
        <?php foreach($rows as $row): ?>
            <table>
                <input type="hidden" name="id" id="id" value="<?php echo $row["id"] ?>">
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="nim" id="nim" value="<?php echo $row["nim"] ?>"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" id="nama" value="<?php echo $row["nama"] ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id="email" value="<?php echo $row["email"] ?>"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="jurusan" id="jurusan" value="<?php echo $row["jurusan"] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="submit">Simpan</button></td>
                </tr>
            </table>
        <?php endforeach; ?>
        </form>
    </body>
</html>