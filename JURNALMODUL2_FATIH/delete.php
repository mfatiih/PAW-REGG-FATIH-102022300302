<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_buku";
include 'connect.php';

// Cek Apakah ada data yang dikirim
if (isset($_GET[' '])) {
    $id = $_GET['id'];

    // Definisikan query untuk menghapus data
$conn = new myqli($host, $username, $password, $database);

    // Jalankan query

    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal dihapus');</script>";
    }
}
?>