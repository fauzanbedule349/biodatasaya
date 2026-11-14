
<?php
require_once "../config/auth.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Profile | Muhammad Fauzan</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Tailwind Configuration -->
    <script>
        tailwind.config = {
            corePlugins: {
                preflight: false
            }
        }
    </script>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 text-slate-100">

<div class="container-fluid">
    <div class="row min-vh-100">

        <!-- SIDEBAR -->
        <aside class="col-lg-3 col-xl-2 bg-slate-900 text-white p-4 border-end border-secondary">

            <div class="mb-5">
                <div class="d-flex align-items-center gap-2 mb-2">
                    <div class="bg-lime-400 text-black rounded-3 p-2 fw-bold">
                        FZ
                    </div>

                    <div>
                        <h5 class="fw-bold mb-0">FAUZAN<span class="text-lime-400">.</span></h5>
                        <small class="text-secondary">Personal Dashboard</small>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <small class="text-secondary fw-bold tracking-widest">
                    MENU UTAMA
                </small>
            </div>

            <nav class="grid grid-cols-2 lg:grid-cols-1 gap-2">

                <a href="dashboard.php"
                   class="d-flex align-items-center gap-3 text-slate-300 no-underline rounded-xl p-3 hover:bg-slate-800 transition">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>

                <a href="index.php"
                   class="d-flex align-items-center gap-3 bg-lime-400 text-black no-underline rounded-xl p-3 fw-semibold">
                    <i class="bi bi-person-circle"></i>
                    <span>My Profile</span>
                </a>

                <a href="layout.php"
                   class="d-flex align-items-center gap-3 text-slate-300 no-underline rounded-xl p-3 hover:bg-slate-800 transition">
                    <i class="bi bi-columns-gap"></i>
                    <span>Layout Lab</span>
                </a>

                <a href="data_mahasiswa.php"
                   class="d-flex align-items-center gap-3 text-slate-300 no-underline rounded-xl p-3 hover:bg-slate-800 transition">
                    <i class="bi bi-database"></i>
                    <span>Data Mahasiswa</span>
                </a>

                <a href="form_mahasiswa.php"
                   class="d-flex align-items-center gap-3 text-slate-300 no-underline rounded-xl p-3 hover:bg-slate-800 transition">
                    <i class="bi bi-person-plus"></i>
                    <span>Tambah Mahasiswa</span>
                </a>

                <a href="../crud/index.php"
                   class="d-flex align-items-center gap-3 text-slate-300 no-underline rounded-xl p-3 hover:bg-slate-800 transition">
                    <i class="bi bi-pencil-square"></i>
                    <span>CRUD Mahasiswa</span>
                </a>

                <a href="../crud-media/index.php"
                   class="d-flex align-items-center gap-3 text-slate-300 no-underline rounded-xl p-3 hover:bg-slate-800 transition">
                    <i class="bi bi-images"></i>
                    <span>CRUD Media</span>
                </a>

            </nav>

            <div class="mt-5 pt-4 border-top border-secondary">
                <a href="../proses/logout.php"
                   class="d-flex align-items-center gap-3 text-red-400 no-underline rounded-xl p-3 hover:bg-red-950 transition">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </a>
            </div>

            <div class="mt-5 text-secondary text-sm">
                <p class="mb-1">Personal Space © 2026</p>
                <p class="mb-0">Built with Bootstrap & Tailwind</p>
            </div>

        </aside>


        <!-- MAIN CONTENT -->
        <main class="col-lg-9 col-xl-10 p-3 p-md-4 p-lg-5">

            <!-- HEADER -->
            <header class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-5">

                <div>
                    <p class="text-lime-400 fw-semibold mb-1">
                        PERSONAL SPACE / PROFILE
                    </p>

                    <h2 class="fw-bold text-white mb-1">
                        My Profile<span class="text-lime-400">.</span>
                    </h2>

                    <p class="text-slate-400 mb-0">
                        Kenalan lebih dekat dengan diri gue.
                    </p>
                </div>

                <div class="bg-slate-900 border border-secondary rounded-pill px-4 py-2">
                    <span class="text-lime-400">●</span>
                    <span class="text-slate-300 text-sm ms-2">
                        Informatics Student
                    </span>
                </div>

            </header>


            <!-- PROFILE HERO -->
            <section class="bg-slate-900 border border-secondary rounded-4 p-4 p-md-5 mb-4">

                <div class="row align-items-center g-4">

                    <!-- FOTO PROFIL -->
                    <div class="col-md-4 col-lg-3 text-center">

                        <div class="d-inline-block position-relative">

                            <img
                                src="../assets/img/PP.png"
                                alt="Foto Muhammad Fauzan"
                                class="rounded-circle border border-4 border-success shadow-lg"
                                style="width: 190px; height: 190px; object-fit: cover;"
                            >

                            <span class="position-absolute bottom-0 end-0 bg-lime-400 border border-dark rounded-circle"
                                  style="width: 25px; height: 25px;">
                            </span>

                        </div>

                    </div>


                    <!-- PROFILE INFORMATION -->
                    <div class="col-md-8 col-lg-9">

                        <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2 mb-3">
                            <i class="bi bi-patch-check-fill me-1"></i>
                            STUDENT PROFILE
                        </span>

                        <h1 class="text-white fw-bold display-5 mb-2">
                            Muhammad Fauzan<span class="text-lime-400">.</span>
                        </h1>

                        <h5 class="text-slate-300 mb-3">
                            Informatics Student
                        </h5>

                        <p class="text-slate-400 leading-relaxed mb-4">
                            Seorang mahasiswa Informatika yang tertarik dengan
                            dunia teknologi, web development, dan UI/UX Design.
                            Terus belajar, mencoba hal baru, dan mengembangkan
                            kemampuan untuk masa depan.
                        </p>

                        <div class="d-flex flex-wrap gap-2">

                            <span class="bg-slate-800 text-slate-200 rounded-pill px-3 py-2 text-sm">
                                <i class="bi bi-code-slash text-lime-400 me-1"></i>
                                Web Development
                            </span>

                            <span class="bg-slate-800 text-slate-200 rounded-pill px-3 py-2 text-sm">
                                <i class="bi bi-palette text-lime-400 me-1"></i>
                                UI/UX Design
                            </span>

                            <span class="bg-slate-800 text-slate-200 rounded-pill px-3 py-2 text-sm">
                                <i class="bi bi-mortarboard text-lime-400 me-1"></i>
                                College Student
                            </span>

                        </div>

                    </div>

                </div>

            </section>


            <!-- QUICK INFORMATION -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-3 mb-4">

                <div class="bg-slate-900 border border-secondary rounded-4 p-4">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-lime-400 text-black rounded-3 p-3">
                            <i class="bi bi-person-vcard fs-4"></i>
                        </div>

                        <div>
                            <small class="text-slate-400">NIM</small>
                            <h6 class="text-white fw-bold mb-0">4112755201250059</h6>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-900 border border-secondary rounded-4 p-4">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-lime-400 text-black rounded-3 p-3">
                            <i class="bi bi-building fs-4"></i>
                        </div>

                        <div>
                            <small class="text-slate-400">Fakultas</small>
                            <h6 class="text-white fw-bold mb-0">FICT</h6>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-900 border border-secondary rounded-4 p-4">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-lime-400 text-black rounded-3 p-3">
                            <i class="bi bi-geo-alt fs-4"></i>
                        </div>

                        <div>
                            <small class="text-slate-400">Tempat Lahir</small>
                            <h6 class="text-white fw-bold mb-0">Bekasi</h6>
                        </div>
                    </div>
                </div>

            </section>


            <!-- BIODATA & EDUCATION -->
            <div class="row g-4 mb-4">

                <!-- BIODATA -->
                <div class="col-lg-5">

                    <div class="bg-slate-900 border border-secondary rounded-4 p-4 h-100">

                        <div class="d-flex align-items-center gap-2 mb-4">
                            <div class="bg-lime-400 text-black rounded-3 p-2">
                                <i class="bi bi-person-lines-fill"></i>
                            </div>

                            <h5 class="text-white fw-bold mb-0">
                                Personal Information
                            </h5>
                        </div>

                        <div class="mb-3">
                            <small class="text-slate-400 d-block mb-1">Nama Lengkap</small>
                            <p class="text-white fw-semibold mb-0">Muhammad Fauzan</p>
                        </div>

                        <hr class="border-secondary">

                        <div class="mb-3">
                            <small class="text-slate-400 d-block mb-1">NIM</small>
                            <p class="text-white fw-semibold mb-0">4112755201250059</p>
                        </div>

                        <hr class="border-secondary">

                        <div class="mb-3">
                            <small class="text-slate-400 d-block mb-1">Tempat, Tanggal Lahir</small>
                            <p class="text-white fw-semibold mb-0">Bekasi, 11 Juli 2006</p>
                        </div>

                        <hr class="border-secondary">

                        <div class="mb-3">
                            <small class="text-slate-400 d-block mb-1">Fakultas</small>
                            <p class="text-white fw-semibold mb-0">FICT</p>
                        </div>

                        <hr class="border-secondary">

                        <div>
                            <small class="text-slate-400 d-block mb-1">Program Studi</small>
                            <p class="text-white fw-semibold mb-0">S1 Informatika</p>
                        </div>

                    </div>

                </div>


                <!-- EDUCATION -->
                <div class="col-lg-7">

                    <div class="bg-slate-900 border border-secondary rounded-4 p-4 h-100">

                        <div class="d-flex align-items-center gap-2 mb-4">
                            <div class="bg-lime-400 text-black rounded-3 p-2">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>

                            <h5 class="text-white fw-bold mb-0">
                                Education Journey
                            </h5>
                        </div>

                        <div class="border-start border-2 border-success ps-4 ms-2">

                            <div class="position-relative mb-4">
                                <span class="position-absolute bg-lime-400 rounded-circle"
                                      style="width: 13px; height: 13px; left: -31px; top: 5px;">
                                </span>

                                <small class="text-lime-400 fw-semibold">ELEMENTARY SCHOOL</small>
                                <h6 class="text-white fw-bold mt-1 mb-1">
                                    SD Negeri 04 Sukahurip
                                </h6>
                                <p class="text-slate-400 text-sm mb-0">
                                    Pendidikan Sekolah Dasar
                                </p>
                            </div>

                            <div class="position-relative mb-4">
                                <span class="position-absolute bg-lime-400 rounded-circle"
                                      style="width: 13px; height: 13px; left: -31px; top: 5px;">
                                </span>

                                <small class="text-lime-400 fw-semibold">JUNIOR HIGH SCHOOL</small>
                                <h6 class="text-white fw-bold mt-1 mb-1">
                                    SMP Negeri 2 Sukatani
                                </h6>
                                <p class="text-slate-400 text-sm mb-0">
                                    Pendidikan Sekolah Menengah Pertama
                                </p>
                            </div>

                            <div class="position-relative mb-4">
                                <span class="position-absolute bg-lime-400 rounded-circle"
                                      style="width: 13px; height: 13px; left: -31px; top: 5px;">
                                </span>

                                <small class="text-lime-400 fw-semibold">VOCATIONAL HIGH SCHOOL</small>
                                <h6 class="text-white fw-bold mt-1 mb-1">
                                    SMK Negeri 2 Cikarang Barat
                                </h6>
                                <p class="text-slate-400 text-sm mb-0">
                                    Pendidikan Sekolah Menengah Kejuruan
                                </p>
                            </div>

                            <div class="position-relative">
                                <span class="position-absolute bg-lime-400 rounded-circle"
                                      style="width: 13px; height: 13px; left: -31px; top: 5px;">
                                </span>

                                <small class="text-lime-400 fw-semibold">UNIVERSITY</small>
                                <h6 class="text-white fw-bold mt-1 mb-1">
                                    Horizon University Indonesia
                                </h6>
                                <p class="text-slate-400 text-sm mb-0">
                                    S1 Informatika
                                </p>
                                <span class="badge bg-success mt-2">Currently Studying</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- HOBBIES & SKILLS -->
            <div class="row g-4 mb-4">

                <!-- HOBBIES -->
                <div class="col-md-6">

                    <div class="bg-slate-900 border border-secondary rounded-4 p-4 h-100">

                        <div class="d-flex align-items-center gap-2 mb-4">
                            <div class="bg-lime-400 text-black rounded-3 p-2">
                                <i class="bi bi-controller"></i>
                            </div>

                            <h5 class="text-white fw-bold mb-0">
                                Things I Enjoy
                            </h5>
                        </div>

                        <div class="grid grid-cols-2 gap-3">

                            <div class="bg-slate-800 rounded-3 p-3">
                                <i class="bi bi-activity text-lime-400 fs-4"></i>
                                <h6 class="text-white fw-semibold mt-2 mb-1">Running</h6>
                                <small class="text-slate-400">Stay active</small>
                            </div>

                            <div class="bg-slate-800 rounded-3 p-3">
                                <i class="bi bi-music-note-beamed text-lime-400 fs-4"></i>
                                <h6 class="text-white fw-semibold mt-2 mb-1">Music</h6>
                                <small class="text-slate-400">Good vibes</small>
                            </div>

                            <div class="bg-slate-800 rounded-3 p-3">
                                <i class="bi bi-code-slash text-lime-400 fs-4"></i>
                                <h6 class="text-white fw-semibold mt-2 mb-1">Coding</h6>
                                <small class="text-slate-400">Create something</small>
                            </div>

                            <div class="bg-slate-800 rounded-3 p-3">
                                <i class="bi bi-controller text-lime-400 fs-4"></i>
                                <h6 class="text-white fw-semibold mt-2 mb-1">Gaming</h6>
                                <small class="text-slate-400">Game time</small>
                            </div>

                            <div class="bg-slate-800 rounded-3 p-3 col-span-2">
                                <i class="bi bi-play-btn text-lime-400 fs-4"></i>
                                <h6 class="text-white fw-semibold mt-2 mb-1">Watching Movies</h6>
                                <small class="text-slate-400">Relax and enjoy</small>
                            </div>

                        </div>

                    </div>

                </div>


                <!-- SKILLS -->
                <div class="col-md-6">

                    <div class="bg-slate-900 border border-secondary rounded-4 p-4 h-100">

                        <div class="d-flex align-items-center gap-2 mb-4">
                            <div class="bg-lime-400 text-black rounded-3 p-2">
                                <i class="bi bi-lightning-charge-fill"></i>
                            </div>

                            <h5 class="text-white fw-bold mb-0">
                                My Skills
                            </h5>
                        </div>

                        <p class="text-slate-400 text-sm mb-4">
                            Beberapa kemampuan yang sedang dan terus gue kembangkan.
                        </p>

                        <div class="mb-4">

                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-white fw-semibold">HTML</span>
                                <span class="text-lime-400 text-sm">Web Development</span>
                            </div>

                            <div class="progress bg-slate-800" style="height: 8px;">
                                <div class="progress-bar bg-success" style="width: 75%;"></div>
                            </div>

                        </div>

                        <div class="mb-4">

                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-white fw-semibold">Microsoft Office</span>
                                <span class="text-lime-400 text-sm">Productivity</span>
                            </div>

                            <div class="progress bg-slate-800" style="height: 8px;">
                                <div class="progress-bar bg-success" style="width: 80%;"></div>
                            </div>

                        </div>

                        <div class="mb-4">

                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-white fw-semibold">UI/UX Design</span>
                                <span class="text-lime-400 text-sm">Design</span>
                            </div>

                            <div class="progress bg-slate-800" style="height: 8px;">
                                <div class="progress-bar bg-success" style="width: 65%;"></div>
                            </div>

                        </div>

                        <div class="bg-slate-800 rounded-3 p-3 mt-4">
                            <p class="text-lime-400 fw-semibold mb-1">
                                <i class="bi bi-stars me-1"></i>
                                Keep Learning
                            </p>

                            <small class="text-slate-400">
                                Progress is more important than perfection.
                                Keep building, keep improving.
                            </small>
                        </div>

                    </div>

                </div>

            </div>


            <!-- FOOTER -->
            <footer class="bg-slate-900 border border-secondary rounded-4 p-4 text-center">

                <h5 class="text-white fw-bold mb-2">
                    That's Me<span class="text-lime-400">.</span>
                </h5>

                <p class="text-slate-400 text-sm mb-2">
                    "Dream big, start small, and keep moving forward."
                </p>

                <div class="border-top border-secondary pt-3 mt-3">
                    <small class="text-slate-500">
                        © 2026 Muhammad Fauzan. Designed with Bootstrap 5 & Tailwind CSS.
                    </small>
                </div>

            </footer>

        </main>

    </div>
</div>


<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
