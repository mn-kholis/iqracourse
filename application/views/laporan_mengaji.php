<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Laporan Mengaji</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    /* Reset dan Font Dasar */
    * {
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: #f4f4f4;
    }

    /* Header Aplikasi */
    .header {
      background-color: #4ba3a5;
      color: white;
      padding: 14px;
      text-align: center;
      font-size: 18px;
      font-weight: bold;
    }

    /* Kontainer Utama Konten */
    .container {
      padding: 10px;
    }

    /* Kartu Laporan Mengaji */
    .card {
      background-color: #fff;
      border-radius: 10px;
      padding: 10px;
      margin-bottom: 12px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      display: flex; /* Menggunakan flexbox untuk tata letak internal */
      align-items: flex-start; /* Menyelaraskan item di atas secara vertikal */
      flex-wrap: nowrap;
    }

    /* Gambar Anak di Kartu */
    .card img {
      width: 100px;
      height: auto;
      margin-right: 12px;
      border-radius: 5px;
    }

    /* Konten Teks di Dalam Kartu (di sebelah gambar anak) */
    .card-content {
      flex: 1; /* Memenuhi sisa ruang */
    }

    /* Judul IQRA' (misal "IQRA' 1") - Kembali ke dalam card-content */
    .card-content h4 {
      font-size: 14px;
      margin-bottom: 8px; /* Lebih banyak ruang di bawah judul */
    }

    /* Paragraph untuk Score, Bintang, Materi */
    .card-content p {
      font-size: 11px;
      margin: 3px 0;
      color: #444;
      display: flex;
      align-items: center;
    }

    /* Ikon di dalam card-content (Score, Bintang, Materi) */
    .card-content p img {
      width: 16px;
      height: 16px;
      margin-right: 6px;
    }

    /* Kontainer untuk ikon Stage dan teks "Stage" */
    .stage-header {
      display: flex;
      align-items: center;
      font-size: 13px; /* Ukuran font teks "Stage" */
      font-weight: bold;
      color: #333;
      margin-bottom: 5px; /* Jarak antara header stage dan progress bar */
    }

    .stage-header img {
      width: 20px; /* Ukuran ikon stage */
      height: 20px;
      margin-right: 5px;
    }

    /* Kontainer untuk seluruh progress bar (bagian abu-abu) */
    .progress-container {
      background-color: #e0e0e0; /* Warna latar belakang abu-abu */
      border-radius: 5px;
      height: 10px;
      width: 100%; /* Mengisi lebar yang tersedia */
      overflow: hidden;
      margin-bottom: 8px; /* Jarak antara progress bar dan baris Score */
      position: relative; /* Penting untuk memposisikan teks "0/11" di dalamnya secara absolut */
    }

    /* Bar yang menunjukkan progress (bagian terisi, misalnya hijau) */
    .progress-bar {
      height: 100%;
      background-color: #62c162; /* Warna hijau untuk progress yang terisi. Ubah jika ingin warna lain */
      width: 0%; /* Lebar awal, akan diisi oleh PHP */
      border-radius: 5px;
    }

    /* Teks angka progress (misalnya "0/11") */
    .progress-text {
      position: absolute;
      right: 5px;
      top: -2px; /* Sesuaikan posisi vertikal teks */
      font-size: 9px;
      color: #555;
    }

    /* Footer Navigasi */
    .footer-nav {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: #4ba3a5;
      display: flex;
      justify-content: space-around;
      padding: 8px 0;
      z-index: 10;
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

    /* Media Queries untuk Layar Lebih Besar */
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
    <?php
      // Hitung progress untuk progress bar stage
      $current_stage = isset($iqra['current_stage']) ? $iqra['current_stage'] : 0;
      $total_stages = isset($iqra['total_stages']) ? $iqra['total_stages'] : 11;

      $progress_percentage = ($total_stages > 0) ? ($current_stage / $total_stages) * 100 : 0;
    ?>
    <div class="card">
      <img src="<?= $iqra['gambar'] ?>" alt="anak">
      <div class="card-content">

        <div class="stage-header">
          <img src="<?= base_url('assets/icon_stage.png') ?>" alt="Stage">
          <span>Stage</span>
        </div>

        <div class="progress-container">
          <div class="progress-bar" style="width: <?= $progress_percentage ?>%;"></div>
          <span class="progress-text"><?= $current_stage ?>/<?= $total_stages ?></span>
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