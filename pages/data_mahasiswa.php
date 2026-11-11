


<?php
require_once "../config/auth.php";
require "../config/koneksi.php";

$sql = "SELECT id, nim, nama, program_studi, email
        FROM mahasiswa
        ORDER BY id DESC";

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="../assets/css/style.css">

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        background: #eef1f5;
        color: #333;
        font-family: Arial, sans-serif;
    }

    /* Layout utama menggunakan CSS Grid */
    .page-layout {
        display: grid;
        grid-template-columns: 240px minmax(0, 1fr);
        min-height: 100vh;
    }

    /* Sidebar */
    .sidebar {
        background: #222;
        color: white;
        padding: 25px 18px;
    }

    .sidebar h2 {
        font-size: 22px;
        margin: 0 0 8px;
        color: white;
    }

    .sidebar p {
        font-size: 13px;
        color: #ccc;
        margin-bottom: 30px;
    }

    .sidebar nav {
        display: flex;
        flex-direction: column;
        gap: 8px;
        margin: 0;
        text-align: left;
    }

    .sidebar nav a {
        display: block;
        padding: 12px 15px;
        color: #eee;
        background: transparent;
        text-decoration: none;
        border-radius: 8px;
        transition: 0.3s;
    }

    .sidebar nav a:hover,
    .sidebar nav a.active {
        background: #444;
        color: white;
    }

    /* Konten utama */
    .main-content {
        min-width: 0;
        padding: 30px;
    }

    .page-header {
        margin-bottom: 25px;
    }

    .page-header h1 {
        margin: 0 0 8px;
        color: #333;
    }

    .content-card {
        background: #fff;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
    }

    .content-card h2 {
        color: #333;
    }

    /* Pesan sukses */
    .success-message {
        background: #f0f1f3;
        color: #333;
        padding: 12px 15px;
        border-left: 4px solid #333;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    /* Tabel mahasiswa */
    .table-wrapper {
        width: 100%;
        overflow-x: auto;
    }

    .data-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 600px;
        background: #fff;
        margin-top: 16px;
    }

    .data-table th,
    .data-table td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ccc;
    }

    .data-table th {
        background: #eee;
        color: #333;
    }

    .data-table tbody tr {
        background: #fff;
        transition: background 0.2s;
    }

    .data-table tbody tr:hover {
        background: #f4f5f7;
    }

    .empty-message {
        text-align: center;
        padding: 25px;
        color: #777;
    }

    /* Footer */
    .page-footer {
        text-align: center;
        background: #222;
        color: white;
        padding: 20px;
        margin-top: 30px;
        border-radius: 10px;
    }

    .page-footer p {
        margin: 5px;
    }

    /* Tampilan HP */
    @media (max-width: 700px) {
        .page-layout {
            grid-template-columns: 1fr;
        }

        .sidebar {
            padding: 20px;
        }

        .sidebar nav {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .main-content {
            padding: 15px;
        }

        .content-card {
            padding: 15px;
        }
    }
</style>

    
</head>

<body>

<div class="page-layout">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <h2>My Dashboard</h2>
        <p>Web Programming 1</p>

        <nav>
            <a href="dashboard.php">Dashboard</a>
            <a href="index.php">Home / Biodata</a>
            <a href="layout.php">Layout Lab</a>
            <a href="data_mahasiswa.php" class="active">
                Data Mahasiswa</a>
            <a href="form_mahasiswa.php">Tambah Mahasiswa</a>
             <a href="../crud/index.php">CRUD Mahasiswa</a>
             <a href="../crud-media/index.php">CRUD Media</a>
        <a href="../proses/logout.php">Logout</a>
        </nav>
    </aside>

    <!-- KONTEN UTAMA -->
    <div class="main-content">

        <header class="page-header">
            <h1>Data Mahasiswa</h1>
            <p>Daftar mahasiswa yang tersimpan di database.</p>
        </header>

        <main>
            <section class="content-card">
                <h2>Daftar Mahasiswa</h2>

                <?php if (
                    isset($_GET["status"]) &&
                    $_GET["status"] === "sukses"
                ): ?>
                    <p class="success-message">
                        Data berhasil ditambahkan.
                    </p>
                <?php endif; ?>

                <div class="table-wrapper">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Program Studi</th>
                                <th>Email</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if ($result && $result->num_rows > 0): ?>
                                <?php $no = 1; ?>

                                <?php while (
                                    $row = $result->fetch_assoc()
                                ): ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td>
                                            <?= htmlspecialchars($row["nim"]); ?>
                                        </td>
                                        <td>
                                            <?= htmlspecialchars($row["nama"]); ?>
                                        </td>
                                        <td>
                                            <?= htmlspecialchars(
                                                $row["program_studi"]
                                            ); ?>
                                        </td>
                                        <td>
                                            <?= htmlspecialchars($row["email"]); ?>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>

                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="empty-message">
                                        Belum ada data mahasiswa.
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>

        <footer class="page-footer">
            <p>&copy; 2026 Web Programming 1</p>
        </footer>

    </div>

</div>

<?php
$conn->close();
?>

</body>
</html>
