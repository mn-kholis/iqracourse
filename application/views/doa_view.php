<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Membaca Doa</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif; /* Tambahkan Roboto di sini */
        }

        .custom-header {
            background-color: #4CA6AC;
            padding: 20px 20px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .custom-header h5 {
            color: white;
            font-weight: bold;
            margin: 0;
            font-size: 22px;
        }

        .btn-close-circle {
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            width: 36px;
            height: 36px;
            background-color: transparent;
            border: none;
            cursor: pointer;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn-close-circle img {
            width: 36px;
            height: 36px;
        }

        .doa-item {
            margin: 8px 0;
        }

        .doa-item button {
            border-radius: 0.5rem;
            text-align: left;
            font-size: 1rem;
            color: #212529;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            box-shadow: 0 .125rem .25rem rgba(0,0,0,.075);
            padding: 0.75rem 1rem;
        }

        .doa-item a.btn {
            text-decoration: none;
            color: inherit;
            display: block;
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

    <div class="container py-3">
        <?php
        $daftar_doa_links = [
            ["text" => "Doa Qunut", "link" => "qunut"],
            ["text" => "Doa ketika hujan turun", "link" => "ketika-hujan-turun"],
            ["text" => "Doa sebelum makan", "link" => "sebelum-makan"],
            ["text" => "Doa setelah makan", "link" => "setelah-makan"],
            ["text" => "Doa sebelum wudhu", "link" => "sebelum-wudhu"],
            ["text" => "Doa setelah wudhu", "link" => "setelah-wudhu"],
            ["text" => "Doa pergi ke masjid", "link" => "pergi-ke-masjid"],
            ["text" => "Doa masuk masjid", "link" => "masuk-masjid"],
            ["text" => "Doa keluar dari masjid", "link" => "keluar-dari-masjid"],
            ["text" => "Doa ketika masuk kamar mandi", "link" => "masuk-kamar-mandi"],
            ["text" => "Doa ketika keluar kamar mandi", "link" => "keluar-kamar-mandi"],
            ["text" => "Doa sebelum tidur", "link" => "sebelum-tidur"],
            ["text" => "Doa bangun tidur", "link" => "bangun-tidur"],
            ["text" => "Doa masuk rumah", "link" => "masuk-rumah"],
            ["text" => "Doa keluar rumah", "link" => "keluar-rumah"],
            ["text" => "Doa ketika bersin", "link" => "ketika-bersin"]
        ];
        ?>

        <?php foreach ($daftar_doa_links as $doa_item): ?>
            <div class="doa-item">
                <a href="<?= base_url('doa/' . $doa_item['link']) ?>" class="btn btn-light w-100 text-start shadow-sm">
                    <?= $doa_item['text'] ?>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>