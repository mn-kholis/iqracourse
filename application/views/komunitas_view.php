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
            font-family: 'Roboto', sans-serif;
        }

        .mobile-container {
            max-width: 480px;
            margin: auto;
            background-color: #ffffff; /* Background utama menjadi putih */
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
            font-weight: bold;
            font-size: 18px;
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
        <div class="header">
            <a href="<?= base_url('Home') ?>"  class="back-btn">Kembali</a>
            <h2 class="title">Komunitas</h2>
        </div>

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

        <div class="footer">
            <div>
                <a href="<?= site_url('profile') ?>" style="text-decoration: none; color: #000;">
                    <img src="<?= base_url('assets/profile.png') ?>" alt="Profile">
                    <div><b>Profile</b></div>
                </a>
            </div>
            <div class="active">
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