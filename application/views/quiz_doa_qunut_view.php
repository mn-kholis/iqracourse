<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz Doa Interaktif</title>

  <!-- Google Fonts Roboto -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #FDE8DF;
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
    }

    * {
      font-family: 'Roboto', sans-serif !important;
    }

    .quiz-header {
      background-color: #4CA6AC;
      padding: 20px 20px;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .quiz-header h5 {
      color: white;
      font-weight: bold;
      margin: 0;
      font-size: 22px;
    }

    .quiz-header .btn-close {
      position: absolute;
      top: 50%;
      right: 20px;
      transform: translateY(-50%);
      padding: 0;
      width: 36px;
      height: 36px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .quiz-header .btn-close img {
      width: 36px;
      height: 36px;
    }

    .quiz-body {
      padding: 20px;
      background-color: #FDE8DF;
    }

    .arabic-text {
      font-size: 22px;
      font-weight: bold;
      direction: rtl;
      text-align: center;
      line-height: 2;
      background-color: white;
      border-radius: 12px;
      padding: 15px;
      margin-bottom: 20px;
    }

    .question {
      text-align: center;
      font-weight: 500;
      margin-bottom: 25px;
    }

    .option {
      background-color: white;
      border: 2px solid #ffffff;
      border-radius: 10px;
      padding: 10px 15px;
      margin-bottom: 12px;
      cursor: pointer;
      font-weight: 500;
      position: relative;
      transition: 0.2s;
    }

    .option.correct {
      border: 2px solid #00c853;
      background-color: #e8f5e9;
    }

    .option.correct::after {
      content: "✔";
      color: white;
      background-color: #00c853;
      border-radius: 50%;
      font-size: 14px;
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      width: 20px;
      height: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .option.incorrect {
      border: 2px solid #e53935;
      background-color: #ffebee;
    }

    .option.incorrect::after {
      content: "✖";
      color: white;
      background-color: #e53935;
      border-radius: 50%;
      font-size: 14px;
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      width: 20px;
      height: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .feedback {
      text-align: center;
      margin-top: 10px;
      font-weight: bold;
    }

    .feedback.correct {
      color: #2e7d32;
    }

    .feedback.incorrect {
      color: #c62828;
    }

    .btn-lanjut {
      background-color: white;
      border: none;
      width: 100%;
      padding: 12px;
      margin-top: 20px;
      font-weight: bold;
      border-radius: 8px;
      display: none;
    }
  </style>
</head>
<body>

  <!-- HEADER -->
  <div class="quiz-header">
    <h5>Belajar Membaca Doa</h5>
    <button class="btn-close" onclick="window.history.back()">
      <img src="<?= base_url('assets/silang.png') ?>" alt="Tutup">
    </button>
  </div>

  <!-- KUIS -->
  <div class="quiz-body">
    <div class="arabic-text">
      اللّهُمَّ اهْدِنِي فِيمَنْ هَدَيْتَ<br>
      وَعَافِنِي فِيمَنْ عَافَيْتَ
    </div>

    <div class="question">Doa di atas adalah doa ?</div>

    <div class="option" onclick="checkAnswer(this, false)">A. Doa sebelum tidur</div>
    <div class="option" onclick="checkAnswer(this, true)">B. Doa Qunut</div>
    <div class="option" onclick="checkAnswer(this, false)">C. Doa ada Petir</div>
    <div class="option" onclick="checkAnswer(this, false)">D. Doa setelah Wudhu</div>

    <div id="feedback" class="feedback"></div>

    <button class="btn-lanjut" onclick="nextQuestion()">Lanjut</button>
  </div>

  <!-- SCRIPT -->
  <script>
    let answeredCorrectly = false;

    function checkAnswer(element, isCorrect) {
      if (answeredCorrectly) return;

      const feedback = document.getElementById('feedback');

      document.querySelectorAll('.option').forEach(opt => {
        opt.classList.remove('incorrect');
      });

      if (isCorrect) {
        element.classList.add('correct');
        feedback.textContent = "✅ Benar!";
        feedback.className = "feedback correct";
        answeredCorrectly = true;

        document.querySelectorAll('.option').forEach(opt => {
          opt.onclick = null;
        });

        document.querySelector('.btn-lanjut').style.display = 'block';
      } else {
        element.classList.add('incorrect');
        feedback.textContent = "❌ Jawaban salah, coba lagi.";
        feedback.className = "feedback incorrect";
      }
    }

    function nextQuestion() {
      window.location.href = "<?= base_url('Doa/hujan') ?>";
    }
  </script>

</body>
</html>
