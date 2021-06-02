<?php 
$conn = mysqli_connect('localhost', 'root', '', 'db_kampus');

function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah ($data) {
    global $conn;
    $nim = $data["nim"];
    $nama = $data["nama"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];

    $query = "INSERT INTO tb_mahasiswa VALUES ('', '$nim', '$nama', '$email', '$jurusan')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    $query = "DELETE FROM tb_mahasiswa WHERE id=$id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $data["id"];
    $nim = $data["nim"];
    $nama = $data["nama"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];
    $query = "UPDATE tb_mahasiswa SET nim='$nim', nama='$nama', email='$email', jurusan='$jurusan' WHERE id='$id'"; 
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    // echo $query;
}

function cari($keyword) {
    $query = "SELECT * FROM tb_mahasiswa WHERE nama LIKE '%$keyword%'";

    return query($query);
}

function registrasi($data) {
    global $conn;
    $username = strtolower($data["username"]);
    $password = mysqli_escape_string($conn, $data["password"]);
    $password2 = mysqli_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM tb_user WHERE username = '$username'");
    
    if(mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('Username Sudah Terdaftar');
            </script>
        ";

        return false;
    }

    if($password != $password2) {
        echo "
            <script>
                alert('Konfirmasi Password Tidak Sama');
            </script>
        ";

        return false;
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        // $password2 = password_hash($password, PASSWORD_DEFAULT);
        // var_dump($password);
        mysqli_query($conn, "INSERT INTO tb_user VALUES ('', '$username', '$password')");
        return mysqli_affected_rows($conn);
    }
}
?>