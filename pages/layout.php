
<?php
require_once "../config/auth.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Experiment</title>
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
            margin: 0;
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
            background: white;
            padding: 25px;
            margin-bottom: 25px;
            border-radius: 15px;
        }

        .page-header h1 {
            margin: 0 0 8px;
        }

        .page-header p {
            margin-bottom: 0;
            color: #777;
        }

        /* Section konten */
        main {
            max-width: none;
            margin: 0;
        }

        main section {
            background: white;
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 15px;
        }

        main section h2 {
            margin-top: 0;
            margin-bottom: 15px;
        }

        .card {
            border: none;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        main section ul {
            padding-left: 22px;
        }

        main section li {
            margin-bottom: 8px;
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

            .page-header,
            main section {
                padding: 20px;
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
            <a href="layout.php" class="active">Layout Lab</a>
            <a href="data_mahasiswa.php">Data Mahasiswa</a>
            <a href="form_mahasiswa.php">Tambah Mahasiswa</a>
             <a href="../crud/index.php">CRUD Mahasiswa</a>
             <a href="../crud-media/index.php">CRUD Media</a>
        <a href="../proses/logout.php">Logout</a>
        </nav>
    </aside>

    <!-- KONTEN UTAMA -->
    <div class="main-content">

        <header class="page-header">
            <h1>Layout Experiment</h1>
            <p>Web Programming 1</p>
        </header>

        <main>
            <section>
                <h2>Eksperimen CSS</h2>
                <p>
                    Halaman ini digunakan untuk mencoba perubahan layout
                    tanpa merusak halaman biodata utama.
                </p>
            </section>

            <section id="profile" class="card">
                <h2>Profile Summary</h2>
                <p>
                    Saya sedang mempelajari HTML dan CSS untuk membangun
                    website yang terstruktur dan mudah dibaca.
                </p>
            </section>

            <section id="skills" class="card">
                <h2>Skills</h2>
                <ul>
                    <li>HTML</li>
                    <li>CSS Basic</li>
                    <li>Problem Solving</li>
                </ul>
            </section>

            <section id="goal" class="card">
                <h2>Learning Goal</h2>
                <p>
                    Mampu mengubah struktur HTML menjadi berbagai tampilan
                    menggunakan CSS.
                </p>
            </section>
        </main>

        <footer class="page-footer">
            <p>&copy; 2026 Muhammad Fauzan. All rights reserved.</p>
            <p>Web Programming 1</p>
        </footer>

    </div>

</div>

</body>
</html>
