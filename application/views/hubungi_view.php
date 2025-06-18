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
            background-color: #f8f9fa; /* Header tetap putih/abu-abu sangat terang */
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
            display: flex;
            align-items: center;
        }
        
        .header .back-button {
            font-size: 1.6rem;
            color: #0d6efd;
            margin-right: 15px; 
            text-decoration: none;
        }
        
        .header h5 {
            margin: 0 auto; /* Membuat judul di tengah */
            transform: translateX(-15px); /* Menyesuaikan posisi tengah karena ada tombol kembali */
            font-size: 1.1rem;
            font-weight: 600;
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
        .footer-nav {
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
        .footer-nav .nav-item { text-align: center; color: #6c757d; font-size: 0.75rem; text-decoration: none; }
        .footer-nav .nav-item i { font-size: 1.5rem; display: block; margin: 0 auto 5px; }
        .footer-nav .nav-item.active { color: #0d6efd; }
    </style>
</head>
<body>
    <div class="mobile-container">
        <header class="header">
            <a href="javascript:history.back()" class="back-button">
                <i class="fas fa-arrow-left-circle"></i>
            </a>
            <h5>Hubungi Kami</h5>
        </header>

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

        <footer class="footer-nav">
            <a href="/profile" class="nav-item"> <i class="fas fa-user"></i><span>Profile</span>
            </a>
            <a href="http://localhost/iqracourse/komunitas" class="nav-item"> <i class="fas fa-users"></i><span>Komunitas</span>
            </a>
            <a href="/faq" class="nav-item"> <i class="fas fa-question-circle"></i><span>FAQ</span>
            </a>
            <a href="/hubungi" class="nav-item active"> 
                <i class="fas fa-headset"></i><span>Hubungi Kami</span>
            </a>
        </footer>
    </div>
</body>
</html>