<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Nilai Islami</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background-color: #444;
      color: #000;
    }

    .container {
      background-color: #fff;
      width: 100%;
      min-height: 100vh;
    }

    .header {
      background-color: #3bb3ce;
      padding: 14px;
      color: white;
      text-align: center;
      font-weight: bold;
      font-size: 16px;
      position: relative;
    }

    .close-btn {
      position: absolute;
      right: 14px;
      top: 10px;
      background-color: red;
      color: white;
      border: none;
      border-radius: 50%;
      width: 24px;
      height: 24px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      line-height: 24px;
      text-align: center;
    }

    .list {
      padding: 14px;
      max-height: calc(100vh - 60px);
      overflow-y: auto;
    }

    .list-item {
      margin: 6px 0;
      padding: 12px;
      border-radius: 18px;
      font-size: 14px;
      background-color: #f4f4f4;
      color: #000;
      transition: background-color 0.2s ease;
    }

    .list-item.aktif {
      cursor: pointer;
    }

    .list-item.aktif:hover {
      background-color: #e0e0e0;
    }

    .list-item.nonaktif {
      cursor: default;
    }

    .list::-webkit-scrollbar {
      width: 6px;
    }

    .list::-webkit-scrollbar-thumb {
      background-color: #ccc;
      border-radius: 6px;
    }
  </style>
</head>
<body>

<?php
  // Materi yang bisa diklik
  $halaman_aktif = ['berdoa', 'salam'];

  // Daftar semua materi
  $materi_list = [
    'berdoa' => 'Adab Mengangkat Tangan Saat Berdoa',
    'salam' => 'Adab Mengucapkan Salam',
    'berbicara' => 'Adab Berbicara',
    'bertamu' => 'Adab Bertamu',
    'makan' => 'Adab Makan dan Minum',
    'orangtua' => 'Adab Terhadap Orang Tua',
    'tidur' => 'Adab Sebelum Tidur',
    'masuk_rumah' => 'Adab Masuk Rumah',
    'terimakasih' => 'Adab Mengucap Terima Kasih',
    'lisan' => 'Adab Menjaga Lisan',
    'berpakaian' => 'Adab Berpakaian',
    'teman' => 'Adab Bergaul dengan Teman',
    'jujur' => 'Adab Jujur dan Tidak Berbohong',
    'kebersihan' => 'Adab Menjaga Kebersihan Diri dan Lingkungan',
    'guru' => 'Adab Menghormati Guru dan Orang yang Lebih Tua',
    'tidak_boong' => 'Adab Tidak Suka Berbohong'
  ];
?>

<div class="container">
  <div class="header">
    Adab dan Akhlak
    <button class="close-btn" onclick="window.history.back()">×</button>
  </div>

  <div class="list">
    <?php foreach ($materi_list as $slug => $label): ?>
      <div
        class="list-item <?= in_array($slug, $halaman_aktif) ? 'aktif' : 'nonaktif' ?>"
        <?= in_array($slug, $halaman_aktif) ? "onclick=\"masukMateri('$slug')\"" : "" ?>>
        <?= $label ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<script>
  function masukMateri(slug) {
    window.location.href = "<?= site_url('nilaiislami/materi/') ?>" + slug;
  }
</script>

</body>
</html>
