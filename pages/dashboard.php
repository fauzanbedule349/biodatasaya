
<?php
require_once "../config/auth.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Web Programming 1</title>
    <link rel="stylesheet" href="../assets/css/style.css">
<style>
    /* Dashboard Layout */
.dashboard-grid {
    display: grid;
    grid-template-areas:
        "header header"
        "sidebar content"
        "footer footer";
    grid-template-columns: 220px 1fr;
    grid-template-rows: auto 1fr auto;
    min-height: 100vh;
    gap: 15px;
    padding: 15px;
    background: #eef1f5;
    color: #333;
}

.dashboard-header {
    grid-area: header;
    background: #222;
    color: white;
    padding: 20px;
    border-radius: 8px;
}

.dashboard-sidebar {
    grid-area: sidebar;
    background: #333;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
}


.dashboard-content {
    grid-area: content;
    background: white;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
}

.dashboard-footer {
    grid-area: footer;
    background: #222;
    color: white;
    padding: 15px;
    text-align: center;
    border-radius: 8px;
}

.dashboard-sidebar a {
    display: block;
    margin-bottom: 15px;
    padding: 10px;
    border-radius: 6px;
    color: #fff;
    text-decoration: none;
    transition: background 0.3s, color 0.3s;
}

.dashboard-sidebar a:hover {
    background: #eee;
    color: #111;
}

@media (max-width: 600px) {
    .dashboard-grid {
        grid-template-areas:
            "header"
            "sidebar"
            "content"
            "footer";
        grid-template-columns: 1fr;
    }
}
</style>
</head>

<body>
<div class="dashboard-grid">

    <header class="dashboard-header">
        <h1>Dashboard Project Web Programming 1</h1>
        <p>
            Halo,
            <strong><?= htmlspecialchars($_SESSION["nama_lengkap"]) ?></strong>
        </p>
    </header>

    <aside class="dashboard-sidebar">
        <h2 style="color : #fff">Menu</h2>
        <a href="dashboard.php">Dashboard</a>
        <a href="index.php">Home / Biodata</a>
        <a href="layout.php">Layout Lab</a>
        <a href="data_mahasiswa.php">Data Mahasiswa</a>
        <a href="form_mahasiswa.php">Tambah Mahasiswa</a>
        <a href="../crud/index.php">CRUD Mahasiswa</a>
        <a href="../crud-media/index.php">CRUD Media</a>
        <a href="../proses/logout.php">Logout</a>
    </aside>

    <main class="dashboard-content">
        <h2>Project Hub</h2>
        <p>Pilih bagian project yang ingin dibuka:</p>

        <ul>
            <li>
                <a href="index.php">
                    Home / Biodata - hasil Modul 1-2
                </a>
            </li>
            <li>
                <a href="layout.php">
                    Layout Lab - hasil Modul 3A
                </a>
            </li>
            <li>
                <a href="data_mahasiswa.php">
                    Data Mahasiswa - hasil Modul 3B
                </a>
            </li>
            <li>
                <a href="form_mahasiswa.php">
                    Tambah Mahasiswa - hasil Modul 4B
                </a>
            </li>
        </ul>
    </main>

    <footer class="dashboard-footer">
        <p>&copy; 2026 Web Programming 1 - Project Dashboard</p>
    </footer>

</div>
</body>
</html>
