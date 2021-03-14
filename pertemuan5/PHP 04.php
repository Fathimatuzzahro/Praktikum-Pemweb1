<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $no_index[1] = 100;
    $str_index["str"] = 250;
    echo "Isi dari array index 1 adalah " . $no_index[1];
    echo "<br><br>";
    echo "Isi dari array index 'str' adalah " . $str_index["str"];
    echo "<br /> <br />";
    ?>
<!-- coba -->
    <?php
    // tanpa menggunakan indeks
    $arrayA = array(1, 2, 3, 4, 5, 6);
    foreach ($arrayA as $indeks => $nilai) {
        echo "\$arrayA[$indeks] => $nilai";
        echo "<br />";
    }
    echo "<br /> <br />";
    // menggunakan indeks tapi tidak urut
    $arrayB = array(1 => 1, 3 => 2, 5 => 3, 4 => 4, 0 => 5, 2 => 6);
    foreach ($arrayB as $indeks => $nilai) {
        echo "\$arrayB[$indeks] => $nilai";
        echo "<br />";
    }
    echo "<br /> <br />";
    // tidak semua menggunakan indeks,
    // php akan otomatis memberikan indeks
    $arrayC = array(1 => 1, 2, 3, 4, 0 => 5, 6);
    foreach ($arrayC as $indeks => $nilai) {
        echo "\$arrayC[$indeks] => $nilai";
        echo "<br />";
    }
    echo "<br /> <br />";
    // array dua dimensi
    // dimensi pertama associative
    // dimensi kedua vector
    $duadim = array(
        "prog" => array(1 => "HTML", "PHP", "JavaScript"), 
        "nomor" => array(1 => 1, 2, 3), 
        "experience" => array(1 => "Beginer", "Middle", "Advance"));
    foreach ($duadim as $k => $v) {
        $x = 1;
        foreach ($v as $x => $y) {
            echo "\$duadim[$k] => \$v[$x] => $y <br />";
            $x++;
        }
    }
    ?>

    <!-- array dg numeric index -->
    <?php
    echo "<br /> <br />";
    $buah[0] = "mangga";
    $buah[1] = "apel";
    $buah[2] = "pisang";
    $buah[3] = "jambu";
    echo "Berikut ini adalah 2 buah yang saya suka, yaitu ". $buah[0] . " & " . $buah[1];
    echo "<br>Namun, saya juga suka buah ". $buah[2] . " & " . $buah[3];
    ?>

    <!-- array - assosiative index -->
    <?php
    echo "<br /> <br />"; //untuk memberi jarak dg sintaks atasnya
    //untuk mempermudah menampilkan indeks numerik
    $harga["mangga"] = 200; //key nya adalah mangga
    $harga["apel"] = 400;
    $harga["pisang"] = 600;
    $harga["jambu"] = 220;
    echo "harga mangga: Rp" . $harga["mangga"] . "<br>";
    echo "harga apel: Rp" . $harga["apel"] . "<br>";
    echo "harga pisang: Rp" . $harga["pisang"] . "<br>";
    echo "harga jambu: Rp" . $harga["jambu"];
    ?>

    <!-- Array part 2 -->
    <!-- fungsi count dan sizeof pada array : menghitung jumlah elemen
yang dimiliki oleh sebuah array -->
    <?php
    echo "<br /> <br />";
    $a[0] = 1;
    $a[1] = 3;
    $a[2] = 5;
    $jumlah = count($a);
    //variabel $jumlah akan bernilai 3
    echo "jumlah element array a adalah " . $jumlah . "<br><br>";
    
    $b["buah"] = "semangka";
    $b["sayur"] = "wortel";
    $b["daging"] = "ayam";
    $b["utama"] = "nasi";
    $jumlah = sizeof($b);
    //variabel $jumlah akan bernilai 4
    echo "jumlah element array b adalah " . $jumlah;
    ?>

    <!-- fungsi array push :digunakan untuk menyisipkan elemen baru ke dalam sebuah array. Elemen
baru ini disisipkan pada bagian paling akhir -->
    <?php
    echo "<br /> <br />";
    $program = array("HTML", "PHP");
    array_push($program, "CSS", "JavaScript");
    foreach ($program as $prg) {
        echo $prg . "<br><br>";
    }
    ?>

    <!-- fungsi array splice : digunakan untuk mengambil/membuang satu atau beberapa elemen array
dan menggantikannya dengan yang baru -->
    <?php
    echo "Anggota array awal adalah: <br />";
    $input = array("HTML", "PHP", "CSS", "JavaScript");
    print_r($input);
    echo "<br /><br />";
    echo "array_splice(\$input,2)";
    echo "<br />";
    $input = array("HTML", "PHP", "CSS", "JavaScript");
    array_splice($input, 2);
    print_r($input);
    echo "<br /><br />";
    echo "array_splice(\$input,1,-1)";
    echo "<br />";
    $input = array("HTML", "PHP", "CSS", "JavaScript");
    array_splice($input, 1, -1);
    print_r($input);
    echo "<br /><br />";
    echo "array_splice(\$input,1, count(\$input),\"AJAX\")";
    echo "<br />";
    $input = array("HTML", "PHP", "CSS", "JavaScript");
    array_splice($input, 1, count($input), "AJAX");
    print_r($input);
    echo "<br /><br />";
    echo "array_splice(\$input,-1,1, array(\"JQuery\",\"Framework\"))";
    echo "<BR>";
    $input = array("HTML", "PHP", "CSS", "JavaScript");
    array_splice($input, -1, 1, array(
        "JQuery",
        "Framework"));
    print_r($input);
    ?>

    <!-- array - unshift : digunakan untuk menyisipkan elemen ke bagian awal
array -->
    <?php
    echo "<br /> <br />";
    $arrayBuah = array("Jeruk", "Apel"); // array mula-mula
    echo $arrayBuah[0] . "<br>"; // menghasilkan 'Jeruk'
    echo $arrayBuah[1] . "<br>"; // menghasilkan 'Apel'
    // elemen array menjadi 'Pisang, Jeruk, Apel'
    array_unshift($arrayBuah, "Pisang"); // fungsinya menyisipkan value ke dalam array di indeks paling awal
    echo $arrayBuah[0] . "<br>"; // menghasilkan 'Pisang'
    echo $arrayBuah[1] . "<br>"; // menghasilkan 'Jeruk'
    echo $arrayBuah[2] . "<br>"; // menghasilkan 'Apel'
    ?>
    <!-- Beberapa elemen dapat pula disisipkan sekaligus dengan array_unshift() -->
    <?php
    echo "<br /> <br />";
    $arrayBuah = array("Jeruk", "Apel");
    // elemen array menjadi 'Pisang, Mangga, Jeruk, Apel'
    array_unshift($arrayBuah, "Pisang", "Mangga");
    echo $arrayBuah[0] . "<br>"; // menghasilkan 'Pisang'
    echo $arrayBuah[1] . "<br>"; // menghasilkan 'Mangga'
    echo $arrayBuah[2] . "<br>"; // menghasilkan 'Jeruk'
    echo $arrayBuah[3] . "<br>"; // menghasilkan 'Apel'
    ?>

</body>
</html>
