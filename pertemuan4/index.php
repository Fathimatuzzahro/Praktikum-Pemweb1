<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My First Page</h1>
<!-- menuliskan komentar pada php bisa // atau # -->
    <?php
    ECHO "Hello World!";
    echo "Hello World!";
    EcHo "Hello World!";
    ?>
<!-- echo di atas tdk terpengaruh dg key sensitive -->
<!-- variabel di bawah ini terpengaruh key sensitive -->
    <?php
    $color = "red";
    $COLOR = "orange";
    $coLOR = "blue";
    echo "My Car is ".$color."<br>";
    echo "My House colour is ".$COLOR."<br>";
    echo "My Boat Colour is ".$coLOR."<br>";
    ?>

    <?php
    $txt = "White Cat";
    echo "I Love ".$txt."<br>";
    ?>
</body>
</html>