<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Doa Qunut</title>

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #fff;
      font-family: 'Roboto', sans-serif;
      font-size: 14px;
    }

    .custom-header {
      background-color: #4CA6AC;
      padding: 20px 20px; /* Consistent padding for a larger header */
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .custom-header h5 {
      color: white;
      font-weight: 700;
      margin: 0;
      font-size: 22px; /* Consistent, slightly smaller font size */
      font-family: 'Roboto', sans-serif;
    }

    .btn-close-circle {
      position: absolute;
      top: 50%; /* Consistent vertical centering */
      right: 20px; /* Consistent right position */
      transform: translateY(-50%); /* Consistent vertical centering */
      width: 36px; /* Consistent icon size */
      height: 36px; /* Consistent icon size */
      background-color: transparent;
      border: none;
      cursor: pointer;
      padding: 0;
      display: flex; /* Use flexbox to center the image */
      justify-content: center;
      align-items: center;
    }

    .btn-close-circle img {
      width: 36px; /* Image size matches button size */
      height: 36px; /* Image size matches button size */
    }

    .judul-doa {
      text-align: center;
      font-weight: 700;
      font-size: 18px;
      margin-top: 20px;
    }

    .arabic {
      text-align: center;
      font-size: 20px;
      line-height: 2.2;
      direction: rtl;
      margin-top: 20px;
      font-weight: bold;
    }

    .latin, .arti {
      margin-top: 20px;
      text-align: justify;
      font-family: 'Roboto', sans-serif;
      color: #000;
    }

    .latin {
      font-style: italic;
    }

    @media (min-width: 768px) {
      .container-doa {
        max-width: 600px;
        margin: 0 auto;
      }
    }

    .btn-next-bottom {
      text-align: right;
      margin-top: 30px;
    }

    .btn-next-bottom img {
      width: 48px;
      height: 48px;
    }
  </style>
</head>
<body>

  <div class="custom-header">
    <h5>Belajar Membaca Doa</h5>
    <button class="btn-close-circle" onclick="window.history.back();">
      <img src="<?= base_url('assets/silang.png') ?>" alt="Tutup">
    </button>
  </div>

  <div class="container-doa p-4">
    <div class="judul-doa">
      🌙 Doa Ketika Hujan Turun 🌙
    </div>

    <div class="arabic">
      <div class="arabic">اللَّهُمَّ صَيِّبًا نَافِعًا</div>
    </div>

    <div class="latin">“Allahumma shayyiban naafi’an”</div>

    <div class="arti">
      <strong>Artinya:</strong><br>
      “(Ya Allah turunkanlah hujan yang memberikan manfaat)” (HR. Bukhari no. 1032)
      <br><br>
      Ini menunjukkan bahwa Nabi Muhammad shallallahu ‘alaihi wasallam sangat menginginkan kebaikan untuk umatnya. Oleh karenanya, beliau banyak berdoa kebaikan untuk mereka, di antaranya agar Allah menurunkan hujan yang memberikan manfaat bukan hujan yang menjadi petaka.
    </div>

    <div class="btn-next-bottom">
      <a href="<?= base_url('Doa/quiz') ?>">
        <img src="<?= base_url('assets/panahh.png') ?>" alt="Lanjut ke Quis">
      </a>
    </div>
  </div>

</body>
</html>