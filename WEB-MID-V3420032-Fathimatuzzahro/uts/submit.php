<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $harga_mobil = (int) $_POST['harga'];    
            $uang_muka = (int) $_POST['uang'];
            $jangka_waktu = (int) $_POST['durasi'];
            $bunga = (int) $_POST['bunga'];
            // echo $uang_muka;
            // echo (;
            $harga_mobil -= $uang_muka;

            $angsuran_pokok_per_bulan = $harga_mobil / ($jangka_waktu * 12); //       
            $angsuran_bunga_per_bulan = $harga_mobil * $bunga / 100 /  12;         
            $angsuran_total_per_bulan = $angsuran_pokok_per_bulan + $angsuran_bunga_per_bulan;
            // echo  $harga_mobil / $jangka_waktu * 12 ;
            $sisa_pinjaman = $harga_mobil;
        }









        // $today = date("F j, Y, g:i a");
        // $nama = $_POST['nama'];
        // $ktp = $_POST['ktp'];
        // $tempat = $_POST['tempat'];
        // $tanggal = $_POST['tgl'];
        // $bulan = $_POST['bln'];
        // $tahun = $_POST['thn'];
        // $alamat = $_POST['alamat'];
        // $email = $_POST['email'];
        // $telp = $_POST['telp'];

        // $alasan = $_POST['alasan'];
        
        function hitung_kredit($harga, $waktu, $bunga, $uang) {
            $bunga_bulan = ($bunga/12)/100;
            $pembagi     = 1-(1/pow(1+$bunga_bulan,$waktu));
            $perbulan       = ($harga - $uang)/($pembagi/$bunga_bulan);
            return $perbulan;
        }

        function rupiah($angka) {
            $jadi     = "Rp ".number_format($angka,2,',','.');
            return $jadi;
        }


        // echo "Tanggal Transaksi : ".$today;
        // echo "<br />";
        // echo "Nama Pelanggan : " .$nama;
        // echo "<br />";
        // echo "No. KTP : " .$ktp;
        // echo "<br />";
        // echo "Tempat, Tanggal Lahir : " .$tempat. "," .$tanggal. " " .$bulan. " " .$tahun;
        // echo "<br />";
        // echo "Alamat : ".$alamat;
        // echo "<br />";
        // echo "Email : ".$email;
        // echo "<br />";
        // echo "No. Telepon : ".$telp;
        // echo "<br />";
        // echo "Harga Mobil : ".$harga;
        // echo "<br />";
        // echo "Uang Muka : ".$uang;
        // echo "<br />";
        // echo "Lama Angsuran (dalam tahun) : ".$waktu;
        // echo "<br />";
        // echo "Besar Bunga (%) :  ".$bunga;
        // echo "<br />";
        // echo "Besar Cicilan (perbulan) :  ".$perbulan;
        // echo "<br />";
        // echo "Alasan : ".$alasan;
        echo "<h2>Form Kredit Mobil Sukses</h2>";
        echo "<br />";
    ?>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Bulan</th>
                <th scope="col">Angsuran Bunga</th>
                <th scope="col">Angsuran Pokok</th>
                <th scope="col">Sisa Pinjaman</th>
                </tr>
            </thead>
            <tbody>
            <?php for($i = 1; $i <= $jangka_waktu * 12; $i++): ?>
                <tr>
                    <?php if ($uang_muka < $harga_mobil * 30 / 100 + $harga_mobil *  $bunga / 100): ?>
                        <td colspan="4">Uang muka minimal 30%</td>
                    <?php break;    endif ?>
                    <th scope="row"><?= $i ?> Bulan</th>
                    <td>Rp.<?= number_format($angsuran_bunga_per_bulan) ?></td>
                    <td>Rp.<?= number_format($angsuran_pokok_per_bulan) ?></td>
                    <td>Rp.<?= number_format($sisa_pinjaman -= $angsuran_pokok_per_bulan) ?></td>
                </tr>
            <?php endfor ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-success">Kembali</a>
    </div>
</body>
</html>