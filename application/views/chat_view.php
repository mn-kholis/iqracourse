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
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">

    <style>
        body { background-color: #e9ecef; }
        .mobile-container {
            max-width: 480px; margin: auto; background-color: #ffffff; min-height: 100vh;
            box-shadow: 0 0 10px rgba(0,0,0,0.1); position: relative;
            display: flex; flex-direction: column; /* Penting untuk layout chat */
        }

        /* --- HEADER --- */
        .chat-header {
            background-color: #ffffff; padding: 12px 15px; border-bottom: 1px solid #ddd;
            display: flex; align-items: center; position: sticky; top: 0; z-index: 10;
        }
        .chat-header .back-button {
            font-size: 1.6rem; color: #0d6efd; text-decoration: none; margin-right: 15px;
        }
        .chat-header .title { font-weight: bold; font-size: 1.1rem; font-family: sans-serif; }

        /* --- AREA CHAT --- */
        .chat-area {
            flex-grow: 1; /* Membuat area chat mengisi sisa ruang */
            padding: 15px;
            background-color: #e9ecef;
            display: flex;
            flex-direction: column; /* Pesan akan tersusun dari atas ke bawah */
            gap: 12px; /* Jarak antar bubble */
            overflow-y: auto;
        }

        /* --- GELEMBUNG CHAT (SPEECH BUBBLE) --- */
        .chat-bubble {
            padding: 10px 15px;
            border: 2px solid #000000;
            border-radius: 15px;
            max-width: 75%;
            font-family: 'Comic Neue', cursive;
            font-weight: 700;
            position: relative;
        }
        /* Style untuk bubble dari kita (kanan) */
        .chat-bubble.me {
            background-color: #ffffff;
            align-self: flex-end; /* Posisikan ke kanan */
            border-bottom-right-radius: 0; /* Membuat sudut untuk "ekor" */
        }
        /* Style untuk bubble dari lawan bicara (kiri) */
        .chat-bubble.them {
            background-color: #ffffff;
            align-self: flex-start; /* Posisikan ke kiri */
            border-bottom-left-radius: 0;
        }

        /* --- INPUT BAR DI BAWAH --- */
        .chat-input-bar {
            background-color: #ffffff; padding: 10px 15px; border-top: 1px solid #ddd;
            display: flex; align-items: center; gap: 10px;
            position: sticky; bottom: 0;
        }
        .chat-input-bar .icon-btn { font-size: 1.5rem; color: #555; }
        .chat-input-bar .text-input {
            flex-grow: 1; border: 1px solid #ccc; border-radius: 20px;
            padding: 8px 15px; font-family: sans-serif;
        }
    </style>
</head>
<body>
    <div class="mobile-container">
        <header class="chat-header">
            <a href="javascript:history.back()" class="back-button">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.5 16.5L4 12M4 12L8.5 7.5M4 12H14.5C17.5 12 20 9.5 20 6.5" stroke="#0D6EFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
            <span class="title"><?= htmlspecialchars($title) ?></span>
        </header>

        <main class="chat-area">
            <?php foreach ($messages as $msg): ?>
                <div class="chat-bubble <?= $msg['sender'] ?>">
                    <?= htmlspecialchars($msg['text']) ?>
                </div>
            <?php endforeach; ?>
        </main>

        <footer class="chat-input-bar">
            <a href="#" class="icon-btn"><i class="far fa-smile"></i></a>
            <input type="text" class="text-input" placeholder="Ketik pesan...">
            <a href="#" class="icon-btn"><i class="fas fa-paper-plane"></i></a>
        </footer>
    </div>
</body>
</html>