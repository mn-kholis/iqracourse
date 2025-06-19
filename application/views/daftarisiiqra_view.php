<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Isi - <?= htmlspecialchars($title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&family=Noto+Sans+Arabic:wght@500&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #e9ecef;
            font-family: 'Roboto', sans-serif;
        }
        .mobile-container {
            max-width: 480px; margin: auto; background-color: #ffffff; min-height: 100vh;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .contents-header {
            position: sticky; top: 0; z-index: 1000;
            background-color: #459a96; color: white; padding: 12px 15px;
            display: flex; align-items: center; justify-content: center;
        }
        .contents-header .title {
            font-weight: bold; font-size: 1.2rem;
        }
        .contents-header .close-btn {
            position: absolute; right: 15px;
            background-color: #E74C3C; color: white;
            border: none; border-radius: 50%;
            width: 30px; height: 30px;
            font-size: 1rem; font-weight: bold;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; text-decoration: none;
        }
        .list-container {
            padding: 15px;
        }
        .page-link {
            display: block;
            background-color: white;
            border-radius: 12px;
            padding: 15px;
            margin-bottom: 12px;
            text-decoration: none;
            color: #333;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            font-weight: 500;
            font-size: 1rem;
        }
        .page-link:hover {
            background-color: #f8f9fa;
        }
        .page-link .arabic-title {
            font-family: 'Noto Sans Arabic', sans-serif;
            font-size: 1.2rem;
            margin-left: 8px;
            color: #111;
        }
    </style>
</head>
<body>
    <div class="mobile-container">
        <header class="contents-header">
            <span class="title"><?= htmlspecialchars($title) ?></span>
            <a href="#" class="close-btn" onclick="window.history.back(); return false;">&times;</a>
        </header>

        <main class="list-container">
            <?php foreach ($page_list as $item): ?>
                <a href="<?= site_url('halamaniqra/index/' . $item['page']) ?>" class="page-link">
                    Halaman <?= $item['page'] ?> - 
                    <span class="arabic-title"><?= $item['title'] ?></span>
                </a>
            <?php endforeach; ?>
        </main>
    </div>
</body>
</html>