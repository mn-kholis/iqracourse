<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nilai Islami</title>
  <style>
    /* CSS Tetap Sama Seperti Sebelumnya */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    html, body {
      width: 100%;
      background-color: #f0f0f0;
      font-family: Arial, sans-serif;
    }
    .header {
      background-color: #0096B2;
      color: #fff;
      padding: 15px 20px;
      text-align: center;
      font-weight: bold;
      font-size: 18px;
      position: relative;
    }
    .close-btn {
      position: absolute;
      right: 20px;
      top: 14px;
      color: #fff;
      font-size: 22px;
      cursor: pointer;
      font-weight: bold;
    }
    .wrapper {
      padding: 20px 16px;
      display: flex;
      justify-content: center;
    }
    .content {
      width: 100%;
      max-width: 600px;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    .card {
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
      text-decoration: none;
      transition: transform 0.2s ease;
    }
    .card:hover {
      transform: scale(1.02);
    }
    .card img {
      width: 100px;
      height: auto;
      margin-bottom: 10px;
    }
    .card-title {
      font-size: 16px;
      font-weight: 500;
      color: #333;
      text-align: center;
    }
    @media screen and (min-width: 768px) {
      .header {
        font-size: 22px;
        padding: 20px;
      }
      .close-btn {
        font-size: 26px;
        top: 18px;
      }
      .card img {
        width: 120px;
      }
      .card-title {
        font-size: 18px;
      }
    }
  </style>
</head>
<body>

  <div class="header">
    Nilai Islami
    <span class="close-btn" onclick="window.history.back();">&times;</span>
  </div>

  <div class="wrapper">
    <div class="content">

      <!-- ✅ Perbaiki URL Arahkan ke controller NilaiIslami method pilih() -->
      <a href="<?= site_url('nilaiislami/pilih'); ?>" class="card">
        <img src="<?= base_url('assets/adab.png') ?>" alt="Adab">
        <div class="card-title">Adab & Akhlak</div>
      </a>

      <!-- Kartu 2: Tata Cara Wudhu -->
      <div class="card">
        <img src="<?= base_url('assets/wudhu.png') ?>" alt="Wudhu">
        <div class="card-title">Tata Cara Wudhu</div>
      </div>

      <!-- Kartu 3: Rukun Iman -->
      <div class="card">
        <img src="<?= base_url('assets/iman.png') ?>" alt="Iman">
        <div class="card-title">Rukun Iman</div>
      </div>

    </div>
  </div>

</body>
</html>
