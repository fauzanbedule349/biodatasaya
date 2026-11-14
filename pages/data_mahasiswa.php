
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
                   class="bg-gray-700 text-white no-underline rounded-lg p-3">
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
                    Data Mahasiswa
                </h1>

                <p class="text-gray-500 mb-0">
                    Daftar mahasiswa yang tersimpan di database.
                </p>

            </header>

            <!-- DAFTAR MAHASISWA -->
            <section class="card border-0 shadow-sm rounded-4 p-3 p-md-4">

                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">

                    <h2 class="text-2xl font-bold text-gray-900 mb-0">
                        Daftar Mahasiswa
                    </h2>

                    <a href="form_mahasiswa.php"
                       class="btn btn-dark">
                        + Tambah Mahasiswa
                    </a>

                </div>

                <!-- PESAN SUKSES -->
                <?php if (
                    isset($_GET["status"]) &&
                    $_GET["status"] === "sukses"
                ): ?>

                    <div class="alert alert-success rounded-3" role="alert">
                        Data berhasil ditambahkan.
                    </div>

                <?php endif; ?>

                <!-- TABEL -->
                <div class="table-responsive">

                    <table class="table table-bordered table-hover align-middle mb-0">

                        <thead class="table-light">

                            <tr>
                                <th class="text-center">No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Program Studi</th>
                                <th>Email</th>
                            </tr>

                        </thead>

                        <tbody>

                            <?php if ($result && $result->num_rows > 0): ?>

                                <?php $no = 1; ?>

                                <?php while ($row = $result->fetch_assoc()): ?>

                                    <tr>

                                        <td class="text-center">
                                            <?= $no++; ?>
                                        </td>

                                        <td>
                                            <?= htmlspecialchars($row["nim"]); ?>
                                        </td>

                                        <td class="font-semibold text-gray-900">
                                            <?= htmlspecialchars($row["nama"]); ?>
                                        </td>

                                        <td>
                                            <?= htmlspecialchars($row["program_studi"]); ?>
                                        </td>

                                        <td>
                                            <?= htmlspecialchars($row["email"]); ?>
                                        </td>

                                    </tr>

                                <?php endwhile; ?>

                            <?php else: ?>

                                <tr>
                                    <td colspan="5" class="text-center text-secondary py-4">
                                        Belum ada data mahasiswa.
                                    </td>
                                </tr>

                            <?php endif; ?>

                        </tbody>

                    </table>

                </div>

            </section>

            <!-- FOOTER -->
            <footer class="bg-dark text-white text-center rounded-3 p-4 mt-4">

                <p class="mb-1">
                    &copy; 2026 Muhammad Fauzan
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

<?php
$conn->close();
?>

</body>
</html>