<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Materi Nilai Islami</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      background-color: #f4f4f4;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: #0096B2;
      color: #fff;
      padding: 16px 20px;
      font-weight: bold;
      text-align: center;
      font-size: 18px;
      position: relative;
    }

    .close-btn {
      position: absolute;
      right: 16px;
      top: 12px;
      background-color: #d32f2f;
      border: none;
      color: #fff;
      font-weight: bold;
      font-size: 18px;
      width: 28px;
      height: 28px;
      border-radius: 50%;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container {
      max-width: 960px;
      margin: auto;
      padding: 20px;
    }

    .card {
      background-color: #fff;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      margin-bottom: 20px;
    }

    .card h3 {
      font-size: 18px;
      margin-bottom: 10px;
      display: flex;
      align-items: center;
      gap: 8px;
      color: #000;
    }

    .card p {
      font-size: 16px;
      color: #333;
      line-height: 1.6;
    }

    .check-icon {
      color: green;
      font-weight: bold;
    }

    .pagination {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
      margin-top: 20px;
    }

    .pagination span {
      font-size: 16px;
      font-weight: bold;
    }

    .pagination a {
      background-color: #00c37a;
      color: white;
      text-decoration: none;
      padding: 10px;
      border-radius: 50%;
      font-size: 18px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }

    @media screen and (max-width: 600px) {
      .card h3 {
        font-size: 16px;
      }

      .card p {
        font-size: 14px;
      }

      .header {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>

  <div class="header">
    Nilai Islami &nbsp; Adab & Akhlak
    <button class="close-btn" onclick="window.history.back()">×</button>
  </div>

  <div class="container">
    <?php if ($halaman == 'berdoa'): ?>
      <div class="card">
        <h3><span class="check-icon">&#10004;</span> Adab Mengangkat Tangan Saat Berdoa</h3>
        <p>
          Ketika seseorang mengangkat tangannya saat berdoa, itu merupakan tanda kerendahan hati dan ketulusan dalam memohon kepada Allah SWT, menunjukkan bahwa ia sepenuhnya menggantungkan harapannya hanya kepada-Nya dan berserah diri atas segala ketetapan-Nya.
        </p>
      </div>

      <div class="card">
        <h3><span class="check-icon">&#10004;</span> Akhlak: Tawadhu’ (Rendah Hati)</h3>
        <p>
          Tawadhu’ adalah sikap merendahkan diri yang tumbuh dari kesadaran bahwa segala kelebihan yang dimiliki hanyalah titipan Allah, sehingga seseorang tidak merasa lebih baik dari orang lain dan selalu berusaha bersikap santun serta menghargai sesama dalam setiap keadaan.
        </p>
      </div>

      <div class="pagination">
        <span>1</span>
        <a href="<?= site_url('Kuisislami/index/berdoa/') ?>">&#10140;</a>
      </div>

    <?php elseif ($halaman == 'salam'): ?>
      <div class="card">
        <h3><span class="check-icon">&#10004;</span> Adab Mengucapkan Salam</h3>
        <p>
          Mengucapkan salam adalah sunnah Nabi yang menebarkan kasih sayang di antara umat Muslim. Ini mencerminkan rasa cinta dan hormat terhadap sesama.
        </p>
      </div>

      <div class="card">
        <h3><span class="check-icon">&#10004;</span> Akhlak: Ramah dan Santun</h3>
        <p>
          Ramah dan santun dalam berbicara serta bersikap mencerminkan pribadi yang baik, menjalin hubungan harmonis dan menunjukkan akhlak Islami yang luhur.
        </p>
      </div>

      <div class="pagination">
        <span>2</span>
        <a href="<?= site_url('kuisislami/index/salam') ?>">&#10140;</a>
      </div>

    <?php else: ?>
      <div class="card">
        <p>Materi belum tersedia.</p>
      </div>
    <?php endif; ?>
  </div>

</body>
</html>
