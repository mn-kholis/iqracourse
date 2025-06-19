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
      padding-bottom: 80px; /* Memberi ruang untuk footer */
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
      max-width: 480px; /* Menyesuaikan dengan layout mobile */
      margin: 0 auto;
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
      margin-bottom: 8px;
    }
    .card-content p {
      font-size: 11px;
      margin: 3px 0;
      color: #444;
      display: flex;
      align-items: center;
    }
    .card-content p img {
      width: 16px;
      height: 16px;
      margin-right: 6px;
    }
    .stage-header {
      display: flex;
      align-items: center;
      font-size: 13px;
      font-weight: bold;
      color: #333;
      margin-bottom: 5px;
    }
    .stage-header img {
      width: 20px;
      height: 20px;
      margin-right: 5px;
    }
    .progress-container {
      background-color: #e0e0e0;
      border-radius: 5px;
      height: 10px;
      width: 100%;
      overflow: hidden;
      margin-bottom: 8px;
      position: relative;
    }
    .progress-bar {
      height: 100%;
      background-color: #62c162;
      width: 0%;
      border-radius: 5px;
    }
    .progress-text {
      position: absolute;
      right: 5px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 9px;
      color: #555;
    }

    /* CSS FOOTER BARU (DARI HALAMAN HOME) */
    .bottom-nav {
      position: fixed;
      bottom: 0;
      background-color: #4B9DA7;
      display: flex;
      justify-content: space-around;
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
      max-width: 480px;
      width: 100%;
      margin: 0 auto;
      left: 50%;
      transform: translateX(-50%);
    }
    .bottom-nav a {
      width: 25%;
      color: white;
      text-align: center;
      font-size: 0.8rem;
      text-decoration: none;
      display: flex;
      flex-direction: column;
      align-items: center;
      position: relative;
      padding: 5px 10px;
      transition: all 0.3s ease-in-out;
    }
    .bottom-nav a:hover,
    .bottom-nav a.active {
      background-color: #3D8088;
    }
    .bottom-nav a .nav-label {
      font-size: 0.8rem;
      margin-top: 4px;
    }
    .icon-img {
      width: 40px;
      height: auto;
    }
  </style>
</head>
<body>

<div class="header">Laporan Mengaji</div>
<div class="container">
  <?php // Asumsi $iqra_list sudah ada dari controller ?>
  <?php if (isset($iqra_list) && is_array($iqra_list)): ?>
    <?php foreach ($iqra_list as $iqra): ?>
      <?php
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
  <?php endif; ?>
</div>

<div class="bottom-nav">
    <a href="<?= base_url('Home') ?>">
        <img src="<?= base_url('assets/home.png') ?>" class="icon-img" />
        <span class="nav-label">Home</span>
    </a>
    <a href="<?= base_url('Laporanmengaji') ?>" class="active">
        <img src="<?= base_url('assets/laporan.png') ?>" class="icon-img" />
        <span class="nav-label">Laporan</span>
    </a>
    <a href="<?= base_url('Notifikasi') ?>">
        <img src="<?= base_url('assets/notifikasi.png') ?>" class="icon-img" />
        <span class="nav-label">Notifikasi</span>
    </a>
     <a href="#" onclick="showParentalGate(event)">
            <img src="<?= base_url('assets/akun.png') ?>" class="icon-img" />
            <span class="nav-label">Profile</span>
        </a>
    </div>

<style>
    .parental-gate-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: none; /* Sembunyi secara default */
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }
    .parental-gate-box {
        background: white;
        padding: 25px;
        border-radius: 20px;
        text-align: center;
        width: 90%;
        max-width: 350px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }
    .parental-gate-box h2 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 5px;
    }
    .parental-gate-box p {
        font-size: 1rem;
        color: #666;
        margin-bottom: 25px;
    }
    .question-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 25px;
    }
    .answer-box {
        width: 80px;
        height: 60px;
        border: 2px solid #ccc;
        border-radius: 10px;
    }
    .options-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
    }
    .option-btn {
        background-color: #4ba3a5;
        color: white;
        border: none;
        border-radius: 15px;
        padding: 15px;
        font-size: 1.5rem;
        font-weight: 700;
        cursor: pointer;
    }
</style>

<div class="parental-gate-overlay" id="parentalGate">
    <div class="parental-gate-box">
        <h2>KHUSUS ORANG TUA</h2>
        <p>Jawablah pertanyaan berikut?</p>
        <div class="question-container">
            <span id="gate-question">5 + 8 =</span>
            <div class="answer-box"></div>
        </div>
        <div class="options-grid" id="gate-options">
            </div>
    </div>
</div>

<script>
    // Ambil elemen-elemen dari DOM
    const gateOverlay = document.getElementById('parentalGate');
    const questionEl = document.getElementById('gate-question');
    const optionsEl = document.getElementById('gate-options');

    let correctAnswer;
    const profileUrl = '<?= site_url('Profile') ?>';

    // Fungsi untuk membuat dan menampilkan soal baru
    function generateQuestion() {
        // Buat 2 angka acak antara 1 dan 10
        const num1 = Math.floor(Math.random() * 10) + 1;
        const num2 = Math.floor(Math.random() * 10) + 1;
        correctAnswer = num1 + num2;

        // Tampilkan soal di layar
        questionEl.textContent = `${num1} + ${num2} =`;

        // Siapkan array untuk pilihan jawaban
        let options = [correctAnswer];

        // Buat 5 pilihan jawaban salah yang unik
        while (options.length < 6) {
            let wrongAnswer = correctAnswer + (Math.floor(Math.random() * 10) - 5);
            // Pastikan jawaban salah tidak sama dengan jawaban benar dan tidak negatif
            if (wrongAnswer !== correctAnswer && wrongAnswer >= 0 && !options.includes(wrongAnswer)) {
                options.push(wrongAnswer);
            }
        }

        // Acak urutan pilihan jawaban
        options.sort(() => Math.random() - 0.5);

        // Hapus pilihan jawaban lama dan buat yang baru
        optionsEl.innerHTML = '';
        options.forEach(option => {
            const button = document.createElement('button');
            button.className = 'option-btn';
            button.textContent = option;
            button.onclick = () => handleAnswerClick(option);
            optionsEl.appendChild(button);
        });
    }

    // Fungsi yang dijalankan saat pilihan jawaban diklik
    function handleAnswerClick(selectedAnswer) {
        if (selectedAnswer === correctAnswer) {
            // Jika jawaban benar, arahkan ke halaman Profile
            window.location.href = profileUrl;
        } else {
            // Jika jawaban salah, buat soal baru
            alert('Jawaban salah, silakan coba lagi!');
            generateQuestion();
        }
    }

    // Fungsi utama untuk menampilkan pop-up
    function showParentalGate(event) {
        event.preventDefault(); // Mencegah link default berjalan
        generateQuestion(); // Buat soal pertama
        gateOverlay.style.display = 'flex'; // Tampilkan pop-up
    }

    // Event listener untuk menutup pop-up jika mengklik area gelap di luar kotak
    gateOverlay.addEventListener('click', function(event) {
        if (event.target === gateOverlay) {
            gateOverlay.style.display = 'none';
        }
    });

</script>

</body>
</html>