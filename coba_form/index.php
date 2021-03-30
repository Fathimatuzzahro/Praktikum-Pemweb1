<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Alat Tulis dan Kantor AAA</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <h2>Toko Alat Tulis dan Kantor AAA</h2>
    <form action="submit.php" method="post">
        <select name="barangpesanan">
            <option>Buku tamu</option>
            <option>Amplop</option>
            <option>Map kertas</option>
        </select>
        Jumlah pesanan: <input name="jumlah" type="text"maxlength="2" size="2">
        <input type="submit" value="Submit">
    </form>
    <!-- 
        Form di atas terdiri dari 1 buah dropdown dengan pilihan 3 menu yaitu buku tamu, amplop, dan map kertas. 
        Kemudian dalam form tersebut terdapat satu buah text input dengan pengaturan max length adalah 2, 
        artinya pengguna hanya bisa memasukkan jumlah maksimum sua digit. 
        Selain itu, juga terdapat satu tombol submit, namun belum bisa digunakan karena belum dibuat fungsinya. 
        Fungsi dari form action adalah mengirimkan data yang ada pada form pembelian ke halaman submit
    -->

    <!-- REQUEST METHOD -->
    <h2>Toko Alat Tulis dan Kantor AAA</h2>
    <form action="submit.php" method="GET">
        <select name="barangpesanan">
            <option>Buku tamu</option>
            <option>Amplop</option>
            <option>Map kertas</option>
        </select>
        Jumlah pesanan: <input name="jumlah" type="text" maxlength="2" size="2">
        <input type="submit" value="Submit">
    </form>

    <!-- DATA VALIDATION -->
    <!-- 
        NOTE :
        Validasi form adalah suatu informasi atau pemberitahuan yang digunakan oleh form. 
        Dimana informasi yang keluar dari form berupa pesan error atau pesan sukses. 
        Validasi yang sering kita jumpai saat melakukan input data atau registrasi data
        biasanya adalah validasi bahwa input tidak boleh kosong
    -->
    <?php
    // define variables and set to empty values
        $nameErr = "";
        $name = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
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
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <p>Name: <input type="text" name="name" value="<?php echo $name; ?>"></p>
    <p><span class="error"> <?php echo $nameErr; ?></span><br></p>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    echo "<h2>Your Name:</h2>";
    echo $name;
    echo "<br>";
    ?>

</body>
</html>