<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body { background-color: #f0f2f5; font-family: 'Poppins', sans-serif; margin: 0; padding: 0; }
        .mobile-container { max-width: 480px; margin: auto; background-color: #ffffff; min-height: 100vh; box-shadow: 0 0 10px rgba(0,0,0,0.1); position: relative; }
        .materi-header { position: sticky; top: 0; width: 100%; z-index: 1000; background-color: #459a96; color: white; padding: 12px 15px; display: flex; align-items: center; justify-content: center; }
        .materi-header .title { font-weight: 700; font-size: 1.2rem; }
        .materi-header .close-btn { position: absolute; right: 15px; background-color: #e74c3c; color: white; border-radius: 50%; width: 32px; height: 32px; border: none; font-size: 1.2rem; display: flex; align-items: center; justify-content: center; cursor: pointer; text-decoration: none; }
        main { padding: 25px 20px 80px 20px; }
        .checklist-container { display: flex; flex-direction: column; gap: 25px; }
        .checklist-item { display: flex; flex-direction: column; }
        .item-header { display: flex; align-items: center; gap: 10px; margin-bottom: 8px; }
        .item-header .check-icon { font-size: 1.8rem; color: #28a745; }
        .item-header .item-title { font-size: 1.1rem; font-weight: 700; color: #333; }
        .item-description-box { background-color: #f8f9fa; border: 1px solid #e9ecef; border-radius: 12px; padding: 15px; margin-left: 42px; }
        .item-description-box p { font-size: 0.9rem; color: #555; line-height: 1.5; margin: 0; }
        .materi-footer { position: fixed; bottom: 0; width: 100%; max-width: 480px; background-color: #ffffff; border-top: 1px solid #ddd; padding: 8px 20px; display: flex; align-items: center; justify-content: space-between; }
        .materi-footer .page-number { font-size: 1.5rem; font-weight: bold; color: #555; }
        .materi-footer .nav-btn { font-size: 2.2rem; text-decoration: none; color: #28a745; }
    </style>
</head>
<body>
    <div class="mobile-container">
        <header class="materi-header">
            <span class="title"><?= htmlspecialchars($title) ?></span>
            <a href="#" onclick="window.history.back(); return false;" class="close-btn">&times;</a>
        </header>

        <main>
            <div class="checklist-container">
                <?php if (!empty($checklist_items)): ?>
                    <?php foreach($checklist_items as $item): ?>
                        <div class="checklist-item">
                            <div class="item-header">
                                <i class="fas fa-check-circle check-icon"></i>
                                <h4 class="item-title"><?= htmlspecialchars($item['title']) ?></h4>
                            </div>
                            <div class="item-description-box">
                                <p><?= htmlspecialchars($item['description']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </main>

        <footer class="materi-footer">
            <?php if (isset($prev_page_url) && $prev_page_url): ?>
                <a href="<?= $prev_page_url ?>" class="nav-btn prev-btn"><i class="fas fa-arrow-circle-left"></i></a>
            <?php else: ?>
                <span style="width: 35.2px;"></span> 
            <?php endif; ?>

            <span class="page-number"><?= $page_number ?></span>

            <a href="<?= $next_page_url ?>" class="nav-btn next-btn"><i class="fas fa-arrow-circle-right"></i></a>
        </footer>
    </div>
</body>
</html>