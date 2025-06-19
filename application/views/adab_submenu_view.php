<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? htmlspecialchars($title) : 'Adab & Akhlak' ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
        }
        .mobile-container {
            max-width: 480px;
            margin: auto;
            background-color: #f0f2f5;
            min-height: 100vh;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #4ba3a5;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 1.2rem;
            font-weight: 700;
            position: sticky;
            top: 0;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .close-btn {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            font-size: 1.2rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            text-decoration: none;
            line-height: 1;
        }
        .content-wrapper {
            padding: 20px 15px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .submenu-link {
            display: block;
            background-color: #ffffff;
            border-radius: 25px;
            padding: 14px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.08);
            text-decoration: none;
            color: #333;
            text-align: left;
            font-weight: 500;
            font-size: 0.95rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .submenu-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
        }
    </style>
</head>
<body>

<div class="mobile-container">
    <header class="header">
        <span><?= htmlspecialchars($title) ?></span>
        <a href="#" onclick="window.history.back(); return false;" class="close-btn">&times;</a>
    </header>

    <main class="content-wrapper">
        <?php if (!empty($adab_list)): ?>
            <?php foreach($adab_list as $item): ?>
                <a href="<?= site_url('materinilaiislami/index/' . $item['slug']) ?>" class="submenu-link">
                    <?= htmlspecialchars($item['title']) ?>
                </a>
            <?php endforeach; ?>
        <?php endif; ?>
    </main>
</div>

</body>
</html>