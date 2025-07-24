<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e0e0e0;
            font-family: 'Roboto', sans-serif;
        }
        .container {
            max-width: 480px;
            margin: auto;
            background-color: #D8D8D8;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .header {
            position: fixed; 
            top: 0;
            width: 100%;
            max-width: 480px;
            z-index: 1000; 
            background-color: #ffffff;
            padding: 16px;
            border-bottom: 1px solid #ddd;
            align-items: center;
            text-align: center;
            padding: 16px;
        }
        .header .title {
            margin: 0;
            font-size: 20px;
        }
        .back-btn {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            width: 24px;
            height: 24px;
            background-image: url('<?= base_url("assets/back.png") ?>');
            background-size: cover;
            background-repeat: no-repeat;
            text-indent: -9999px;
            border: none;
        }
        .content {
            padding: 16px;
            flex: 1;
            padding-top: 70px;  /* Disesuaikan dengan tinggi header baru */
            padding-bottom: 80px;
            background-color: #f0f2f5; /* Background area postingan */
        }
        .card {
            background-color: #fefefe;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 16px;
            margin-bottom: 20px;
        }
        .profile-pic {
            width: 80px;
            height: 80px;
            background-image: url('<?= base_url("assets/profile.png") ?>');
            background-size: cover;
            background-position: center;
            border-radius: 50%;
            margin-right: 16px;
        }
        .row {
            display: flex;
            align-items: center;
        }
        .username {
            font-weight: bold;
            font-size: 18px;
        }
        .email {
            color: #555;
            font-size: 14px;
        }
        .btn {
            display: inline-block;
            background-color: #FFA500;
            color: #fff;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 20px;
            margin-top: 8px;
            box-shadow: 0 4px #d48800;
        }
        .btn:hover {
            background-color: #e69500;
        }
        .btn-subscribe {
            background-color: #4899a0;
            box-shadow: 0 4px #357779;
        }
        .btn-subscribe:hover {
            background-color: #3e878e;
        }
        .centered {
            text-align: center;
        }
        .footer {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 480px;
            display: flex;
            justify-content: space-around;
            background-color: #ffffff;
            padding: 10px 0;
            border-top: 1px solid #ccc;
        }
        .footer div {
            text-align: center;
            font-size: 12px;
            color: #333;
        }
        .footer img {
            width: 36px;
            height: 36px;
            display: block;
            margin: 0 auto 4px;
        }
        .footer .active {
            background-color: #f2f2f2;
            border-radius: 10px;
            padding: 4px 8px;
        }
        @media (min-width: 600px) {
            .container {
                margin-top: 40px;
                border-radius: 8px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <!-- Header -->
    <div class="header">
        <a href="<?= base_url('Home') ?>"  class="back-btn">Kembali</a>
        <h2 class="title">Profile</h2>
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Profil -->
        <div class="card">
            <div class="row">
                <div class="profile-pic"></div>
                <div>
                    <div class="username"><?= $user['username'] ?></div>
                    <div class="email"><?= $user['email'] ?></div>
                    <a href="<?= site_url('profile/ubah_profil') ?>" class="btn">Ubah Profil</a>
                </div>
            </div>
        </div>

        <!-- Berlangganan -->
        <div class="card centered">
            <h4>Berlangganan</h4>
            <p>Saat ini anda belum berlangganan</p>
            <a href="<?= site_url('Vip') ?>" class="btn btn-subscribe">Klik Untuk Berlangganan</a>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="active">
            <a href="<?= site_url('profile') ?>" style="text-decoration: none; color: #000;">
                <img src="<?= base_url('assets/profile.png') ?>" alt="Profile">
                <div><b>Profile</b></div>
            </a>
        </div>
        <div>
            <a href="<?= site_url('komunitas') ?>" style="text-decoration: none; color: #000;">
                <img src="<?= base_url('assets/komunitas.png') ?>" alt="Komunitas">
                <div><b>Komunitas</b></div>
            </a>
        </div>
        <div>
            <a href="<?= site_url('Faq') ?>" style="text-decoration: none; color: #000;">
                <img src="<?= base_url('assets/faq.png') ?>" alt="FAQ">
                <div><b>FAQ</b></div>
            </a>
        </div>
        <div>
            <a href="<?= site_url('hubungi') ?>" style="text-decoration: none; color: #000;">
                <img src="<?= base_url('assets/hubungi.png') ?>" alt="Hubungi Kami">
                <div><b>Hubungi Kami</b></div>
            </a>
        </div>
    </div>
</div>
</body>
</html>
