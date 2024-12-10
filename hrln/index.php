<?php
session_start();
if (empty($_SESSION)) {
    echo "<script>alert('Haiii selamat datang'); window.location='login.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uas harlan gilbran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Notiflix -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notiflix@3.2.7/src/notiflix.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#d97706; position: sticky; top: 0; z-index: 1000;" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">Tour<span style="color:#eab308;"><b>Guide</b></span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" id="navHome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="navBooking" onclick="UserPage()">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="navLogout" onclick="logout()">Logout</a>
                    </li>
                </ul>
                <span class="navbar-text d-flex align-items-center">
                    <i class="bi bi-person-circle me-2" style="font-size: 1.5rem;"></i>
                    <?= $_SESSION['nama']; ?>
                </span>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Contents -->
    <div class="container mt-4" id="contents">
        <!-- Konten akan dimuat di sini -->
    </div>
    <!-- End Contents -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/notiflix@3.2.7/dist/notiflix-aio-3.2.7.min.js"></script>

    <script>
        $(document).ready(function () {
            // Muat halaman awal (Home)
            HomePage();

            // Delegasi event untuk navigasi
            $(document).on('click', '.nav-link', function (e) {
                e.preventDefault(); // Mencegah reload halaman
                const target = $(this).text().trim(); // Ambil teks dari tautan

                if (target === 'Home') {
                    HomePage();
                } else if (target === 'Booking') {
                    UserPage();
                } else if (target === 'Logout') {
                    logout();
                }
            });
        });

        // Fungsi untuk memuat halaman Home
        function HomePage() {
            $.ajax({
                url: "pages/home.php", // Ganti dengan path file Home
                dataType: "html",
                success: function (response) {
                    $('#contents').html(response); // Muat konten Home
                },
                error: function () {
                    Notiflix.Notify.failure('Gagal memuat halaman Home');
                }
            });
        }

        // Fungsi untuk memuat halaman Booking
        function UserPage() {
            $.ajax({
                url: "pages/users/tabel.php", // Ganti dengan path file Booking
                dataType: "html",
                success: function (response) {
                    $('#contents').html(response); // Muat konten Booking
                },
                error: function () {
                    Notiflix.Notify.failure('Gagal memuat halaman Booking');
                }
            });
        }

        // Fungsi logout
        function logout() {
            window.location.href = 'logout.php';
        }
    </script>
</body>
</html>
