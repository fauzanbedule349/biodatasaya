
<?php
require_once "../config/auth.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Profil Muhammad Fauzan</title>
</head>

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        background-color: #eef1f5;
        color: #333;
        font-family: Arial, sans-serif;
    }

    /* Layout utama */
    .page-layout {
        display: grid;
        grid-template-columns: 240px minmax(0, 1fr);
        min-height: 100vh;
    }

    /* Sidebar */
    .sidebar {
        background-color: #222;
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
        margin: 0;
        color: #eee;
        background-color: transparent;
        text-decoration: none;
        border-radius: 8px;
        transition: 0.3s;
    }

    .sidebar nav a:hover,
    .sidebar nav a.active {
        background-color: #444;
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
        background-color: #fff;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
    }

    .content-card h2 {
        color: #333;
    }

    /* Pesan sukses */
    .success-message {
        background-color: #f0f1f3;
        color: #333;
        padding: 12px 15px;
        border-left: 4px solid #333;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    /* Tabel */
    .table-wrapper {
        width: 100%;
        overflow-x: auto;
    }

    .data-table {
        width: 100%;
        min-width: 600px;
        border-collapse: collapse;
        margin-top: 16px;
        background-color: #fff;
    }

    .data-table th,
    .data-table td {
        border: 1px solid #ccc;
        padding: 12px;
        text-align: left;
    }

    .data-table th {
        background-color: #eee;
        color: #333;
    }

    .data-table tbody tr {
        background-color: #fff;
        transition: background-color 0.2s;
    }

    .data-table tbody tr:hover {
        background-color: #f4f5f7;
    }

    .empty-message {
        text-align: center;
        padding: 25px;
        color: #777;
    }

    /* Footer */
    .page-footer {
        text-align: center;
        background-color: #222;
        color: white;
        padding: 20px;
        margin-top: 30px;
        border-radius: 10px;
    }

    .page-footer p {
        margin: 5px;
    }

    /* Responsive HP */
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

<body>

<div class="page-layout">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <h2>My Dashboard</h2>
        <p>Web Programming 1</p>

        <nav>
            <a href="dashboard.php">Dashboard</a>
            <a href="index.php" class="active">Home / Biodata</a>
            <a href="layout.php">Layout Lab</a>
            <a href="data_mahasiswa.php">Data Mahasiswa</a>
            <a href="form_mahasiswa.php">Tambah Mahasiswa</a>
             <a href="../crud/index.php">CRUD Mahasiswa</a>
        <a href="../proses/logout.php">Logout</a>
        </nav>
    </aside>

    <!-- KONTEN UTAMA -->
    <div class="main-content">

        <div class="hero">
            <div class="foto">
                <img src="../assets/img/PP.png" alt="Foto Muhammad Fauzan">
            </div>

            <div class="identitas">
                <p class="sapaan">HALO, SAYA</p>
                <h1>Muhammad Fauzan</h1>
                <h3>Mahasiswa Informatika</h3>
                <p>
                    Selamat datang di halaman profil pribadi saya.
                    Saya sedang belajar teknologi dan pengembangan website.
                </p>
            </div>
        </div>

        <main>

            <section id="profil">
                <h2>Profil Singkat</h2>

                <div class="info">
                    <div class="info-box">
                        <span>Nama</span>
                        <strong>Muhammad Fauzan</strong>
                    </div>

                    <div class="info-box">
                        <span>NIM</span>
                        <strong>4112755201250059</strong>
                    </div>

                    <div class="info-box">
                        <span>Program Studi</span>
                        <strong>Informatika</strong>
                    </div>

                    <div class="info-box">
                        <span>Fakultas</span>
                        <strong>FICT</strong>
                    </div>

                    <div class="info-box">
                        <span>Tempat Lahir</span>
                        <strong>Bekasi</strong>
                    </div>

                    <div class="info-box">
                        <span>Tanggal Lahir</span>
                        <strong>11 Juli 2006</strong>
                    </div>
                </div>
            </section>

            <section id="tentang">
                <h2>Tentang Saya</h2>
                <p>
                    Saya adalah mahasiswa Program Studi Informatika yang
                    memiliki ketertarikan pada dunia teknologi. Saya senang
                    mempelajari pemrograman, desain antarmuka, dan pembuatan
                    website.
                </p>
                <p>
                    Saat ini saya sedang memperdalam kemampuan HTML dan CSS
                    sebagai dasar untuk membuat website yang menarik dan
                    mudah digunakan.
                </p>
            </section>

            <section id="pendidikan">
                <h2>Riwayat Pendidikan</h2>

                <div class="pendidikan">
                    <div class="pendidikan-item">
                        <span>01</span>
                        <div>
                            <h3>SD Negeri 04 Sukahurip</h3>
                            <p>Sekolah Dasar</p>
                        </div>
                    </div>

                    <div class="pendidikan-item">
                        <span>02</span>
                        <div>
                            <h3>SMP Negeri 2 Sukatani</h3>
                            <p>Sekolah Menengah Pertama</p>
                        </div>
                    </div>

                    <div class="pendidikan-item">
                        <span>03</span>
                        <div>
                            <h3>SMK Negeri 2 Cikarang Barat</h3>
                            <p>Sekolah Menengah Kejuruan</p>
                        </div>
                    </div>

                    <div class="pendidikan-item">
                        <span>04</span>
                        <div>
                            <h3>Horizon University Indonesia</h3>
                            <p>S1 Informatika</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="hobi">
                <h2>Hal yang Saya Sukai</h2>
                <div class="list">
                    <div class="item">🏃‍➡️ Running</div>
                    <div class="item">🎵 Musik</div>
                    <div class="item">💻 Coding</div>
                    <div class="item">🎮 Main Game</div>
                    <div class="item">📱 Nonton</div>
                </div>
            </section>

            <section id="skill">
                <h2>Kemampuan</h2>
                <div class="skill-list">
                    <div class="skill">HTML</div>
                    <div class="skill">Microsoft Office</div>
                    <div class="skill">UI/UX Design</div>
                </div>
            </section>

        </main>

        <footer>
            <p>&copy; 2026 Muhammad Fauzan</p>
            <p>Web Programming 1</p>
        </footer>

    </div>
</div>

</body>
</html>
