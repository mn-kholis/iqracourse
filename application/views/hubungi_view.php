<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Iqra' Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        body {
            background-color: #e9ecef; /* Warna background abu-abu terang */
            color: #1c1e21;
        }

        .mobile-container {
            max-width: 480px;
            margin: auto;
            background-color: #e9ecef; /* Background container utama disamakan dengan body */
            min-height: 100vh;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            position: relative;
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
        main {
            padding-top: 70px;
            padding-bottom: 80px;
            padding-left: 20px; /* Padding untuk konten */
            padding-right: 20px;
        }

        /* --- CSS BARU UNTUK TOMBOL KONTAK --- */
        .contact-button {
            display: flex;
            align-items: center;
            background-color: #ffffff;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 16px;
            text-decoration: none;
            color: #1c1e21;
            font-weight: 500;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            transition: transform 0.2s;
        }

        .contact-button:hover {
            transform: translateY(-2px); /* Efek sedikit terangkat saat disentuh */
            color: #1c1e21;
        }

        .contact-button i {
            font-size: 1.5rem;
            color: #0d6efd;
            margin-right: 15px;
            width: 30px; /* Memberi lebar tetap agar teks sejajar */
            text-align: center;
        }
        
        /* --- Footer Navigasi --- */
        /* --- Footer Navigasi --- */
        .footer {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 480px;
            background-color: #ffffff;
            border-top: 1px solid #ddd;
            display: flex;
            justify-content: space-around;
            padding: 8px 0;
        }
        .footer {
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
    </style>
</head>
<body>
    <div class="mobile-container">
        <!-- Header -->
        <div class="header">
            <a href="<?= base_url('Home') ?>"  class="back-btn">Kembali</a>
            <h2 class="title">Hubungi Kami</h2>
        </div>

        <main>
            <a href="<?= site_url('chat/cs') ?>" class="contact-button">
                <i class="fas fa-headset"></i>
                <span>Hubungi Customer Service</span>
            </a>

            <a href="<?= site_url('chat/ustad') ?>" class="contact-button">
                <i class="fas fa-user-tie"></i>
                <span>Hubungi Ustad</span>
            </a>
        </main>

        <div class="footer">
            <div>
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
                <a href="<?= site_url('faq') ?>" style="text-decoration: none; color: #000;">
                    <img src="<?= base_url('assets/faq.png') ?>" alt="FAQ">
                    <div><b>FAQ</b></div>
                </a>
            </div>
            <div class="active">
                <a href="<?= site_url('hubungi') ?>" style="text-decoration: none; color: #000;">
                    <img src="<?= base_url('assets/hubungi.png') ?>" alt="Hubungi Kami">
                    <div><b>Hubungi Kami</b></div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>