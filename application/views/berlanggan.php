<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Akses VIP</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background-color: #ffffff;
    }

    .container {
      max-width: 480px;
      margin: auto;
      background-color: #ffffff;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .header {
      background-color: #b3dce5;
      text-align: center;
      padding: 30px 20px 60px;
      position: relative;
      border-bottom-left-radius: 50px;
      border-bottom-right-radius: 50px;
    }

    .back-button {
      position: absolute;
      left: 20px;
      top: 20px;
      width: 36px;
      height: 36px;
      background-image: url('<?= base_url("assets/back.png") ?>');
      background-size: cover;
      background-repeat: no-repeat;
      border: none;
      cursor: pointer;
    }

    .header-title {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 16px;
    }

    .header-title img {
      width: 80px;
      height: auto;
      margin-bottom: 0;
    }

    .header-title h1 {
      margin: 0;
      font-size: 28px;
      color: white;
      font-weight: bold;
    }

    .content {
      padding: 24px 20px;
      flex: 1;
    }

    .content h2 {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 12px;
    }

    .feature {
      display: flex;
      align-items: center;
      margin-bottom: 16px;
    }

    .feature-icon {
      width: 40px;
      height: 40px;
      background-color: #b3dce5;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-right: 12px;
    }

    .feature-icon img {
      width: 20px;
      height: 20px;
    }

    .feature-text {
      font-size: 16px;
      font-weight: 500;
    }

    .btn-subscribe {
      background-color: #29a6c9;
      color: white;
      padding: 14px;
      border-radius: 30px;
      border: none;
      width: 100%;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0 4px #1f7a91;
      margin-top: 20px;
    }

    .btn-subscribe:hover {
      background-color: #248cab;
    }

    .footer-text {
      text-align: center;
      font-size: 12px;
      color: #999;
      margin-top: 12px;
    }

    .footer-text a {
      margin: 0 10px;
      color: #999;
      text-decoration: none;
    }

    .footer-text a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">

    <!-- HEADER -->
    <div class="header">
      <button class="back-button" onclick="window.history.back();"></button>
      <div class="header-title">
        <img src="<?= base_url('assets/anak.png') ?>" alt="Ilustrasi Anak">
        <h1>AKSES VIP</h1>
      </div>
    </div>

    <!-- CONTENT -->
    <div class="content">
      <h2>Belajar Mengaji IQRO’<br>dan akses semua konten VIP</h2>

      <div class="feature">
        <div class="feature-icon">
          <img src="<?= base_url('assets/kunci.png') ?>" alt="Kunci">
        </div>
        <div class="feature-text">Buka kunci semua konten</div>
      </div>

      <div class="feature">
        <div class="feature-icon">
          <img src="<?= base_url('assets/mahkota.png') ?>" alt="VIP">
        </div>
        <div class="feature-text">Berlangganan VIP</div>
      </div>

      <button class="btn-subscribe">1 BULAN &nbsp; Rp25.000/bulan</button>

      <div class="footer-text">
        <a href="#">Perjanjian Pembaruan</a>
        <a href="#">Kebijakan Privasi</a>
      </div>
    </div>

  </div>
</body>
</html>
