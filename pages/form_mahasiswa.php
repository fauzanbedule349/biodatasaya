
<?php
require_once "../config/auth.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa - Web Programming 1</title>
    <link rel="stylesheet" href="style2.css">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #eef1f5;
            color: #333;
        }

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
            margin: 0 0 8px;
            font-size: 22px;
            color: white;
        }

        .sidebar p {
            margin-bottom: 30px;
            font-size: 13px;
            color: #ccc;
        }

        .sidebar nav {
            display: flex;
            flex-direction: column;
            gap: 8px;
            background: #333;
        }

        .sidebar nav a {
            display: block;
            padding: 12px 15px;
            border-radius: 8px;
            color: #eee;
            text-decoration: none;
            transition: background 0.3s;
        }

        .sidebar nav a:hover,
        .sidebar nav a.active {
            background: #444;
            color: white;
        }

        /* Main Content */
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
            font-size: 28px;
        }

        .page-header p {
            margin: 0;
            color: #777;
        }

        .content-card {
            background: white;
            padding: 25px;
            border: 1px solid #ddd;
            border-radius: 15px;
        }

        .content-card h2 {
            margin-top: 0;
            margin-bottom: 20px;
        }

        /* Form */
        .student-form1 {
            display: flex;
            flex-direction: column;
            gap: 10px;
            max-width: 600px;
        }

        .student-form1 label {
            font-weight: bold;
            margin-top: 5px;
        }

        .student-form1 input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            background: #fff;
            color: #333;
        }

        .student-form1 input:focus {
            outline: none;
            border-color: #555;
        }

        .student-form1 button {
            margin-top: 15px;
            padding: 13px;
            border: none;
            border-radius: 8px;
            background: #222;
            color: white;
            font-size: 15px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .student-form1 button:hover {
            background: #444;
        }

        /* Footer */
        .page-footer {
            margin-top: 25px;
            padding: 18px;
            background: #222;
            color: white;
            text-align: center;
            border-radius: 10px;
        }

        .page-footer p {
            margin: 5px;
        }

        /* Responsive */
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
            .content-card {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
<div class="page-layout">

    <aside class="sidebar">
        <h2>My Dashboard</h2>
        <p>Web Programming 1</p>

        <nav>
            <a href="dashboard.php">Dashboard</a>
            <a href="index.php">Home / Biodata</a>
            <a href="layout.php">Layout Lab</a>
            <a href="data_mahasiswa.php">Data Mahasiswa</a>
            <a href="form_mahasiswa.php" class="active">Tambah Mahasiswa</a>
            <a href="logout.php">Logout</a>
        </nav>
    </aside>

    <div class="main-content">

        <header class="page-header">
            <h1>Tambah Mahasiswa</h1>
            <p>Web Programming 1</p>
        </header>

        <main>
            <section class="content-card">
                <h2>Form Data Mahasiswa</h2>

                <form action="proses_tambah.php" method="POST" class="student-form1">
                    <label for="nim">NIM</label>
                    <input id="nim" name="nim" type="text" required>

                    <label for="nama">Nama</label>
                    <input id="nama" name="nama" type="text" required>

                    <label for="program_studi">Program Studi</label>
                    <input id="program_studi" name="program_studi" type="text" required>

                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" required>

                    <button type="submit">Simpan Data</button>
                </form>
            </section>
        </main>

        <footer class="page-footer">
            <p>Web Programming 1</p>
            <p>&copy; 2026 Muhammad Fauzan</p>
        </footer>

    </div>
</div>
</body>
</html>
