<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My First PHP Page</h1>
<!-- menuliskan komentar pada php bisa /* */, // atau # -->
    <?php
    ECHO "Hello World!";
    echo "<br>";
    echo "Hello World!";
    echo "<br>";
    EcHo "Hello World!";
    echo "<br>";
    ?>
<!-- echo di atas tdk terpengaruh dg key sensitive -->
<!-- variabel di bawah ini terpengaruh key sensitive -->
    <?php
    $color = "red";
    $COLOR = "orange";
    $coLOR = "blue";
    echo "My Car's colour is ".$color."<br>";
    echo "My House's colour is ".$COLOR."<br>";
    echo "My Boat's colour is ".$coLOR."<br>";
    ?>

    <?php
    $txt= "Hello World!";
    $x = 5;
    $y = 10.5;
    echo $txt;
    echo "<br>";
    echo $x;
    echo "<br>";
    ?>

    <!-- string -->
    <?php
    $x = "Hello world!";
    $y = "I'm Indonesian";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    ?>

    <!-- integer -->
    <?php
    $x = 5985;
    var_dump($x);
    echo "<br>";
    ?>

    <!-- float -->
    <?php
    $x = 10.365;
    var_dump($x);
    echo "<br>";
    ?>

    <!-- boolean -->
    <?php
    $x = true;
    $y = false;
    ?>

    <!-- variabel dan operator : menjumlahkan nilai di dalam variabel -->
    <?php
    $x = 50;
    $y = 4;
    echo $x + $y;
    echo "<br>";
    ?>

    <!-- konstanta -->
    <?php
    define("PHI", 3.14);
    $jari_jari = 1000;
    $keliling = 2 * PHI * $jari_jari;
    printf("PHI = %s<br>\n", PHI);
    printf("Keliling = %s <br>\n", $keliling);
    ?>

    <!-- operator aritmatik -->
    <?php
    $penjumlahan = 2 + 4;
    $pengurangan = 6 - 2;
    $perkalian = 5 * 3;
    $pembagian = 15 / 3;
    $modulus = 5 % 2;
    echo "Menampilkan penjumlahan: 2 + 4 =" . $penjumlahan . "<br>";
    echo "Menampilkan pengurangan: 6 - 2 =" . $pengurangan . "<br>";
    echo "Menampilkan perkalian: 5 * 3 =" . $perkalian . "<br>";
    echo "Menampilkan pembagian: 15 / 3 =" . $pembagian . "<br>";
    echo "Menampilkan modulus: 5 % 2 = " . $modulus . "<br>";
    ?>

    <!-- operator perbandingan -->
    <?php
    $x = 4;
    $y = 5;
    var_dump($x == $y)
    ?>

    <!-- php echo & print : echo can take multiple parameters, although such
usage is rare. while print can take one argument. echo is marginally faster than print. -->
    <?php
    echo "<br>";
    $txt = "White Cat";
    echo "I Love $txt!";
    echo "<br>";
    ?>

    <?php
    $txt = "W3Schools.com";
    echo "I love " . $txt . "!";
    ?>

    <!-- Echo dapat menampilkan tag HTML, pada contoh kali ini kata “PHP is fun” ditulis menggunakan heading 2 -->
    <?php
    echo "<h2>PHP is Fun!</h2>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";
    ?>

    <!-- Print dapat menampilkan tag HTML, pada contoh kali ini kata “PHP is fun” ditulis menggunakan heading 2 -->
    <?php
    print "<h2>PHP is Fun!</h2>";
    print "Hello world!<br>";
    print "I'm about to learn PHP!";
    ?>

    <!-- Echo untuk menampilkan variable -->
    <?php
    $txt1 = "Learn PHP";
    $txt2 = "Google.com";
    $x = 5;
    $y = 4;
    echo "<h2>" . $txt1 . "</h2>";
    echo "Study PHP at " . $txt2 . "<br>";
    echo $x + $y;
    ?>

    <!-- Print untuk menampilkan variable -->
    <?php
    $txt1 = "Learn PHP";
    $txt2 = "Google.com";
    $x = 5;
    $y = 4;
    print "<h2>" . $txt1 . "</h2>";
    print "Study PHP at " . $txt2 . "<br>";
    print $x + $y;
    ?>

</body>
</html>