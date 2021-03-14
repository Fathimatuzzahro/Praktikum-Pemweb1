<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- while -->
    <?php
    $i = 1;
    while ($i <= 5) {
    echo "Nomor : " . $i . "<br />";
    $i++; //increment : peningkatan selama dieksekusi ditambah satu trs, sampai suatu syarat terpenuhi dan akan berhenti untuk looping
    }
    echo "<br>";
    ?>

    <!-- do-while : perintahnya akan dieksekusi minimal 1x.syaratnya dicek ketika di while -->
    <?php
    $i = 2;
    do {
        $i++;
        echo $i . "<br />";
    } while ($i <= 10);
    echo "<br>";
    ?>

    <!-- for -->
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo $i."<br>";
    }
    ?>

    <!-- contoh lain dari for -->
    <?php
    $harga_sikat = 1500;
    echo "<table border=\"1\" align=\"center\">";
    echo "<tr><td><b>Jumlah Sikat</b></td>";
    echo "<td><b>Harga</b></td></tr>";
    for (
        $jumlah_sikat = 10;
        $jumlah_sikat <= 100;
        $jumlah_sikat += 10
    ) {
        echo "<tr><td>";
        echo $jumlah_sikat;
        echo "</td><td>";
        echo "Rp. " . $harga_sikat * $jumlah_sikat;
        echo "</td></tr>";
    } 
    echo "</table>";
    echo "<br>";
    ?>

    <!-- foreach : bisa mencetak tiap2 elemen/data tanpa menuliskan satu2-->
    <?php
    $fruits = array('apple', 'banana', 'orange');
    foreach ($fruits as $fruit) {
        echo $fruit;
        echo "<br/>";
    }
    ?>
</body>
</html>