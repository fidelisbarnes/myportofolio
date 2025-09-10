<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Komsos Paroki HKY Sukoharjo</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheet.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        .nav-link.active {
            font-weight: bold;
            color: yellow !important;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <a class="navbar-brand d-flex align-items-center" href="#home">
                <img src="img/Untitled design.png" alt="Logo" style="width: 50px;" class="rounded-pill me-2">
                <span class="fw-bold site-title">KOMSOS PAROKI HATI KUDUS YESUS SUKOHARJO</span>
            </a>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#info">Info</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sosmed">Sosmed</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section id="home" class="hero d-flex align-items-center py-5 mt-5">
        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
            <div class="hero-text">
                <h1><span class="super">Hola</span> Komsos!</h1>
                <p class="lead">Tertarik dengan pelayanan sesuai passion? Yuk ikut Komsos!</p>
                <button class="btn btn-warning btn-lg" onclick="location.href='#form-daftar'">Daftar Disini!</button>
            </div>

            <!-- Carousel -->
            <div id="komsosCarousel" class="carousel slide custom-carousel ms-md-5" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#komsosCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#komsosCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#komsosCarousel" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/KOMSOS11.JPG" class="d-block w-100 carousel-img" alt="Komsos 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Behind the Scene!</h5>
                            <p>Dibalik layar livestreaming di Misa Sakramen Penguatan</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/KOMSOS27.JPG" class="d-block w-100 carousel-img" alt="Komsos 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Foto Bersama dengan Mgr. Robertus Ruby</h5>
                            <p>Komsos Bersama Uskup Keuskupan Agung Semarang</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/3ffcc58e-6ee2-4beb-8a48-db6b76e78de9.jpg" class="d-block w-100 carousel-img"
                            alt="Komsos 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>#DombaYangHealing!</h5>
                            <p>Ayo semangat, gaboleh sambat :D</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#komsosCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#komsosCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <!-- Section 1: KWI -->
    <section id="info" class="future py-5 text-center">
        <div class="container">
            <a href="https://www.kawali.org/" target="_blank" class="logo-link" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Klik untuk menuju website KWI">
                <img src="img/KWI.png" alt="Logo KWI" class="img-fluid logo-hover mb-4" style="max-height: 180px;">
            </a>
            <h2 class="fw-bold">Konferensi Waligereja Indonesia</h2>
            <p class="mx-auto" style="max-width: 600px;">
                Konferensi Waligereja Indonesia (KWI) adalah persekutuan para uskup Gereja Katolik di Indonesia.
            </p>
        </div>
    </section>

    <!-- Section 2: HKY -->
    <section id="info" class="about py-5 text-center">
        <div class="container">
            <img src="img/HKY.png" alt="Logo HKY" class="img-fluid logo-hover mb-4" style="max-height: 180px;"
                data-bs-toggle="tooltip" data-bs-placement="top" title="Paroki Hati Kudus Yesus Sukoharjo">
            <h2 class="fw-bold">Paroki Hati Kudus Yesus</h2>
            <p class="mx-auto" style="max-width: 600px;">
                Paroki Hati Kudus Yesus Sukoharjo adalah bagian dari Keuskupan Agung Semarang dengan semangat pelayanan
                umat.
            </p>
        </div>
    </section>



    <!-- SOSMED -->
    <section id="sosmed" class="how py-5 text-center">
        <div class="container">
            <?php
            $judulQuery = mysqli_query($conn, "SELECT judul FROM judul_section WHERE nama_section='sosmed' LIMIT 1");

            if ($judulQuery && mysqli_num_rows($judulQuery) > 0) {
                $judul = mysqli_fetch_assoc($judulQuery);
                echo '<h2 class="fw-bold display-5 mb-5">' . $judul['judul'] . '</h2>';
            } else {
                echo '<h2 class="fw-bold display-5 mb-5">Judul tidak ditemukan</h2>';
            }
            ?>

            <div class="row mt-4 d-flex align-items-stretch">
                <div class="col-md-4 d-flex">
                    <div class="card shadow-sm p-3 w-100">
                        <a href="https://instagram.com/komsoshkysukoharjo" target="_blank" class="logo-link" data-bs-toggle="tooltip"
                data-bs-placement="top">
                            <img src="img/ig.png" alt="Instagram" class="img-fluid logo-hover mb-4" width="100%">
                        </a>
                        <p class="mt-3">Tap this! To see our Instagram!</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="card shadow-sm p-3 w-100">
                        <a href="https://maps.app.goo.gl/ZAWqSHBRf8m2amnQA" target="_blank" class="logo-link" data-bs-toggle="tooltip"
                data-bs-placement="top">
                            <img src="img/maps.png" alt="Google Map" class="img-fluid logo-hover mb-4" width="100%">
                        </a>
                        <p class="mt-3">Tap this! To see us on Google Maps!</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="card shadow-sm p-3 w-100">
                        <a href="https://www.youtube.com/@Komsoshkysukoharjo" target="_blank" class="logo-link">
                            <img src="img/yt.png" alt="YouTube"class="img-fluid logo-hover mb-4" width="100%">
                        </a>
                        <p class="mt-3">Tap this! To see our YouTube!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FORM -->
    <section id="form-daftar" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Form Pendaftaran Anggota</h2>
            <form action="simpan_form.php" method="POST" class="mx-auto" style="max-width:600px;" style="height: 100%;">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="lingkungan" class="form-label">Lingkungan</label>
                    <input type="text" class="form-control" id="lingkungan" name="lingkungan" required>
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" class="form-control" id="umur" name="umur" required>
                </div>
                <div class="mb-3">
                    <label for="minat" class="form-label">Minat</label>
                    <select class="form-select" id="minat" name="minat" required>
                        <option value="">-- Pilih Minat --</option>
                        <option value="Foto">Foto</option>
                        <option value="Video">Video</option>
                        <option value="Editing">Editing</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success w-100">Kirim Pendaftaran</button>
            </form>
        </div>

        <!-- CHART -->
        <div style="max-width: 400px; margin: 20px auto; padding:15px; border-radius:10px;">
            <canvas id="minatChart"></canvas>
        </div>
    </section>

    <script>
        let minatChart;
        async function updateChart() {
            const res = await fetch("simpan_pendaftar.php");
            const data = await res.json();
            const ctx = document.getElementById('minatChart').getContext('2d');
            if (minatChart) minatChart.destroy();
            minatChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: data.labels,
                    datasets: [{
                        label: 'Jumlah Pendaftar',
                        data: data.values,
                        backgroundColor: ['#ff6384', '#36a2eb', '#ffce56', '#4caf50'],
                    }]
                },
                options: {
                    responsive: true,
                    plugins: { legend: { position: 'bottom' } }
                }
            });
        }
        updateChart();
        setInterval(updateChart, 5000);
    </script>

    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container">
            <p class="mb-1">&copy; 2025 Komsos Paroki Hati Kudus Yesus Sukoharjo</p>
            <small>Designed with ❤️ by KOMSOS</small>
        </div>
    </footer>

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    	const tooltipList = [...tooltipTriggerList].map(el => new bootstrap.Tooltip(el));
        const sections = document.querySelectorAll("section");
        const navLinks = document.querySelectorAll(".nav-link");
		
        window.addEventListener("scroll", () => {
            let current = "";

            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100; // biar pas
                const sectionHeight = section.clientHeight;

                if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                    current = section.getAttribute("id");
                }
            });

            navLinks.forEach(link => {
                link.classList.remove("active");
                if (link.getAttribute("href") === "#" + current) {
                    link.classList.add("active");
                }
            });
        });
    </script>

</body>

</html>
