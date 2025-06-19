<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($title) ? htmlspecialchars($title) : 'Nilai Islami' ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <style>
    body, html {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
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
        position: relative;
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
        gap: 16px;
    }
    .menu-card {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 20px;
        background-color: #ffffff;
        padding: 15px;
        border-radius: 16px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        text-decoration: none;
        color: inherit;
        transition: transform 0.2s ease-in-out;
    }
    .menu-card:hover {
        transform: translateY(-3px);
    }
    .menu-card img {
        width: 70px;
        height: 70px;
        object-fit: contain;
    }
    .menu-card .card-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: #333;
    }
  </style>
</head>
<body>

<div class="mobile-container">
    <header class="header">
        <span><?= htmlspecialchars($title) ?></span>
         <a href="<?= site_url('home') ?>" class="close-btn">
  <img src="<?= base_url('assets/icon_silang.png') ?>" alt="Tutup" style="width: 100%; height: 100%;">
</a>

    </header>

    <main class="content-wrapper">
        <?php if (!empty($menu_items)): ?>
            <?php foreach($menu_items as $item): ?>
                <a href="<?= site_url($item['url']) ?>" class="menu-card">
                    <img src="<?= base_url('assets/' . $item['image']) ?>" alt="<?= htmlspecialchars($item['title']) ?>">
                    <div class="card-title">
                        <?= htmlspecialchars($item['title']) ?>
                    </div>
                </a>
            <?php endforeach; ?>
        <?php endif; ?>
    </main>
</div>

</body>
</html>