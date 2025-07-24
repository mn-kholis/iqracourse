<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQRA COURSE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=League+Spartan:wght@700&display=swap" rel="stylesheet">

    <style>
        /* CSS LAMA ANDA (TIDAK DIUBAH) */
        body { margin: 0; padding: 0; background-color: #F6DDCE; font-family: 'Roboto', sans-serif; padding-top: 30px; box-sizing: border-box; }
        .container { max-width: 400px; padding-top: 20px; padding-bottom: 40px; }
        .learning-card { position: relative; background-color: white; border-radius: 20px; max-width: 300px; margin: 0 auto 24px auto; z-index: 1; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; padding-bottom: 6px; margin-top: 40px; }
        .card-content { position: relative; z-index: 2; display: flex; justify-content: space-around; padding: 16px; font-weight: 600; color: #2b6e73; }
        .card-text { align-items: flex-start; font-size: 0.85rem; max-width: 80%; }
        .card-icon { width: 60px; height: auto; }
        .wave-shape { position: absolute; bottom: 0; left: 0; width: 100%; height: 60px; background: url('<?= base_url("assets/wave.png") ?>') no-repeat bottom; background-size: cover; z-index: 1; }
        .bottom-nav { position: fixed; bottom: 0; left: 50%; transform: translateX(-50%); width: 100%; max-width: 480px; background-color: #4B9DA7; display: flex; justify-content: space-around; border-top-left-radius: 20px; border-top-right-radius: 20px; }
        .bottom-nav a { width: 25%; color: white; text-align: center; font-size: 0.8rem; text-decoration: none; display: flex; flex-direction: column; align-items: center; position: relative; padding: 5px 10px; transition: all 0.3s ease-in-out; border-radius: 15px; }
        .bottom-nav a:hover, .bottom-nav a.active { background-color: #3D8088; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); }
        .bottom-nav a.active img { filter: brightness(1.1); }
        .bottom-nav a .nav-label { font-size: 0.8rem; margin-top: 4px; }
        .logo-img { width: 120px; max-width: 100%; }
        .iqra-title { font-size: 2.8rem; font-weight: 700; margin: 0; color: #fff; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2); }
        .course-button { background-color: #4ca7a8; color: #fbd43d; border-radius: 20px; padding: 6px 20px; border: none; font-weight: bold; }
        .logo-header { background-color: transparent; padding: 10px; }
        .icon-img { width: 40px; height: auto; }
        .top-icons { position: fixed; top: 20px; right: 20px; display: flex; gap: 10px; z-index: 1100; }
        .top-icons img { width: 28px; height: 28px; cursor: pointer; }

        /* CSS UNTUK POP-UP PARENTAL GATE (TIDAK DIUBAH) */
        .parental-gate-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); display: none; justify-content: center; align-items: center; z-index: 9999; }
        .parental-gate-box { background: white; padding: 25px; border-radius: 20px; text-align: center; width: 90%; max-width: 350px; box-shadow: 0 5px 15px rgba(0,0,0,0.3); }
        .parental-gate-box h2 { font-size: 1.5rem; font-weight: 700; margin-bottom: 5px; }
        .parental-gate-box p { font-size: 1rem; color: #666; margin-bottom: 25px; }
        .question-container { display: flex; justify-content: center; align-items: center; gap: 15px; font-size: 2.5rem; font-weight: 700; margin-bottom: 25px; }
        .answer-box { width: 80px; height: 60px; border: 2px solid #ccc; border-radius: 10px; }
        .options-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; }
        .option-btn { background-color: #4ba3a5; color: white; border: none; border-radius: 15px; padding: 15px; font-size: 1.5rem; font-weight: 700; cursor: pointer; }

        /* [CSS BARU] UNTUK POP-UP LOGOUT */
        .popup-overlay {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.6); display: none;
            justify-content: center; align-items: center; z-index: 9999;
        }
        .popup-box {
            background: white; padding: 25px; border-radius: 20px;
            text-align: center; width: 90%; max-width: 340px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .popup-box img {
            width: 80px;
            margin-bottom: 15px;
        }
        .popup-box h3 {
            font-size: 1.2rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 25px;
        }
        .popup-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .popup-buttons a, .popup-buttons button {
            flex: 1;
            padding: 12px;
            border-radius: 20px;
            border: none;
            font-size: 1rem;
            font-weight: 700;
            text-decoration: none;
            cursor: pointer;
        }
        .btn-confirm-yes {
            background-color: #dc3545;
            color: white;
        }
        .btn-confirm-no {
            background-color: #198754;
            color: white;
        }
    </style>
</head>

<body>
    <div class="top-icons">
        <a href="<?= base_url('Vip') ?>">
            <img src="<?= base_url('assets/vvip.png') ?>" alt="VIP" title="VIP Access">
        </a>
        <a href="#" onclick="showLogoutPopup(event)">
            <img src="<?= base_url('assets/logout.png') ?>" alt="Logout" title="Keluar">
        </a>
    </div>

    <div class="container mt-4 mb-5">
        <div class="d-flex align-items-center justify-content-center gap-3 mb-4 flex-wrap logo-header">
            <img src="<?= base_url('assets/logohome.png') ?>" class="logo-img" alt="Iqra Icon">
            <div class="text-start">
                <h1 class="iqra-title">IQRA'</h1>
                <button class="course-button mt-2">COURSE</button>
            </div>
        </div>
        <a href="<?= base_url('Menuiqra') ?>" class="text-decoration-none">
            <div class="learning-card mx-auto d-block mb-4">
                <div class="card-content">
                    <div class="card-text">Belajar Membaca Iqra’</div>
                    <img src="<?= base_url('assets/iqro.png') ?>" class="card-icon" alt="Iqro Icon">
                </div>
                <div class="wave-shape"></div>
            </div>
        </a>
        <a href="<?= base_url('Nilaiislami') ?>" class="text-decoration-none">
            <div class="learning-card">
                <div class="card-content">
                    <div class="card-text">Belajar Nilai Islami</div>
                    <img src="<?= base_url('assets/nilaiislam.png') ?>" class="card-icon" alt="Nilai Islami">
                </div>
                <div class="wave-shape"></div>
            </div>
        </a>
        <a href="<?= base_url('Doa') ?>" class="text-decoration-none">
            <div class="learning-card">
                <div class="card-content">
                    <div class="card-text">Belajar Membaca Doa</div>
                    <img src="<?= base_url('assets/doa.png') ?>" class="card-icon" alt="Doa Icon">
                </div>
                <div class="wave-shape"></div>
            </div>
        </a>
    </div>

    <div class="bottom-nav">
        <a href="<?= base_url('Home') ?>" class="active">
            <img src="<?= base_url('assets/home.png') ?>" class="icon-img" />
            <span class="nav-label">Home</span>
        </a>
        <a href="<?= base_url('Laporanmengaji') ?>">
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
    
    <div class="popup-overlay" id="logoutPopup">
        <div class="popup-box">
            <img src="<?= base_url('assets/logohome.png') ?>" alt="Iqra Course">
            <h3>Apakah Anda Yakin Ingin Keluar?</h3>
            <div class="popup-buttons">
                <button class="btn-confirm-no" onclick="hideLogoutPopup()">Tidak</button>
                <a href="<?= site_url('Login/logout') ?>" class="btn-confirm-yes">Iya</a>
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
    
        /* [JAVASCRIPT BARU] UNTUK POP-UP LOGOUT */
        const logoutPopup = document.getElementById('logoutPopup');
        
        function showLogoutPopup(event) {
            event.preventDefault(); // Mencegah link logout langsung berjalan
            logoutPopup.style.display = 'flex';
        }

        function hideLogoutPopup() {
            logoutPopup.style.display = 'none';
        }

        // Menutup pop-up jika user klik area gelap di sekelilingnya
        logoutPopup.addEventListener('click', function(event) {
            if (event.target === logoutPopup) {
                hideLogoutPopup();
            }
        });
    </script>
</body>
</html>