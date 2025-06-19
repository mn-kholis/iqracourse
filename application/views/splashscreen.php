<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IQRA Course</title>
  
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      height: 100%;
      font-family: 'Roboto', sans-serif;
      /* Latar belakang body menjadi bingkai di desktop */
      background-color: #333; 
    }

    /* [CSS BARU] Wadah utama yang mensimulasikan layar ponsel */
    .mobile-container {
        max-width: 420px; /* Lebar maksimal tampilan */
        min-height: 100vh; /* Tinggi minimal satu layar penuh */
        margin: auto; /* Otomatis di tengah secara horizontal */
        position: relative; /* Penting untuk elemen absolute di dalamnya */
        background-color: #4ba3a5; /* Warna utama dipindahkan ke sini */
        overflow: hidden; /* Memotong elemen yang keluar dari wadah */
        display: flex; /* Menggunakan flex untuk penataan */
        flex-direction: column;
    }

    .wrapper {
      flex: 1; /* Membuat wrapper mengisi ruang yang tersedia */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      position: relative;
      z-index: 1;
    }

    .top-skip {
      position: absolute;
      top: 20px;
      right: 20px;
      font-size: 14px;
      z-index: 2;
      text-decoration: none;
    }
    .text {
      text-decoration: none;
      color: #cfe4e5;
    }

    .center-content {
      text-align: center;
      color: white;
      margin-top: 70px;
      z-index: 2;
    }

    .title {
      font-size: 36px;
      font-family: 'League Spartan', sans-serif;
      font-weight: 700;
      margin-bottom: 5px;
    }

    .subtitle {
      font-size: 18px;
      font-family: 'Roboto', sans-serif;
      font-weight: bold;
      color: #f6e26b;
    }

    .desc {
      font-size: 12px;
      margin-top: 10px;
    }

    .bottom-buttons {
      width: 100%;
      max-width: 400px;
      z-index: 2;
      margin-bottom: 40px;
    }

    .btn {
      width: 100%;
      padding: 12px;
      border: 2px solid white;
      border-radius: 20px;
      background-color: transparent;
      color: white;
      font-weight: bold;
      margin-bottom: 10px;
      cursor: pointer;
      transition: all 0.3s ease;
      font-family: 'Roboto', sans-serif;
    }

    .btn:hover {
      background-color: white;
      color: #4ba3a5;
    }

    .btn-primary {
      background-color: white;
      color: #4ba3a5;
      border: none;
    }

    .background-image {
      position: absolute;
      bottom: 25%; /* Posisi disesuaikan agar pas di dalam container */
      left: 0;
      width: 100%;
      z-index: 0;
    }

    .background-image img {
      width: 100%;
      height: auto;
      display: block;
    }
  </style>
</head>
<body>

<div class="mobile-container">
    <div class="wrapper">
      <div class="top-skip"><a href="<?= site_url('Home') ?>" class="text">Lewati</a></div>

      <div class="center-content">
        <h1 class="title">IQRA'</h1>
        <div class="subtitle">COURSE</div>
        <p class="desc">iqra’ course solusi terbaik untuk<br> kamu yang pengen bisa ngaji!</p>
      </div>

      <div class="bottom-buttons">
        <a href="<?= site_url('Register') ?>"><button class="btn">Daftar</button></a>
        <a href="<?= site_url('Login') ?>"><button class="btn btn-primary">Login</button></a>
      </div>
    </div>

    <div class="background-image">
      <img src="<?= base_url('assets/gambarsplash.png') ?>" alt="Anak-anak">
    </div>
</div>

</body>
</html>