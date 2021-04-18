<!-- 
    NOTE :
    Write => Metode ini digunakan untuk menulis atau memberikan isi baru kedalam file dan menghapus isi file yang lama.
    Mode ‘w’, meskipun file “file_tulis.txt” belum ada, secara otomatis file “file_tulis.txt” akan terbentuk.  
-->
<?php
    // $nama_file = "file_tulis.txt";
    // $tulis = fopen($nama_file, 'w') or die("File tidak bisa dibuka");
    // fclose($tulis);
?>


<!-- 
    NOTE :
    Read => Metode ini digunakan untuk membaca isi file. Metode ini mengharuskan file yang akan dibaca sudah ada, apabila belum ada maka akan ditampilkan pesan error. 
    Mode ‘ r ’, apabila file “baca.txt” belum ada akan ditampilkan pesan error.
-->
<?php
    // $nama_file = "baca.txt";
    // $coba = fopen($nama_file, 'r') or die("File tidak bisa dibuka");
    // fclose($coba);
?>
<!-- 
    Sedangkan apabila file yang dicari dapat ditemukan maka akan ditampilkan seperti ini
-->
<?php
    // $nama_file = "file_tulis.txt";
    // $coba = fopen($nama_file, 'r') or die("File tidak bisa dibuka");
    // fclose($coba);
?>


<!-- 
    NOTE :
    Append => Metode ini digunakan untuk menambah isi file atau memberikan isi baru kedalam file tanpa menghapus isi file yang lama.
-->
<?php
    // $nama_file = "tambah.txt";
    // $coba = fopen($nama_file, 'a') or die("File tidak bisa dibuka");
    // fclose($coba);
?>

<!-- 
    NOTE :
    r+ => membuka file untuk dibaca dan ditulis, namun penulisannya diletakkan di awal file
    w+ => membaca dan menulis file seperti pad mode 'w', namun isi file yang lama akan dihapus dan digantikan dengan yang baru.
          apabila belum ada isi pada file, makaa akan dibuatkan isi file.
    a+ => digunakan untuk membaca dan menambahkan isi file, pada saat penambahan, file akan ditambahkan sesuai letak pointer yaitu di akhir isi.
          seperti pada mode 'w+' dan 'a', jika belum ada isi file maka akan dibuatkan isi file.
-->


<!-- 
    NOTE :
    Manipulasi file – menyimpan
    enyimpan data ke file, kita dapat menggunakan perintah fputs(). 
    Sintaks: Fputs(variable_penyimpanan_buka_file, “data yang akan disimpan”)
-->
<?php
    // $nama_file = "tambah.txt";
    // $coba = fopen($nama_file, 'a') or die("File tidak bisa dibuka");
    // fputs($coba, "Indonesia adalah negara kepulauan");
    // fclose($coba);
?>


<!-- 
    NOTE :
    Manipulasi file – membaca
    Fungsi yang dapat kita gunakan adalah: fread() dan fgetc().
    • Fread() -> pembacaan dari data awal sampai akhir file.
    • Fgetc() -> pembacaan karakter demi karakter dalam suatu file.
-->
<?php
    // $File = "tambah.txt";
    // $po = fopen($File, 'r');
    // $Data = fread($po, 10);
    // fclose($po);
    // echo $Data;
?>

<!-- Contoh lain dari fread() : Fungsi ini akan menampilkan semua pesan yang ada di dalam file txt-->
<?php
    // $File = "tambah.txt";
    // $po = fopen($File, 'r');
    // $Data = fread($po, filesize($File));
    // fclose($po);
    // echo $Data;
?>


<!-- NOTE :
    FgetC()
    fgetc() digunakan pada perulangan, feof() digunakan untuk menyelidiki apakah pointer sudah berada di akhir dari file (end of file) atau belum. 
    Selama belum end of file, maka proses pembacaan karakter akan berjalan terus. Setiap kali pembacaan, karakter yang dibaca akan ditampilkan di browser.
-->
<?php
    // $File = "tambah.txt";
    // $po = fopen($File, 'r');
    // while (!feof($po)) {
    //     $Data = fgetc($po);
    //     echo $Data;
    // }
    // fclose($po);
?>


<!-- 
    NOTE :
    Menutup file
    Jika ada file yang dibuka, maka file tersebut harus ditutup setelah pemrosesan atau kegiatan manipulasi file selesai. 
    Jika file tidak ditutup, ada kemungkinan terjadi kerusakan pada struktur file. 
    Setelah file ditutup, file tidak dapat dimanipulasi lagi isinya, jika ingin memanipulasi, file harus dibuka kembali. 
    Perintah yang digunakan untuk menutup file yaitu, fclose(); 
    Sintaksnya adalah sebagai berikut
    Fclose(variable_penyimpanan_buka_file);
-->
<?php
    // $Nama = "tambah.txt";
    // $File = fopen($Nama, 'w') or die("File tidak bisa dibuka");
    // fclose($File);
?>


<!--  
    NOTE :
    Menghapus file
    function untuk menghapus file adalah unlink(). 
    Sintaksnya adalah sebagai berikut
    Unlink(variable_penyimpanan_buka_file);
-->
<!-- Proses penghapusan ketika file tidak ditemukan -->
<?php
    // $myFile = "tambahh.txt";
    // unlink($myFile);
?>

<!-- Proses penghapusan ketika file ditemukan -->
<?php
    // $myFile = "tambah.txt";
    // unlink($myFile);
?>


<!--  
    NOTE :
    Upload file
    Proses upload file ke server kita gunakan form sebagai media upload file. Maksimal 40000 bytes.
-->
<!DOCTYPE html>
<html>
    <body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    </body>
</html>