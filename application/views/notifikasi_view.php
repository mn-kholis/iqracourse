<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? htmlspecialchars($title) : 'Notifikasi' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #e9ecef; /* Warna background abu-abu */
            font-family: 'Roboto', sans-serif;
        }

        .mobile-container {
            max-width: 480px;
            margin: auto;
            background-color: #ffffff; /* Latar belakang konten putih */
            min-height: 100vh;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding-bottom: 80px; /* Ruang untuk bottom nav */
        }

        .notif-header {
            background-color: #4B9DA7;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 1.2rem;
            font-weight: 700;
            position: sticky; /* Header menempel di atas saat scroll */
            top: 0;
            z-index: 100;
        }
        
        .content-padding {
            padding: 20px;
        }

        .section-title {
            font-weight: 500;
            color: #333;
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        .notification-list .notification-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 20px;
        }

        .notification-item .icon {
            margin-top: 3px;
            flex-shrink: 0;
        }

        .notification-item .icon img {
            width: 32px;  
            height: 32px; 
        }

        .notification-item .text-content .title {
            font-weight: 700;
            font-size: 1rem;
            color: #111;
            margin: 0 0 4px 0;
        }
        
        .notification-item .text-content .description {
            font-size: 0.9rem;
            color: #555;
            margin: 0 0 6px 0;
            line-height: 1.4;
        }

        .notification-item .text-content .date {
            font-size: 0.8rem;
            color: #888;
        }

        /* CSS untuk Bottom Nav (Sama seperti halaman Home) */
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
            flex: 1; /* Agar setiap item memiliki lebar yang sama */
            color: white;
            text-align: center;
            font-size: 0.8rem;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 8px 5px;
            transition: all 0.3s ease-in-out;
        }
        .bottom-nav a.active {
            background-color: #3D8088;
            border-radius: 12px;
            margin: 2px;
        }
        .bottom-nav a .nav-label {
            font-size: 0.8rem;
            margin-top: 4px;
        }
        .icon-img {
            width: 28px; /* Ukuran ikon disesuaikan */
            height: 28px;
        }
    </style>
</head>
<body>

<div class="mobile-container">
    <header class="notif-header">
        Notifikasi
    </header>

    <main class="content-padding">
        <h3 class="section-title">Pesan lainnya</h3>
        <div class="notification-list">
            
            <?php if (!empty($notifications)): ?>
                <?php foreach ($notifications as $notif): ?>
                    <div class="notification-item">
                        <div class="icon">
                            <?php if ($notif['type'] == 'info'): ?>
                                <img src="<?= base_url('assets/info.png') ?>" alt="Info">
                            <?php else: ?>
                                <img src="<?= base_url('assets/reminder.png') ?>" alt="Reminder">
                            <?php endif; ?>
                        </div>
                        <div class="text-content">
                            <h4 class="title"><?= htmlspecialchars($notif['title']) ?></h4>
                            <p class="description"><?= htmlspecialchars($notif['description']) ?></p>
                            <span class="date"><?= htmlspecialchars($notif['date']) ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Tidak ada notifikasi saat ini.</p>
            <?php endif; ?>

        </div>
    </main>
</div>

<div class="bottom-nav">
    <a href="<?= base_url('Home') ?>">
        <img src="<?= base_url('assets/home.png') ?>" class="icon-img" />
        <span class="nav-label">Home</span>
    </a>
    <a href="<?= base_url('Laporanmengaji') ?>">
        <img src="<?= base_url('assets/laporan.png') ?>" class="icon-img" />
        <span class="nav-label">Laporan</span>
    </a>
    <a href="<?= base_url('Notifikasi') ?>" class="active">
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