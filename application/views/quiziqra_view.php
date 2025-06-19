<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic:wght@700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #fceae1; /* Warna background peach */
            font-family: 'Poppins', sans-serif;
        }
        .mobile-container {
            max-width: 480px; margin: auto; background-color: #fceae1; min-height: 100vh;
            box-shadow: 0 0 10px rgba(0,0,0,0.1); position: relative;
        }
        .quiz-header {
            position: fixed; top: 0; width: 100%; max-width: 480px; z-index: 1000;
            background-color: #459a96; color: white; padding: 12px 15px;
            display: flex; align-items: center; justify-content: center; /* Judul di tengah */
        }
        .quiz-header .title { font-weight: bold; font-size: 1.2rem; }
        .quiz-header .close-btn img {
            width: 36px;
            height: 36px;
            display: block;
            margin: 0 auto 4px;
            position: absolute; right: 15px;top: 10px; font-size: 1.5rem; color: white; text-decoration: none;
        }
        main { padding: 80px 20px 20px 20px; }

        .question-card {
            background-color: white;
            border-radius: 20px;
            padding: 25px;
            text-align: center;
            margin-bottom: 30px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }
        .question-card .arabic-char {
            font-family: 'Noto Naskh Arabic', sans-serif;
            font-size: 6rem;
            color: #333;
        }
        .question-card .question-text {
            font-size: 1.1rem;
            font-weight: 600;
            color: #555;
            margin-top: 10px;
        }

        .answer-btn {
            display: flex; align-items: center; width: 100%;
            background-color: white; border: 2px solid transparent; border-radius: 15px;
            padding: 15px; margin-bottom: 15px; text-align: left;
            font-weight: 600; cursor: pointer; transition: all 0.2s;
        }
        .answer-btn:hover { background-color: #f8f9fa; }
        .answer-btn .option-letter {
            background-color: #f0f2f5; border-radius: 8px;
            padding: 5px 10px; margin-right: 15px;
        }
        /* Style untuk jawaban yang dipilih */
        .answer-btn.selected.correct {
            border-color: #28a745; background-color: #e9f7ef;
        }
        .answer-btn.selected.incorrect {
            border-color: #dc3545; background-color: #fbebed;
        }
        .answer-btn .check-icon { margin-left: auto; color: #28a745; font-size: 1.5rem; }

        #lanjut-btn {
            display: none; /* Sembunyi secara default */
            width: 100%; background-color: #0d6efd; color: white;
            font-weight: bold; padding: 15px; border-radius: 15px;
            border: none; margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="mobile-container">
        <header class="quiz-header">
            <span class="title"><?= htmlspecialchars($title) ?></span>
            <a href="<?= site_url('Halamaniqra') ?>" class="close-btn"><img src="<?= base_url('assets/icon_silang.png') ?>" alt="close"></a>
        </header>

        <main>
            <div class="question-card">
                <h1 class="arabic-char"><?= $question_char ?></h1>
                <p class="question-text"><?= htmlspecialchars($question_text) ?></p>
            </div>

            <div id="answer-options">
                <?php foreach ($options as $key => $value): ?>
                <button class="answer-btn" data-option="<?= $key ?>">
                    <span class="option-letter"><?= $key ?>.</span>
                    <span><?= htmlspecialchars($value) ?></span>
                </button>
                <?php endforeach; ?>
            </div>

            <a href="<?= $next_lesson_url ?>"><button id="lanjut-btn">
                Lanjut
            </button></a>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const answerOptionsContainer = document.getElementById('answer-options');
            const lanjutBtn = document.getElementById('lanjut-btn');
            const correctAnswer = '<?= $correct_answer ?>';
            let answered = false;

            answerOptionsContainer.addEventListener('click', function(event) {
                const clickedButton = event.target.closest('.answer-btn');

                if (clickedButton && !answered) {
                    answered = true; // Mencegah jawaban ganda
                    const selectedOption = clickedButton.dataset.option;

                    // Tambahkan class 'selected' untuk styling
                    clickedButton.classList.add('selected');

                    if (selectedOption === correctAnswer) {
                        // --- Jawaban Benar ---
                        clickedButton.classList.add('correct');
                        
                        // Tambahkan ikon centang
                        const checkIcon = document.createElement('i');
                        checkIcon.className = 'fas fa-check-circle check-icon';
                        clickedButton.appendChild(checkIcon);

                        // Tampilkan tombol Lanjut
                        lanjutBtn.style.display = 'block';
                    } else {
                        // --- Jawaban Salah ---
                        clickedButton.classList.add('incorrect');

                        // Munculkan pop-up
                        alert('Salah! Silakan coba lagi.');

                        // Reset setelah 1 detik agar bisa mencoba lagi
                        setTimeout(function() {
                            clickedButton.classList.remove('selected', 'incorrect');
                            answered = false; // Izinkan menjawab lagi
                        }, 1000);
                    }
                }
            });
        });
    </script>
</body>
</html>