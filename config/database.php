<?php

$host = "localhost";
$dbname = "immanuel_library";
$username = "root";
$password = "";

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Memberi tahu informasi error
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Mengembalikan array assosiatif
    PDO::ATTR_EMULATE_PREPARES   => false // Mengatur saiapa yang eksekusi prepare statement
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $error) {
    die("Koneksi ke database gagal: " . $error->getMessage());
}