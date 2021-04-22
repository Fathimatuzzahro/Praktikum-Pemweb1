<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kredit Mobil Sukses</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script language="javascript">
        function show_hari() {
            //membuat variabel bertipe array untuk nama hari
            var NamaHari = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
            //membuat variabel bertipe array untuk nama bulan
            var NamaBulan = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
            var sekarang = new Date();
            var HariIni = NamaHari[sekarang.getDay()];
            var BulanIni = NamaBulan[sekarang.getMonth()];
            var TglSekarang = sekarang.getDate();
            var TahunIni = sekarang.getFullYear();
            document.write(HariIni + ", " + TglSekarang + " " + BulanIni + " " + TahunIni);
        }
    </script>   
</head>

<body>
    <section class="form" id="form">
        <div class="container mt-5 shadow rounded p-3">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="text-center font-weight-bold">Form Kredit Mobil Sukses</h2>
                    <hr>
                </div>
            </div>
            <div class="">
                <form method="POST" action="submit.php">
                    <!-- <div class="form-group">
                        <font color="blue">Hari Ini: </font>
                            <p>
                            <script>
                                show_hari();
                            </script>.</p>
                        <label for="nama">Nama Pelanggan</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Anda">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="nim">No. KTP</label>
                        <input type="text" name="ktp" id="ktp" class="form-control" placeholder="Masukkan Nomor KTP Anda">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="tempat">Tempat, Tanggal Lahir</label>
                        <input type="text" name="tempat" id="tempat" class="form-control" placeholder="Masukkan Tempat Lahir Anda">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="tgl">Tanggal</label>
                        <select name="tgl">
                            <option selected="selected">-- Pilih Tanggal --</option>
                            <?php
                                // for($a=1; $a<=31; $a+=1){
                                // echo"<option value=$a> $a </option>";
                                // }
                            ?>
                        </select>

                        <label for="bln">Bulan</label>
                        <select name="bln">
                            <option selected="selected">-- Pilih Bulan --</option>
                            <?php
                            // $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                            // $jlh_bln=count($bulan);
                            //     for($c=0; $c<$jlh_bln; $c+=1){
                            //     //echo"<option value=$bulan[$c]> $bulan[$c] </option>";
                            //     }
                            ?>
                        </select>

                        <label for="thn">Tahun</label>
                        <select name="thn">
                            <option selected="selected">-- Pilih Tahun --</option>
                            <?php
                            // $now=date('Y');
                            // for ($a=1996; $a<=$now; $a++) {
                            //     //  echo "<option value='$a'>$a</option>";
                            // }
                            //echo "</select>";
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" size="16" maxlength="20" class="form-control" placeholder="Masukkan Alamat Anda">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email Anda. Contoh : ayanokyouji@example.com">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="telp">No. Telepon</label>
                        <input type="tel" name="telp" id="telp" class="form-control" placeholder="Masukkan Nomor Telepon Anda">
                    </div>
                    <br> -->
                    <div class="form-group">
                        <label for="harga">Harga Mobil</label>
                        <input type="number" min="100000000" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga Mobil">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="uang">Uang Muka</label>
                        <input type="number" name="uang" id="uang" class="form-control" placeholder="Masukkan Uang Muka">
                    <br>
                    <!-- <div class="form-group">
                        <label for="agama">Uang Muka</label>
                        <input type="text" name="uang" id="uang" class="form-control" placeholder="Masukkan Jumlah Uang Muka yang Harus Dibayar">
                    </div>
                    <br> -->
                    <div class="form-group">
                        <label for="durasi">Lama Angsuran (tahun)</label>
                        <select name="durasi" class="form-control">
                            <option>-- Pilih Durasi --</option>
                            <option value="1">1 Tahun</option>
                            <option value="2">2 Tahun</option>
                            <option value="3">3 Tahun</option>
                            <option value="4">4 Tahun</option>
                            <option value="5">5 Tahun</option>
                        </select>
                    <br>
                    </div>
                    <div class="form-group">
                        <label for="bunga">Besar Bunga (%)</label>
                        <select name="bunga" class="form-control">
                            <option>-- Pilih Bunga --</option>
                            <option value="5">5%</option>
                            <option value="6">6%</option>
                            <option value="7">7%</option>
                            <option value="8">8%</option>
                            <option value="9">9%</option>
                            <option value="10">10%</option>
                        </select>
                    <br>
                    <!-- <div class="form-group">
                        <label for="alasan">Alasan</label>
                        <textarea name="alasan" class="form-control" rows="10" placeholder="Masukkan Alasan Anda Melakukan Kredit"></textarea>
                    </div> -->
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>