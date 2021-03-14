<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>if</h1>
    <p> Contoh Stuktur Kontrol if </p>
    <br> $a = 5;
    <br> $b= 7;
    <hr>
    <!-- if : struktur kontrol pemilihan yang digunakan untuk pemeriksaan.
Apakah perintah-perintah didalam blok dikerjakan atau tidak. Perintah dalam blok if
akan dikerjakan jika nilai dari ekspresi di dalam if bernilai benar (true). -->
    <?php
    $a = 5;
    $b = 7;
    echo "\$a = $a <br>";
    echo "\$b = $b <br>";
    if ($a > $b) {
        echo "\$a > \$b";
    }
    if ($a < $b) {
        echo "\$a < \$b";
    }
    if ($b == $a) {
        echo "\$b = \$a";
    }
    echo "<br>";
    echo "<br>";
    ?>

    <!-- contoh lain perulangan if -->
    <?php
    $age = 50;
    echo "my age is " . $age . "<br><br>";
    if ($age > 30) {
        echo "My age is greater than 30!";
    }
    echo "<br>";
    echo "<br>";
    ?>

    <!-- else : untuk memberikan alternative urutan perintah apabila ada proses yang
memberikan dua alternative benar atau salah. else merupakan bagian seurutan
perintah yang harus dikerjakan apabila hasil evaluasi dari ekspresi pada if bernilai
salah.-->
    <?php
    $age = 50;
    echo "my age is " . $age . "<br><br>";
    if ($age < 30) {
        echo "My age is less than 30!";
    } else {
        echo "My age is greater than or equal 30!";
    }
    echo "<br>";
    echo "<br>";
    ?>

    <!-- else if : Nilai suatu ekspresi bisa jadi bukan dua nilai benar atau salah, tetapi bisa banyak nilai -->
    <?php $age = 50;
    echo "my age is " . $age . "<br><br>";
    if ($age < 30) {
        echo "My age is less than 30!";
    } elseif ($age > 30 && $age < 40) {
        echo "Your age is between 30 and 40!";
    } elseif ($age > 40 && $age < 50) {
        echo "My age is between 40 and 50!";
    } else {
        echo "My age is greater than 50 or equal to 50!";
    }
    echo "<br>";
    echo "<br>";
    ?>

    <!-- switch : digunakan untuk mengevaluasi suatu ekspresi dengan
kemungkinan banyak nilai dan banyak perintah yang harus dieksekusi berdasarkan
ekspresi dan nilainya -->
    <?php
    $favourite_site = 'Code';
    echo "my fav site is " . $favourite_site . "<br><br><br>";
    switch ($favourite_site) {
        case 'Business':
            echo "My favourite site is business.tutsplus.com!";
            break;
        case 'Code':
            echo "My favourite site is code.tutsplus.com!";
            break;
        case 'Web Design':
            echo "My favourite site is webdesign.tutsplus.com!";
            break;
        case 'Music':
            echo "My favourite site is music.tutsplus.com!";
            break;
        case 'Photography':
            echo "My favourite site is photography.tutsplus.com!";
            break;
        default:
    echo "I like everything at tutsplus.com!";
    }
    ?>

</body>
</html>