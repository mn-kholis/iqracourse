<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Materi Nilai Islami</title>
  <style>
    body {
      background: #f5f5f5;
      font-family: sans-serif;
      margin: 0;
    }
    .header {
      background: #0096B2;
      color: #fff;
      padding: 14px;
      font-weight: bold;
      text-align: center;
    }
    .card {
      background: #fff;
      margin: 20px;
      padding: 16px;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .btn-next {
      display: flex;
      justify-content: center;
      margin: 20px;
    }
    .btn-next a {
      text-decoration: none;
      background: #00c37a;
      padding: 12px;
      border-radius: 50%;
      color: #fff;
      font-size: 20px;
    }
  </style>
</head>
<body>
  <div class="header">
    Nilai Islami &nbsp; Adab & Akhlak
  </div>

  <div class="card">
    <?php if ($halaman == 'berdoa'): ?>
      <strong>✓ Adab Mengangkat Tangan Saat Berdoa</strong>
      <p>Ketika seseorang mengangkat tangannya saat berdoa, itu merupakan tanda kerendahan hati...</p>
      <strong>✓ Akhlak: Tawadhu’ (Rendah Hati)</strong>
      <p>Tawadhu’ adalah sikap merendahkan diri yang tumbuh dari kesadaran bahwa segala kelebihan hanya titipan Allah...</p>

      <div class="btn-next">
        <a href="<?= site_url('kuisislami/index/berdoa') ?>">→</a>
      </div>

    <?php elseif ($halaman == 'salam'): ?>
      <strong>✓ Adab Mengucapkan Salam</strong>
      <p>Mengucapkan salam adalah sunnah Nabi yang menebarkan kasih sayang di antara umat Muslim...</p>
      <strong>✓ Akhlak: Ramah dan Santun</strong>
      <p>Ramah menunjukkan akhlak mulia yang menciptakan suasana hangat dalam pergaulan...</p>

      <div class="btn-next">
        <a href="<?= site_url('kuisislami/index/salam') ?>">→</a>
      </div>
    <?php else: ?>
      <p>Materi belum tersedia.</p>
    <?php endif; ?>
  </div>
</body>
</html>
