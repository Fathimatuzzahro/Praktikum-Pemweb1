<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LABKOM FMIPA UNS</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <section class="form" id="form">
        <div class="container mt-5 shadow rounded p-3">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="text-center font-weight-bold">Form Pendaftaran Maganger LABKOM FMIPA UNS</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <form method="POST" action="submit.php">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Anda">
                            <?php
                            // define variables and set to empty values
                            $nameErr = "";
                            $nama = "";
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (empty($_POST["nama"])) {
                                $nameErr = "Name is required";
                                } else {
                                    $nama = test_input($_POST["nama"]);
                                    // check if name only contains letters and whitespace
                                    if (!preg_match("/^[a-zA-Z-' ]*$/", $nama)) {
                                        $nameErr = "Only letters and white space allowed";
                                    }
                                }
                            }
                            function test_input($data) {
                                $data = trim($data);
                                $data = stripslashes($data);
                                $data = htmlspecialchars($data);
                                return $data;
                            }
                            ?>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim" id="nim" class="form-control" placeholder="Masukkan NIM Anda">
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
                                    for($a=1; $a<=31; $a+=1){
                                    echo"<option value=$a> $a </option>";
                                    }
                                ?>
                            </select>

                            <label for="bln">Bulan</label>
                            <select name="bln">
                                <option selected="selected">-- Pilih Bulan --</option>
                                <?php
                                $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                $jlh_bln=count($bulan);
                                    for($c=0; $c<$jlh_bln; $c+=1){
                                    echo"<option value=$bulan[$c]> $bulan[$c] </option>";
                                    }
                                ?>
                            </select>

                            <label for="thn">Tahun</label>
                            <select name="thn">
                                <option selected="selected">-- Pilih Tahun --</option>
                                <?php
                                $now=date('Y');
                                for ($a=1996; $a<=$now; $a++) {
                                    echo "<option value='$a'>$a</option>";
                                }
                                echo "</select>";
                                ?>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="status">Kewarganegaraan</label>
                            <br>
                            <input type="radio" name="status" value="WNI"> WNI <br>
                            <input type="radio" name="status" value="WNA"> WNA <br>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <input type="text" name="agama" id="agama" class="form-control" placeholder="Masukkan Agama Anda">
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
                        <br>
                        <label for="divisi">Pilihan Divisi</label>
                        <select name="divisi" class="form-control">
                            <option>-- Pilih Divisi --</option>
                            <option>Public Relation</option>
                            <option>Hardware</option>
                            <option>Jaringan</option>
                            <option>Software</option>
                        </select>
                        <br>
                        <div class="form-group">
                            <label for="alasan">Alasan</label>
                            <textarea name="alasan" class="form-control" rows="10" placeholder="Masukkan Alasan Anda Mendaftar"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>