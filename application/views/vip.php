<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Akses VIP - Iqra' Course</title>
  <!-- Google Font Baloo -->
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Baloo 2', cursive;
      background-color: #ffffff;
    }

    .top-section {
      background-color: #4B9DA7;
      text-align: center;
      position: relative;
      padding-top: 70px;
      padding-bottom: 40px;
    }

    .top-section .close-btn {
      position: absolute;
      top: 16px;
      right: 16px;
      width: 24px;
      height: 24px;
      cursor: pointer;
    }

    .top-section h1 {
      color: white;
      font-size: 22px;
      margin: 10px 0 0;
    }

    .top-section h1 span {
      color: #FFD700;
    }

    .top-section .kids {
      width: 140px;
      margin-top: 10px;
    }

    .content {
      padding: 20px 24px 40px;
      text-align: center;
    }

    .content h2 {
      color: #FFD700;
      font-size: 20px;
      margin-bottom: 10px;
    }

    .content p {
      font-weight: 600;
      font-size: 14px;
      margin-bottom: 20px;
      color: #000;
    }

    .features {
      margin: 0 auto 20px;
      width: fit-content;
      text-align: left;
    }

    .feature-item {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }

    .feature-item img {
      width: 22px;
      height: 22px;
      margin-right: 10px;
    }

    .feature-item span {
      font-size: 14px;
      font-weight: 500;
    }

    .subscribe-button {
      background-color: #4B9DA7;
      color: white;
      border: none;
      padding: 12px;
      border-radius: 10px;
      font-size: 14px;
      width: 100%;
      font-weight: bold;
      cursor: pointer;
    }

    .footer-links {
      font-size: 10px;
      color: #666;
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
    }

    .wwave {
      width: 100%;
      max-height: 60px;
      height: auto;
      display: block;
    }

    @media (min-width: 600px) {
      .content {
        max-width: 400px;
        margin: 0 auto;
      }
    }
  </style>
</head>

<body>
  <!-- Top Section -->
  <div class="top-section">
    <img class="close-btn" src="<?= base_url('assets/icon_silang.png'); ?>" alt="Tutup"
      onclick="window.history.back();" />
    <h1>IQRA’ <span>COURSE</span></h1>
    <img class="kids" src="<?= base_url('assets/logohome.png'); ?>" alt="Anak-anak belajar" />
  </div>

  <img class="wwave" src="<?= base_url('assets/wwave.png'); ?>" alt="Pembatas" />
  </div>

  <!-- Content Section -->
  <div class="content">
    <h2>AKSES VIP</h2>
    <p>Belajar Mengaji IQRA’<br />dan akses semua konten VIP</p>

    <div class="features">
      <div class="feature-item">
        <img src="<?= base_url('assets/icon_gembokvip.png'); ?>" alt="Kunci">
        <span>Buka kunci semua konten</span>
      </div>
      <div class="feature-item">
        <img src="<?= base_url('assets/icon_mahkotavip.png'); ?>" alt="Mahkota">
        <span>Berlangganan VIP</span>
      </div>
    </div>

    <button class="subscribe-button">1 BULAN &nbsp;&nbsp; Rp25.000/bulan</button>

    <div class="footer-links">
      <span>Perjanjian Pembaruan</span>
      <span>Kebijakan Privasi</span>
    </div>
  </div>
</body>

</html>