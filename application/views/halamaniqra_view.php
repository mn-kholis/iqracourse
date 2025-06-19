<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body { background-color: #e9ecef; font-family: 'Roboto', sans-serif; }
        .mobile-container { max-width: 480px; margin: auto; background-color: #ffffff; min-height: 100vh; box-shadow: 0 0 10px rgba(0,0,0,0.1); position: relative; }
        .iqra-header { position: fixed; top: 0; width: 100%; max-width: 480px; z-index: 1000; background-color: #459a96; color: white; padding: 12px 15px; display: flex; align-items: center; justify-content: space-between; }
        .iqra-header .header-btn { 
            font-size: 1.5rem; 
            color: white; 
            text-decoration: none; 
        }
        .iqra-header .header-btn img {
            width: 36px;
            height: 36px;
            display: block;
            margin: 0 auto 4px;
        }
        .iqra-header .title { font-family: sans-serif; font-weight: bold; font-size: 1.2rem; }
        main { padding-top: 70px; padding-bottom: 70px; }
        .instruction-text { text-align: center; padding: 20px 15px; font-size: 1.1rem; font-weight: 600; color: #333; font-family: sans-serif; text-decoration:none;}
        .arabic-grid .row { border-bottom: 1px solid #f0f0f0; }
        .arabic-text-cell { display: flex; justify-content: center; align-items: center; padding: 15px 0; font-size: 2.8rem; font-weight: 700; color: #333; }
        .iqra-footer { position: fixed; bottom: 0; width: 100%; max-width: 480px; background-color: #ffffff; border-top: 1px solid #ddd; padding: 8px 20px; display: flex; align-items: center; justify-content: space-between; }
        .iqra-footer .page-number { font-size: 1.5rem; font-weight: bold; color: #555; }
        
        /* CSS untuk tombol navigasi di footer */
        .iqra-footer .nav-btn {
            font-size: 2.2rem;
            text-decoration: none;
        }
        .iqra-footer .next-btn {
            color: #28a745;
        }
        .iqra-footer .prev-btn {
            color: #28a745;
        }
    </style>
</head>
<body>
    <div class="mobile-container">
        <header class="iqra-header">
            <a href="<?= site_url('menuiqra') ?>" class="header-btn close-btn"><img src="<?= base_url('assets/icon_silang.png') ?>" alt="close"></a>
            <span class="title"><?= htmlspecialchars($title) ?></span>
            <a href="<?= site_url('daftarisiiqra/index/1') ?>" class="header-btn menu-btn"><img src="<?= base_url('assets/hamburger.png') ?>" alt="Profile"></i></a>
        </header>

        <main>
            <p class="instruction-text">
                <?= htmlspecialchars($instruction) ?>
            </p>

            <div class="container-fluid arabic-grid">
                <?php foreach ($grid_content as $row): ?>
                    <div class="row">
                        <?php if ($row['type'] == 'full'): ?>
                            <div class="col-12 arabic-text-cell"><?= $row['content'][0] ?></div>
                        <?php elseif ($row['type'] == 'half'): ?>
                            <div class="col-6 arabic-text-cell"><?= $row['content'][0] ?></div>
                            <div class="col-6 arabic-text-cell"><?= $row['content'][1] ?></div>
                        <?php elseif ($row['type'] == 'third'): ?>
                            <div class="col-4 arabic-text-cell"><?= $row['content'][0] ?></div>
                            <div class="col-4 arabic-text-cell"><?= $row['content'][1] ?></div>
                            <div class="col-4 arabic-text-cell"><?= $row['content'][2] ?></div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>

        <footer class="iqra-footer">

            <a href="<?= $next_page_url ?>" class="nav-btn next-btn"><i class="fas fa-arrow-circle-right"></i></a>

            <span class="page-number"><?= $page_arabic ?></span>

            <?php if (isset($prev_page_url) && $prev_page_url): ?>
                <a href="<?= $prev_page_url ?>" class="nav-btn prev-btn"><i class="fas fa-arrow-circle-left"></i></a>
            <?php else: ?>
                <span style="width: 35.2px;"></span> 
            <?php endif; ?>

        </footer>
    </div>
</body>
</html>