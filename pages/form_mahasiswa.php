
<?php
require_once "../config/auth.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Mahasiswa - Web Programming 1</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script>
        tailwind = {
            config: {
                corePlugins: {
                    preflight: false
                }
            }
        }
    </script>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100 text-gray-800">

<div class="container-fluid">
    <div class="row min-vh-100">

        <!-- SIDEBAR -->
        <aside class="col-lg-3 col-xl-2 bg-dark text-white p-4">

            <h2 class="text-2xl font-bold mb-2">
                My Dashboard
            </h2>

            <p class="text-gray-400 text-sm mb-4">
                Web Programming 1
            </p>

            <hr class="border-secondary">

            <nav class="grid grid-cols-2 lg:grid-cols-1 gap-2 mt-4">

                <a href="dashboard.php"
                   class="text-gray-200 no-underline rounded-lg p-3 hover:bg-gray-700 transition">
                    Dashboard
                </a>

                <a href="index.php"
                   class="text-gray-200 no-underline rounded-lg p-3 hover:bg-gray-700 transition">
                    Home / Biodata
                </a>

                <a href="layout.php"
                   class="text-gray-200 no-underline rounded-lg p-3 hover:bg-gray-700 transition">
                    Layout Lab
                </a>

                <a href="data_mahasiswa.php"
                   class="text-gray-200 no-underline rounded-lg p-3 hover:bg-gray-700 transition">
                    Data Mahasiswa
                </a>

                <a href="form_mahasiswa.php"
                   class="bg-gray-700 text-white no-underline rounded-lg p-3">
                    Tambah Mahasiswa
                </a>

                <a href="../crud/index.php"
                   class="text-gray-200 no-underline rounded-lg p-3 hover:bg-gray-700 transition">
                    CRUD Mahasiswa
                </a>

                <a href="../crud-media/index.php"
                   class="text-gray-200 no-underline rounded-lg p-3 hover:bg-gray-700 transition">
                    CRUD Media
                </a>

                <a href="../proses/logout.php"
                   class="text-red-300 no-underline rounded-lg p-3 hover:bg-red-900 transition">
                    Logout
                </a>

            </nav>

        </aside>


        <!-- KONTEN UTAMA -->
        <main class="col-lg-9 col-xl-10 p-3 p-md-4 p-lg-5">

            <!-- HEADER -->
            <header class="card border-0 shadow-sm rounded-4 p-4 mb-4">

                <h1 class="text-3xl font-bold text-gray-900 mb-2">
                    Tambah Mahasiswa
                </h1>

                <p class="text-gray-500 mb-0">
                    Web Programming 1
                </p>

            </header>


            <!-- FORM DATA MAHASISWA -->
            <section class="card border-0 shadow-sm rounded-4 p-3 p-md-4">

                <h2 class="text-2xl font-bold text-gray-900 mb-2">
                    Form Data Mahasiswa
                </h2>

                <p class="text-gray-500 mb-4">
                    Silakan isi informasi mahasiswa dengan lengkap.
                </p>

                <form action="proses_tambah.php" method="POST">

                    <!-- NIM -->
                    <div class="mb-3">

                        <label for="nim" class="form-label fw-semibold">
                            NIM
                        </label>

                        <input
                            id="nim"
                            name="nim"
                            type="text"
                            class="form-control rounded-3 p-3"
                            placeholder="Masukkan NIM"
                            required
                        >

                    </div>


                    <!-- NAMA -->
                    <div class="mb-3">

                        <label for="nama" class="form-label fw-semibold">
                            Nama
                        </label>

                        <input
                            id="nama"
                            name="nama"
                            type="text"
                            class="form-control rounded-3 p-3"
                            placeholder="Masukkan nama mahasiswa"
                            required
                        >

                    </div>


                    <!-- PROGRAM STUDI -->
                    <div class="mb-3">

                        <label for="program_studi" class="form-label fw-semibold">
                            Program Studi
                        </label>

                        <input
                            id="program_studi"
                            name="program_studi"
                            type="text"
                            class="form-control rounded-3 p-3"
                            placeholder="Masukkan program studi"
                            required
                        >

                    </div>


                    <!-- EMAIL -->
                    <div class="mb-4">

                        <label for="email" class="form-label fw-semibold">
                            Email
                        </label>

                        <input
                            id="email"
                            name="email"
                            type="email"
                            class="form-control rounded-3 p-3"
                            placeholder="contoh@email.com"
                            required
                        >

                    </div>


                    <!-- BUTTON -->
                    <div class="d-flex flex-wrap gap-2">

                        <button type="submit" class="btn btn-dark px-4 py-2">
                            Simpan Data
                        </button>

                        <a href="data_mahasiswa.php"
                           class="btn btn-outline-secondary px-4 py-2">
                            Kembali
                        </a>

                    </div>

                </form>

            </section>


            <!-- FOOTER -->
            <footer class="bg-dark text-white text-center rounded-3 p-4 mt-4">

                <p class="mb-1">
                    Web Programming 1
                </p>

                <p class="text-gray-400 text-sm mb-0">
                    &copy; 2026 Muhammad Fauzan
                </p>

            </footer>

        </main>

    </div>
</div>


<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
