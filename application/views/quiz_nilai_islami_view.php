<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    <style>
        body { background-color: #fdf0e7; font-family: 'Poppins', sans-serif; margin: 0; padding: 0; }
        .mobile-container { max-width: 480px; margin: auto; background-color: #fdf0e7; min-height: 100vh; box-shadow: 0 0 15px rgba(0,0,0,0.1); }
        .quiz-header { position: sticky; top: 0; z-index: 100; background-color: #459a96; color: white; padding: 12px 15px; display: flex; align-items: center; justify-content: center; }
        .quiz-header .title { font-weight: 700; font-size: 1.2rem; }
        .quiz-header .close-btn { position: absolute; right: 15px; background-color: #e74c3c; color: white; border-radius: 50%; width: 32px; height: 32px; border: none; font-size: 1.2rem; display: flex; align-items: center; justify-content: center; cursor: pointer; text-decoration: none; }
        main { padding: 25px 20px; text-align: center; }
        .quiz-main-title { font-size: 1.5rem; font-weight: 700; margin-bottom: 0; }
        .quiz-sub-title { font-size: 0.9rem; color: #555; border-bottom: 2px solid #ddd; padding-bottom: 15px; margin-bottom: 20px; }
        .question-text { font-size: 1.1rem; font-weight: 700; margin-bottom: 25px; }
        .answer-options { display: flex; flex-direction: column; gap: 12px; margin-bottom: 20px; }
        .answer-btn { background-color: #f8f9fa; border: 2px solid #e9ecef; border-radius: 25px; padding: 12px 20px; width: 100%; text-align: left; font-weight: 500; cursor: pointer; transition: all 0.2s ease; }
        .answer-btn.selected.correct { border-color: #198754; background-color: #d1e7dd; }
        .answer-btn.selected.incorrect { border-color: #dc3545; background-color: #f8d7da; }
        .feedback-box { display: none; padding: 10px; border-radius: 10px; font-weight: 500; margin-bottom: 15px; }
        .feedback-box.correct { background-color: #d1e7dd; color: #0f5132; }
        .explanation-box { display: none; background-color: #fff3cd; color: #664d03; border-radius: 12px; padding: 15px; text-align: left; font-size: 0.9rem; margin-bottom: 20px; }
        #lanjut-btn { display: none; width: 100%; background-color: white; color: #333; font-weight: 700; padding: 15px; border-radius: 25px; border: 1px solid #ccc; text-decoration: none; font-size: 1.1rem; }
    </style>
</head>
<body>
<div class="mobile-container">
    <header class="quiz-header">
        <span class="title"><?= htmlspecialchars($page_title) ?></span>
        <a href="<?= site_url('home') ?>" class="close-btn">
  <img src="<?= base_url('assets/icon_silang.png') ?>" alt="Tutup" style="width: 100%; height: 100%;">
</a>
    </header>
    <main>
        <h2 class="quiz-main-title">QUIS</h2>
        <p class="quiz-sub-title"><?= htmlspecialchars($quiz_title) ?></p>
        <p class="question-text"><?= htmlspecialchars($question) ?></p>
        <div class="answer-options" id="answer-options">
            <?php foreach ($options as $key => $value): ?>
                <button class="answer-btn" data-option="<?= $key ?>">
                    <b><?= $key ?>.</b> <?= htmlspecialchars($value) ?>
                </button>
            <?php endforeach; ?>
        </div>
        <div class="feedback-box correct" id="correct-feedback"><i class="fas fa-check-circle"></i> Jawaban Benar!</div>
        <div class="explanation-box" id="explanation-box"><?= htmlspecialchars($explanation) ?></div>
        <a href="<?= $continue_url ?>" id="lanjut-btn">Lanjut</a>
    </main>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const optionsContainer = document.getElementById('answer-options');
        const correctFeedback = document.getElementById('correct-feedback');
        const explanationBox = document.getElementById('explanation-box');
        const lanjutBtn = document.getElementById('lanjut-btn');
        const correctAnswerKey = '<?= $correct_answer_key ?>';
        let answered = false;

        optionsContainer.addEventListener('click', function(e) {
            if (e.target.classList.contains('answer-btn') && !answered) {
                const selectedBtn = e.target;
                const selectedOption = selectedBtn.dataset.option;
                
                selectedBtn.classList.add('selected');

                if (selectedOption === correctAnswerKey) {
                    answered = true;
                    selectedBtn.classList.add('correct');
                    correctFeedback.style.display = 'block';
                    explanationBox.style.display = 'block';
                    lanjutBtn.style.display = 'block';
                } else {
                    selectedBtn.classList.add('incorrect');
                    alert('Jawaban kurang tepat. Silakan pilih jawaban lain.');
                    setTimeout(() => {
                        selectedBtn.classList.remove('selected', 'incorrect');
                    }, 1000);
                }
            }
        });
    });
</script>
</body>
</html>