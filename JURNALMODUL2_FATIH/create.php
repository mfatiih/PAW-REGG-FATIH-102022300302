<?php
$host = "localhost";
$username = "root";
$password = "";
include 'connect.php';

// Cek Apakah ada data yang dikirim
if (isset($_POST['create'])) {
    $judulName = $_POST["nama_buku"];
    $penulisName = $_POST["nama_penulis"];
    $tahunName = $_POST["tahun_terbit"];
    $query = "INSERT INTO db_modul2 (nama_buku, nama_penulis, tahun_terbit)
    VALUES ('$judulName', '$penulisName', '$tahunName',)";




    // Definisikan query untuk insert data


    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>