<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQRA COURSE</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #F6DDCE;
            font-family: 'Roboto', sans-serif;
            padding-top: 30px;
            box-sizing: border-box;
        }

        .container {
            max-width: 400px;
            padding-top: 20px;
            padding-bottom: 40px;
        }

        .learning-card {
            position: relative;
            background-color: white;
            border-radius: 20px;
            max-width: 300px;
            margin: 0 auto 24px auto;
            z-index: 1;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding-bottom: 6px;
            margin-top: 40px;
        }

        .card-content {
            position: relative;
            z-index: 2;
            display: flex;
            justify-content: space-around;
            padding: 16px;
            font-weight: 600;
            color: #2b6e73;
        }

        .card-text {
            align-items: flex-start;
            font-size: 0.85rem;
            max-width: 80%;
        }

        .card-icon {
            width: 60px;
            height: auto;
        }

        .wave-shape {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 60px;
            background: url('<?= base_url("assets/wave.png") ?>') no-repeat bottom;
            background-size: cover;
            z-index: 1;
        }

        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #4B9DA7;
            display: flex;
            justify-content: space-around;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .bottom-nav a {
            width: 25%;
            color: white;
            text-align: center;
            font-size: 0.8rem;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            padding: 5px 10px;
            transition: all 0.3s ease-in-out;
            border-radius: 15px;
        }

        .bottom-nav a:hover,
        .bottom-nav a.active {
            background-color: #3D8088;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .bottom-nav a.active img {
            filter: brightness(1.1);
        }

        .bottom-nav a .nav-label {
            font-size: 0.8rem;
            margin-top: 4px;
        }

        .logo-img {
            width: 120px;
            max-width: 100%;
        }

        .iqra-title {
            font-size: 2.8rem;
            font-weight: 700;
            margin: 0;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        .course-button {
            background-color: #4ca7a8;
            color: #fbd43d;
            border-radius: 20px;
            padding: 6px 20px;
            border: none;
            font-weight: bold;
            /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); */
        }

        .logo-header {
            background-color: transparent;
            padding: 10px;
        }

        .icon-img {
            width: 40px;
            height: auto;
        }

        .top-icons {
            position: fixed;
            top: 20px;
            right: 20px;
            display: flex;
            gap: 10px;
            z-index: 1100;
        }

        .top-icons img {
            width: 28px;
            height: 28px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <!-- Top-right Icons -->
    <div class="top-icons">
        <a href="<?= base_url('Profile') ?>">
            <img src="<?= base_url('assets/vip.png') ?>" alt="VIP" title="VIP Access">
        </a>
        <a href="<?= base_url('logout') ?>">
            <img src="<?= base_url('assets/logout.png') ?>" alt="Logout" title="Keluar">
        </a>
    </div>

    <!-- Main Content -->
    <div class="container mt-4 mb-5">

        <!-- Logo, Title, Button -->
        <div class="d-flex align-items-center justify-content-center gap-3 mb-4 flex-wrap logo-header">
            <img src="<?= base_url('assets/logohome.png') ?>" class="logo-img" alt="Iqra Icon">
            <div class="text-start">
                <h1 class="iqra-title">IQRA'</h1>
                <button class="course-button mt-2">COURSE</button>
            </div>
        </div>

        <!-- Cards -->
        <a href="<?= base_url('Halamaniqra') ?>" class="text-decoration-none">
            <div class="learning-card mx-auto d-block mb-4">
                <div class="card-content">
                    <div class="card-text">Belajar Membaca Iqra’</div>
                    <img src="<?= base_url('assets/iqro.png') ?>" class="card-icon" alt="Iqro Icon">
                </div>
                <div class="wave-shape"></div>
            </div>
        </a>
        <a href="<?= base_url('Halamaniqra') ?>" class="text-decoration-none">
            <div class="learning-card">
                <div class="card-content">
                    <div class="card-text">Belajar Nilai Islami</div>
                    <img src="<?= base_url('assets/nilaiislam.png') ?>" class="card-icon" alt="Nilai Islami">
                </div>
                <div class="wave-shape"></div>
            </div>
        </a>
        <a href="<?= base_url('Halamaniqra') ?>" class="text-decoration-none">
            <div class="learning-card">
                <div class="card-content">
                    <div class="card-text">Belajar Membaca Doa</div>
                    <img src="<?= base_url('assets/doa.png') ?>" class="card-icon" alt="Doa Icon">
                </div>
                <div class="wave-shape"></div>
            </div>
        </a>
    </div>

    <!-- Bottom Navigation -->
    <div class="bottom-nav">
        <a href="<?= base_url('Home') ?>">
            <img src="<?= base_url('assets/home.png') ?>" class="icon-img" />
            <span class="nav-label">Home</span>
        </a>
        <a href="<?= base_url('Laporanmengaji') ?>">
            <img src="<?= base_url('assets/laporan.png') ?>" class="icon-img" />
            <span class="nav-label">Laporan</span>
        </a>
        <a href="<?= base_url('Notifikasi') ?>">
            <img src="<?= base_url('assets/notifikasi.png') ?>" class="icon-img" />
            <span class="nav-label">Notifikasi</span>
        </a>
        <a href="<?= base_url('Profile') ?>">
            <img src="<?= base_url('assets/akun.png') ?>" class="icon-img" />
            <span class="nav-label">Profile</span>
        </a>
    </div>


</body>

</html>