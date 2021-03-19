<!-- Fungsi Include() -->
<?php
    include("noFileExistsHere.php");
    echo "Hello World!";
?>
<br />

<!-- Fungsi Require() -->
<?php
    require("noFileExistsHere.php");
    echo "Hello World!";
?>

<!-- 
    Perbedaan penggunaan include dan require :
    ketika menggunakan include, jika file target tidak ditemukan, maka statement/kodingan setelahnya masih akan dijalankan.
    sedangkan jika kita menggunakan require, jika file target tidak ditemukan, maka perintah setelahnya, tidak akan dijalankan (berhenti mengeksekusi)
-->