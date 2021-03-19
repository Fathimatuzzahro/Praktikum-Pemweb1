<!-- FUNCTION PART 1 -->
<?php
    function ucapan() {
        echo "Selamat datang di Indonesia";
    }
    ucapan(); //memanggil function ucapan:
?>
<br /> <br />

<?php
    function sambutan() {
        echo "Selamat datang di ISEKAI";
    }
    sambutan(); //memanggil function sambutan:
?>
<br /> <br />
<br /> <br />

<!-- function dengan 1 parameter -->
<?php
    function favorit($masakan) {
        echo "Saya suka makan " . $masakan . " <br><br>";
    }
    favorit("soto");
    favorit("sate");
    favorit("nasi kebuli");
?>

<?php
    function fav($genre) {
        echo "Saya suka nonton anime dengan genre " . $genre . " <br><br>";
    }
    fav("gore");
    fav("psychological");
    fav("thriller");
    fav("horror");
    fav("mystery");
?>
<br /> <br />

<!-- function dengan >1 parameter -->
<!-- Penulisan parameter pada pemrograman PHP dipisahkan dengan tanda koma (,).
        Contoh di bawah adalah function dengan beberapa parameter, yaitu buah dan sayur. 
        Argumen yang digunakan yaitu manga, apel, jeruk, wortel, brokoli, dan buncis. -->
<?php
    function suka($buah, $sayur) {
        echo "Saya suka buah " . $buah . " dan sayur " . $sayur . "<br><br>";
    }
    suka("mangga", "wortel");
    suka("apel", "brokoli");
    suka("jeruk", "buncis");
?>

<?php
    function love($lagu, $anime) {
        echo "Saya suka lagu " . $lagu . " dari anime " . $anime . "<br><br>";
    }
    love("Ashita no Kimi Sae Ireba Ii", "Imouto Sae Ireba Ii");
    love("Kimi no Shiranai Monogatari", "Monogatari Series");
    love("Sekai wa Koi ni Ochiteiru", "Ao Haru Ride");
?>
<br /> <br />

<!-- function date -->
<!-- digunakan untuk menampilkan tanggal didalam halaman sebuah web. 
        Karena php merupakan server-side programming, maka tanggal yang akan ditampilkan sesuai server bukan waktu pada client -->
<?php
    Echo date("m/d/y");
?>
<br /> <br />
<!-- date - separator -->
<?php
    Echo date("m-d-y");
?>
<br /> <br />
<br /> <br />

<!-- contoh timestamp -->
<?php
    $today = date("F j, Y, g:i a");
        echo "$today <br><br>";
    $today = date("m.d.y");
        echo "$today <br><br>";
    $today = date("j, n, Y");
        echo "$today <br><br>";
    $today = date("Ymd");
        echo "$today <br><br>";
    $today = date("H:i:s");
        echo "$today <br><br>";
?>
<br /> <br />

<!-- date - year : digunakan untuk mengetahui tahun saat ini -->
<?php
    $tahun = date ("Y");
    echo $tahun."<br>";
?>
<br />

<!-- date - month : digunakan untuk mengetahui bulan saat ini -->
<?php
    $bulan = date("F");
    echo $bulan . "<br>";
?>
<br />

<!-- date - day : digunakan untuk mengetahui hari saat ini -->
<?php
    $hari = date("l");
    echo $hari."<br>";
?>
<br />

<!-- date - next day : digunakan untuk mengetahui hari kedepan -->
<?php
    $lusa = mktime(0, 0, 0, date("d") + 2, date("y")); //akan menghasilkan lusa yg ditambah 2 
    echo "Lusa adalah tanggal " . date("d/m/y", $lusa);
?>
<br /> <br />
<br /> <br />

<!-- contoh lain -->
<?php
    $besok = mktime(0, 0, 0, date("m"), date("d") + 1, date("Y"));
    $bulankemarin = mktime(
        0,
        0,
        0,
        date("m") - 1, 
        date("d"),
        date("Y")
    );
    $tahundepan = mktime(
        0,
        0,
        0,
        date("m"),
        date("d"),
        date("Y") + 1
    );
    echo "Besok adalah tanggal " . date("d/m/y", $besok) . "<br><br>";
    echo "Bulan Kemarin adalah tanggal " . date("d/m/y", $bulankemarin) . "<br><br>";
    echo "Tahun depan adalah tanggal " . date("d/m/y", $tahundepan) . "<br><br>";
?>
<br /> <br />

<!-- date - date+array -->
<?php
    //Array Hari
    $array_hari = array(1 => "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
    $hari = $array_hari[date("N")];
    //Format Tanggal
    $tanggal = date("j");
    //Array Bulan
    $array_bulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    $bulan = $array_bulan[date("n")];
    $tahun = date("Y");
    echo $hari . ", " . $tanggal . " " . $bulan . " " . $tahun;
?>
<!-- NOTE :
        $array_hari, adalah array yang terdiri dari nama-nama hari, dengan index dimulai dari 1. 
        Mengapa diset array dengan index pertama 1 bukan 0? alasannya adalah fungsi date(“N”), 
        memiliki fungsi sebagai berikut: Fungsi date(“N”), akan memberikan hasil output hari dengan angka sebagai representasinya, 
        dengan dimulai dari 1 untuk hari Senin dan 7 untuk minggu. 
        Begitu juga penjelasan untuk Array pada bulan, mengapa mengapa memakai array dengan index dimulai dari angka 1 bukan 0 adalah karena fungsi date(“n”), 
        untuk bulan januari dimulai dengan angka 1 dan 12 untuk desember. 
        Pada baris akhir echo $hari. "," . $tanggal . $bulan . $tahun; berfungsi untuk menampilkan hari dan tanggal -->

<br /> <br />
<br /> <br />

<!-- FUNCTION PART 2 -->
<!-- 
    String - STRPOS() : digunakan untuk menentukan posisi suatu substring dari sederetan string, 
    seperti :
    ✓ mereturn bilangan integer yang merupakan urutan posisi substring tersebut
    ✓ mencari posisi kejadian pertama sebuah string.
    ✓ mengembalikan posisi numerik pertama terjadinya pada string.
    ✓ mengembalikan posisi sebagai integer
 -->

<!-- Contoh STRPOS menggunakan operator = (sama dengan) -->
<?php
    $stringku = "ABCDEFGHIJ"; //index dimulai dr 0
    $posisi = strpos($stringku, "F");
    echo $stringku . "<br>";
    echo "Posisi karakter F dalam string adalah indeks ke- $posisi";
?>
<br /> <br />

<!-- Contoh STRPOS menggunakan operator == (double sama dengan) -->
<?php
    $mystring = 'abc' ;
    $findme = 'a' ;
    $pos = strpos ( $mystring , $findme );
    if ( $pos === false ) { //sama dengan 3 itu tidak hanya di cek benar atau tidaknya, tetapi juga tipe datanya
        echo "The string ' $findme ' was not found in the string ' $mystring '" ;
    } else {
        echo "The string ' $findme ' was found in the string ' $mystring '" ;
        echo " and exists at position $pos " ; } 
?>
<br /> <br />

<!-- Contoh STRPOS menggunakan operator !== (tidak sama dengan) -->
<?php
    $mystring = 'abc';
    $findme = 'a';
    $pos = strpos($mystring, $findme);
    if ($pos !== false) {
        echo "The string ' $findme ' was found in the string ' $mystring '";
        echo " and exists at position $pos ";
    } else {
        echo "The string ' $findme ' was not found in the string ' $mystring '";
    }
?>
<!-- 
    NOTE :
    Kelemahan dari strpos() adalah bahwa function tersebut hanya dapat menentukan posisi suatu substring pada pemunculan pertama. 
    Pada pemunculan substring pada posisi yang berikutnya tidak akan terdeteksi
-->
<br /> <br />
<br /> <br />

<!-- String - STR_REPLACE() : Function ini akan menggantikan suatu string dengan string yang lain-->
<?php
// sintaksnya : Str_replace(“kata yang diubah”, “kata pengubah”, variable_nilai_yg_diubah);
    $stringawal1 = "selamat datang di halaman web ini";
    $ubahstring1 = str_replace("web", "website", $stringawal1);
    echo "$ubahstring1";
?>
<br /> <br />

<!-- Apabila kata yang akan diganti tidak ditemukan di string, maka string tidak akan mengalami perubahan -->
<?php
    $stringawal2 = "selamat datang di modul web ini";
    $ubahstring2 = str_replace("website", "web", $stringawal2);
    echo "$ubahstring2";
?>
<br /> <br />

<!-- 
    Function str_replace() juga dapat menggantikan beberapa string secara simultan sekaligus. 
    Caranya adalah dengan menyimpan nilai-nilai yang akan diubah ke dalam suatu variable, 
    berikut juga dengan nilai-nilai pengubahnya. sintaksnya :
    Str_replace($var_diubah, $var_pengubah, $var_nilai_yg diubah);
-->
<?php
    $katalama = "Saat senja itu bukan apa-apa bagiku <br>
                Apa yang kamu inginkan di dunia ini? <br>
                Emaskah ? <br>
                Atau kedamaian ?<br>
                Bunda pernah berpesan <br>
                Tak ada apa-apa yang berharga didunia ini nak, <br>
                kecuali ketuguhanmu akan agamamu <br>";
    $diubah = array('senja', 'kamu', 'emaskah', 'kedamaian');
    $pengubah = array('malam', 'aku', 'uangkah', 'kemakmuran');
    $katabaru = str_replace($diubah, $pengubah, $katalama);
    echo "kata lama <br>";
    echo "<hr>";
    echo $katalama . "<br><br>";
    echo "setelah diubah <br>";
    echo "<hr>";
    echo $katabaru . "<br>";
?>
<br /> <br />
<br /> <br />

<!-- String - STRTOUPPER() : digunakan untuk mengubah karakter menjadi kapital -->
<!-- sintaksnya adalah : 
Strtoupper( “nilai yang diubah”);
atau
Strtoupper( $var_kata_yang_diubah ); -->
<?php
    $katalama = "Indonesia merdeka pada tanggal 17 agustus 1945";
    $katabaru = strtoupper($katalama);
    echo "kata lama - $katalama <br><br>";
    echo "kata baru - $katabaru";
?>
<br /> <br />

<!-- String - STRTOLOWER() : digunakan untuk mengubah karakter menjadi kapital -->
<!-- sintaksnya adalah :
Strtolower( “nilai yang diubah”);
atau
Strtolower( $var_kata_yang_diubah );
-->
<?php
    $katalama = "Indonesia merdeka pada tanggal 17 agustus 1945";
    $katabaru = strtolower($katalama);
    echo "kata lama - $katalama <br><br>";
    echo "kata baru - $katabaru";
?>
<br /> <br />

<!-- String - UCWORDS() : Karakter huruf pertama dari suatu kata dalam string juga dapat diubah menjadi
huruf capital menggunakan function ini-->
<!-- 
    sintaksnya : Ucwords(var_nilai_yang_diubah);
-->
<?php
    $title= "selamat pagi dunia";
    $ucTitle = ucwords($title);
    echo "Old title - $title <br>";
    echo "New title - $ucTitle";
?>
<br /> <br />

<!-- 
    Contoh lain:
    mengubah kata hELP menjadi Help, melalui 2 cara. Cara yang pertama
adalah mengubah menjadi huruf kecil (strtolower)terlebih dahulu kemudian
mengganti karakter pertama menjadi kapital (ucwords)
-->
<?php
    $titleString = "a title that could use some hELP";
    $lowercaseTitle = strtolower($titleString);
    $ucTitleString = ucwords($lowercaseTitle);
    echo "Old title - $titleString <br />";
    echo "New title - $ucTitleString";
?>
<br /> <br />

<!-- String - EXPLODE() : digunakan untuk meledakkan/memecah suatu
string menjadi potongan-potongan string yang kecil. Selanjutnya potonganpotongan
string ini akan disimpan dalam suatu array -->
<!-- 
    sintaksnya : Explode(“tanda_pemisah”, var_penyimpan_nilai_yang_diubah);
-->
<?php
    $PhoneNumber = "800-555-5555";
    $hasil = explode("-", $PhoneNumber);
    echo " Phone Number = $PhoneNumber <br>";
    echo "Pecahan 1 = $hasil[0]<br>";
    echo "Pecahan 2 = $hasil[1]<br>";
    echo "Pecahan 3 = $hasil[2]";
?>
<!-- 
    NOTE : 
    Pada perintah explode("-", $PhoneNumber); di atas, karakter "-" dapat diibaratkan sebagai dinamitnya. 
    Dinamit ini apabila diledakkan akan memecah string dari $PhoneNumber
-->
<br /> <br />
<!-- 
    NOTE :
    Karakter yang akan digunakan sebagai dinamit dapat ditentukan sendiri oleh programmer, dapat berupa spasi, koma dsb. 
    Jumlah pecahan string dari hasil ledakan dapat dibatasi dengan menambahkan jumlah batas ledakan sebagai paramater ketiga dari function explode()
-->
<?php
    $PhoneNumber = "800-555-5555";
    $hasil = explode("-", $PhoneNumber, 2);
    echo " Phone Number = $PhoneNumber <br>";
    echo "Pecahan 1 = $hasil[0]<br>";
    echo "Pecahan 2 = $hasil[1]<br>";
    echo "Pecahan 3 = $hasil[2]";
?>
<!-- 
    NOTE :
    Perintah explode("-", $PhoneNumber, 2); di atas membatasi 2 buah pecahan string dari hasil ledakan. 
    Dengan demikian, tampak pada hasil bahwa pecahan ketiga tidak ada.

    Parameter dari fungsi ini adalah perintah explode("-", $PhoneNumber); di atas,
    karakter "-" dan explode("-", $PhoneNumber, string); di atas membatasi 2 buah pecahan string.
-->
<br /> <br />

<!-- String - IMPLODE() : digunakan untuk menyatukan
pecahan-pecahan string menjadi satu kesatuan string-->
<!-- 
    sintaksnya : 
    Implode(“tanda pemisah”,var_penyimpan_nilai_yang_disatukan);
-->
<?php
    $pecahan = array("Hello", "World,", "I", "am", "Here!");
    $disatukandenganspasi = implode(" ", $pecahan);
    $disatukandengandash = implode("-", $pecahan);
    echo "$disatukandenganspasi <br>";
    echo "$disatukandengandash ";
?>