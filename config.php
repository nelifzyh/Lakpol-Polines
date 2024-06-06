<?php

$db_name = "website";
$host = "localhost";
$username = "root";
$password = "";

// Buat koneksi PDO
try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);

    // Set mode error ke exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Connected successfully"; // Cetak pesan ini jika koneksi berhasil
} catch (PDOException $e) {
    //echo "Connection failed: " . $e->getMessage(); // Cetak pesan kesalahan jika koneksi gagal
    die();
}
?>