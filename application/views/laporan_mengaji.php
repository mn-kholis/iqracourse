<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Laporan Mengaji</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: #f4f4f4;
    }

    .header {
      background-color: #4ba3a5;
      color: white;
      padding: 14px;
      text-align: center;
      font-size: 18px;
      font-weight: bold;
    }

    .container {
      padding: 10px;
    }

    .card {
      background-color: #fff;
      border-radius: 10px;
      padding: 10px;
      margin-bottom: 12px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      display: flex;
      align-items: flex-start;
      flex-wrap: nowrap;
    }

    .card img {
      width: 100px;
      height: auto;
      margin-right: 12px;
      border-radius: 5px;
    }

    .card-content {
      flex: 1;
    }

    .card-content h4 {
      font-size: 14px;
      margin-bottom: 6px;
    }

    .card-content p {
      font-size: 11px;
      margin: 3px 0;
      color: #444;
      display: flex;
      align-items: center;
    }

    .card-content p img,
    .stage-bar img {
      width: 16px;
      height: 16px;
      margin-right: 6px;
    }

    .stage-bar {
      display: flex;
      align-items: center;
      font-size: 11px;
      margin-bottom: 5px;
    }

    .footer-nav {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: #4ba3a5;
      display: flex;
      justify-content: space-around;
      padding: 8px 0;
    }

    .footer-nav a {
      text-align: center;
      color: white;
      font-size: 11px;
      text-decoration: none;
    }

    .footer-nav img {
      width: 22px;
      height: 22px;
      display: block;
      margin: 0 auto 3px;
    }

    @media (min-width: 768px) {
      .card {
        max-width: 600px;
        margin: 12px auto;
      }

      .header {
        font-size: 20px;
      }
    }
  </style>
</head>
<body>

<div class="header">Laporan Mengaji</div>
<div class="container">
  <?php foreach ($iqra_list as $iqra): ?>
    <div class="card">
      <img src="<?= $iqra['gambar'] ?>" alt="anak">
      <div class="card-content">
        <h4><?= $iqra['judul'] ?></h4>
        <div class="stage-bar">
          <img src="<?= base_url('assets/icon_stage.png') ?>" alt="Stage"> 
          <span>Stage <?= $iqra['stage'] ?></span>
        </div>
        <p><img src="<?= base_url('assets/icon_score.png') ?>" alt="Score"> Score: <?= $iqra['score'] ?></p>
        <p><img src="<?= base_url('assets/icon_bintang.png') ?>" alt="Bintang"> Bintang: <?= $iqra['bintang'] ?></p>
        <p><img src="<?= base_url('assets/icon_materi.png') ?>" alt="Materi"> Materi: <?= $iqra['materi'] ?></p>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<div class="footer-nav">
  <a href="#"><img src="<?= base_url('assets/home.png') ?>" alt="Home">Home</a>
  <a href="#"><img src="<?= base_url('assets/laporan.png') ?>" alt="Laporan">Laporan</a>
  <a href="#"><img src="<?= base_url('assets/notifikasi.png') ?>" alt="Notifikasi">Notifikasi</a>
  <a href="#"><img src="<?= base_url('assets/akun.png') ?>" alt="Akun">Akun</a>
</div>

</body>
</html>
