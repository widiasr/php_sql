<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "form"; // <--- Pastikan nama database kamu adalah 'form'

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>