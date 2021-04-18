<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit</title>
</head>
<body>
    <?php
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tgl'];
        $bulan = $_POST['bln'];
        $tahun = $_POST['thn'];
        $status = $_POST['status'];
        $agama = $_POST['agama'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $telp = $_POST['telp'];
        $divisi = $_POST['divisi'];
        $alasan = $_POST['alasan'];
        echo "Pendaftaran Maganger LABKOM FMIPA UNS";
        echo "<br />";
        echo "Nama Lengkap : " .$nama;
        echo "<br />";
        echo "NIM : " .$nim;
        echo "<br />";
        echo "Tempat, Tanggal Lahir : " .$tempat. "," .$tanggal. " " .$bulan. " " .$tahun;
        echo "<br />";
        echo "Kewarganegaraan : ".$status;
        echo "<br />";
        echo "Agama : ".$agama;
        echo "<br />";
        echo "Alamat : ".$alamat;
        echo "<br />";
        echo "Email : ".$email;
        echo "<br />";
        echo "No. Telepon : ".$telp;
        echo "<br />";
        echo "Divisi :  ".$divisi;
        echo "<br />";
        echo "Alasan : ".$alasan;
    ?>
</body>
</html>