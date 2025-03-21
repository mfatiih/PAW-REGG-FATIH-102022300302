<?php
// host
$host = "localhost";
// username
$username = "root";
// password
$password = "";
// database
$database = "db_modul2";
// port
$port = 3306;

// conn
$conn = mysqli_connect($host, $username, $password, $database, $port);

// check conn
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>