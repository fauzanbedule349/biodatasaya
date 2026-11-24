
<?php
session_start();

header("Content-Type: application/json");

if (!isset($_SESSION["user_id"])) {
    http_response_code(401);

    echo json_encode([
        "status" => false,
        "message" => "Silakan login terlebih dahulu."
    ]);

    exit;
}

require_once "../config/koneksi.php";

// Ganti dengan NIM kamu yang ada di database
$nim = "4112755201250059";

$stmt = $conn->prepare(
    "SELECT id, nim, nama, program_studi, email, foto
     FROM mahasiswa
     WHERE nim = ?
     LIMIT 1"
);

$stmt->bind_param("s", $nim);
$stmt->execute();

$result = $stmt->get_result();
$data = $result->fetch_assoc();

if ($data) {
    echo json_encode([
        "status" => true,
        "data" => $data
    ]);
} else {
    http_response_code(404);

    echo json_encode([
        "status" => false,
        "message" => "Data mahasiswa tidak ditemukan."
    ]);
}

$stmt->close();
$conn->close();
?>
