<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Membaca Iqra'</title>

  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
    }

    body {
      background-color: #f8f9fa;
    }

    .header {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #4ba3a5;
      padding: 14px;
      color: white;
      font-size: 14px;
      font-weight: bold;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
    }

    .header h2 {
      margin: 0;
      text-align: center;
      flex: 1;
    }
    main {
      padding-top: 60px; 
    }

    .close-btn {
      position: absolute;
      right: 16px;
      top: 50%;
      transform: translateY(-50%);
      background-color: red;
      color: white;
      border: none;
      border-radius: 50%;
      font-size: 20px;
      width: 30px;
      height: 30px;
      line-height: 30px;
      text-align: center;
      cursor: pointer;
    }

    .iqra-card {
      background-color: white;
      margin: 20px;
      padding: 70px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      display: flex;
      align-items: center;
      text-decoration: none;
    }
    .iqra-card-link {
        text-decoration: none; /* Menghilangkan garis bawah dari seluruh link */
    }

    .iqra-card-link:hover {
        text-decoration: none; /* Pastikan garis bawah tidak muncul saat disentuh/hover */
    }
    .iqra-card img {
      width: 100px;
      height: auto;
      margin-right: 20px;
    }

    .iqra-card .text {
      flex: 1;
    }

    .iqra-card-link .iqra-card .text h3 {
      margin-bottom: 8px;
      font-size: 18px;
      color: black;
    }

    .iqra-card-link .iqra-card .text p {
      font-size: 14px;
      color: #555;
    }

    @media (max-width: 600px) {
      .iqra-card {
        flex-direction: row;
        align-items: flex-start;
        padding: 16px;
      }

      .iqra-card img {
        width: 80px;
      }

      .iqra-card .text h3 {
        font-size: 16px;
      }

      .iqra-card .text p {
        font-size: 13px;
      }
    }
  </style>
</head>
<body>

  <div class="header">
    <h2>Belajar Membaca Iqra'</h2> 
    <button class="close-btn" onclick="window.location.href='<?= site_url('Home') ?>'">&times;</button>
  </div>

  <main>
    <?php foreach ($iqra_list as $iqra): ?>
      
      <a href="<?= base_url('Halamaniqra') ?>" class="iqra-card-link">
        <div class="iqra-card">
          <img src="<?= $iqra['gambar'] ?>" alt="<?= $iqra['judul'] ?>">
          <div class="text">
            <h3 ><?= $iqra['judul'] ?></h3>
            <p><?= $iqra['deskripsi'] ?></p>
          </div>
        </div>
      </a>
    <?php endforeach; ?>
  </main>


</body>
</html>
