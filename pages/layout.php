
<?php
require_once "../config/auth.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Layout Experiment</title>

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
                   class="bg-gray-700 text-white no-underline rounded-lg p-3">
                    Layout Lab
                </a>

                <a href="data_mahasiswa.php"
                   class="text-gray-200 no-underline rounded-lg p-3 hover:bg-gray-700 transition">
                    Data Mahasiswa
                </a>

                <a href="form_mahasiswa.php"
                   class="text-gray-200 no-underline rounded-lg p-3 hover:bg-gray-700 transition">
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
                    Layout Experiment
                </h1>

                <p class="text-gray-500 mb-0">
                    Web Programming 1
                </p>

            </header>


            <!-- EKSPERIMEN CSS -->
            <section class="card border-0 shadow-sm rounded-4 p-4 mb-4">

                <h2 class="text-2xl font-bold text-gray-900 mb-3">
                    Eksperimen CSS
                </h2>

                <p class="text-gray-600 leading-relaxed mb-0">
                    Halaman ini digunakan untuk mencoba perubahan layout
                    tanpa merusak halaman biodata utama.
                </p>

            </section>


            <!-- PROFILE SUMMARY -->
            <section id="profile" class="card border-0 shadow-sm rounded-4 p-4 mb-4">

                <h2 class="text-2xl font-bold text-gray-900 mb-3">
                    Profile Summary
                </h2>

                <p class="text-gray-600 leading-relaxed mb-0">
                    Saya sedang mempelajari HTML dan CSS untuk membangun
                    website yang terstruktur dan mudah dibaca.
                </p>

            </section>


            <!-- SKILLS -->
            <section id="skills" class="card border-0 shadow-sm rounded-4 p-4 mb-4">

                <h2 class="text-2xl font-bold text-gray-900 mb-3">
                    Skills
                </h2>

                <ul class="list-disc ps-4 text-gray-600">

                    <li class="mb-2">HTML</li>

                    <li class="mb-2">CSS Basic</li>

                    <li>Problem Solving</li>

                </ul>

            </section>


            <!-- LEARNING GOAL -->
            <section id="goal" class="card border-0 shadow-sm rounded-4 p-4 mb-4">

                <h2 class="text-2xl font-bold text-gray-900 mb-3">
                    Learning Goal
                </h2>

                <p class="text-gray-600 leading-relaxed mb-0">
                    Mampu mengubah struktur HTML menjadi berbagai tampilan
                    menggunakan CSS.
                </p>

            </section>


            <!-- FOOTER -->
            <footer class="bg-dark text-white text-center rounded-3 p-4 mt-4">

                <p class="mb-1">
                    &copy; 2026 Muhammad Fauzan. All rights reserved.
                </p>

                <p class="text-gray-400 text-sm mb-0">
                    Web Programming 1
                </p>

            </footer>

        </main>

    </div>
</div>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
