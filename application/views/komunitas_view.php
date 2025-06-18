<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komunitas Orang Tua Iqra' Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        body {
            background-color: #f0f2f5; /* Sedikit penyesuaian warna background body */
            color: #1c1e21; /* Warna teks utama */
        }

        .mobile-container {
            max-width: 480px;
            margin: auto;
            background-color: #ffffff; /* Background utama menjadi putih */
            min-height: 100vh;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            position: relative;
        }

        /* --- BAGIAN HEADER YANG DIPERBAIKI --- */
        .header {
            position: fixed; 
            top: 0;
            width: 100%;
            max-width: 480px;
            z-index: 1000; 
            background-color: #ffffff;
            padding: 12px 15px; /* Sedikit penyesuaian padding */
            border-bottom: 1px solid #ddd;
            
            /* Aturan Flexbox untuk mensejajarkan tombol dan judul */
            display: flex;
            align-items: center;
        }
        
        /* CSS KHUSUS UNTUK TOMBOL KEMBALI (BERSIH) */
        .header .back-button {
            font-size: 1.6rem; /* Sedikit diperbesar agar mudah diklik */
            color: #0d6efd;
            margin-right: 12px; /* Jarak antara tombol dan judul */
            text-decoration: none;
        }
        
        .header h5 {
            margin: 0;
            font-size: 1.1rem; /* Ukuran font judul disesuaikan */
            font-weight: 600; /* Font weight semi-bold */
        }
        /* CSS Sisa yang berpotensi konflik (header-action-button) TELAH DIHAPUS */
        
        main {
            padding-top: 70px;  /* Disesuaikan dengan tinggi header baru */
            padding-bottom: 80px;
            background-color: #f0f2f5; /* Background area postingan */
        }

        /* --- Penyesuaian Minor pada Post Card --- */
        .post-card {
            background-color: #ffffff;
            border: none; /* Menghilangkan border */
            border-radius: 8px;
            margin: 12px; /* Margin seragam */
            padding: 15px;
            box-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }
        .post-header { display: flex; align-items: center; margin-bottom: 10px; }
        .post-header .avatar { font-size: 2rem; color: #0d6efd; margin-right: 10px; }
        .post-header .user-info .username { font-weight: 600; margin: 0; }
        .post-header .user-info .time { font-size: 0.8rem; color: #6c757d; }
        .post-body p { margin-bottom: 15px; font-size: 0.95rem; color: #1c1e21; line-height: 1.4; }
        .post-footer { display: flex; align-items: center; color: #6c757d; font-size: 0.9rem; border-top: 1px solid #eee; padding-top: 10px; }
        .post-footer .action-item { margin-right: 20px; display: flex; align-items: center; }
        .post-footer .action-item i { margin-right: 6px; }
        .post-footer .more-options { margin-left: auto; color: #6c757d; }

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
            <h5>Komunitas Orang Tua Iqra' Course</h5>
        </header>

        <main>
            <?php if (!empty($posts)): ?>
                <?php foreach ($posts as $post): ?>
                <div class="post-card">
                    <div class="post-header">
                        <i class="fas fa-user-circle avatar"></i>
                        <div class="user-info">
                            <p class="username"><?php echo htmlspecialchars($post['username'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <span class="time"><?php echo htmlspecialchars($post['time'], ENT_QUOTES, 'UTF-8'); ?></span>
                        </div>
                    </div>
                    <div class="post-body">
                        <p><?php echo htmlspecialchars($post['content'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                    <div class="post-footer">
                        <div class="action-item"><i class="far fa-heart"></i> <?php echo htmlspecialchars($post['likes'], ENT_QUOTES, 'UTF-8'); ?></div>
                        <div class="action-item"><i class="far fa-comment-dots"></i> <?php echo htmlspecialchars($post['comments'], ENT_QUOTES, 'UTF-8'); ?></div>
                        <div class="action-item"><i class="far fa-share-square"></i> <?php echo htmlspecialchars($post['shares'], ENT_QUOTES, 'UTF-8'); ?></div>
                        <div class="more-options"><i class="fas fa-ellipsis-h"></i></div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </main>

        <footer class="footer-nav">
            <a href="#" class="nav-item"><i class="fas fa-user"></i><span>Profile</span></a>
            <a href="#" class="nav-item active"><i class="fas fa-users"></i><span>Komunitas</span></a>
            <a href="#" class="nav-item"><i class="fas fa-question-circle"></i><span>FAQ</span></a>
            <a href="https://localhost/iqracourse/Hubungi" class="nav-item"><i class="fas fa-headset"></i><span>Hubungi Kami</span></a>
        </footer>
    </div>
</body>
</html>