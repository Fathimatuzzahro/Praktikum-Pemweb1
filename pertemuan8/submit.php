<!-- POST -->
<?php
    $jumlah = $_POST['jumlah'];
    $barangpesanan = $_POST['barangpesanan'];
    echo "Anda memesan " . $jumlah . " " . $barangpesanan . ".<br>";
    echo "Terima kasih atas kesediaan Anda memesan barang dari kami!";
?>
<!-- 
    Variabel jumlah didapatkan dari halaman pemesanan yaitu text field jumlah,
    sedangkan untuk variable barangpesanan, nilainya didapatkan dari <select> yang ada di halaman pemesanan. 
    Kemudian nilai dari variable ini ditampilkan ke layar
-->

<!-- GET -->
<?php
    $jumlah = $_GET['jumlah'];
    $barangpesanan = $_GET['barangpesanan'];
    echo "Anda memesan " . $jumlah . " " . $barangpesanan . ".<br>";
    echo "Terima kasih atas kesediaan Anda memesan barang dari kami! Sampai Jumpa Lagi!";
?>
<!-- 
    Perbedaanya adalah pada URL, Nampak nilai yang ada di dalam vaariabel barang pesanan 
    yang bernilai map kertas dengan jumlah bernilai X.
-->
