<?php
$conn = new mysqli("localhost", "root", "", "web_programming_1");
if ($conn->connect_error) {
 die("Koneksi gagal: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");
$sql = "SELECT id, nim, nama, program_studi, email
 FROM mahasiswa
 ORDER BY id ASC";
$result = $conn->query($sql);
?>