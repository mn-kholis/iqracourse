<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts: Roboto -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <style>
    body {
      background-color: #f2f2f2;
      margin: 0;
      font-family: 'Roboto', sans-serif;
      padding-top: 60px;  /* untuk header */
      padding-bottom: 80px; /* untuk footer */
    }

    /* HEADER */
    .custom-header {
      background-color: #ffffff;
      padding: 10px 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: fixed;
      top: 0;
      width: 100%;
      height: 60px;
      z-index: 999;
      border-bottom: 1px solid #ddd;
    }

    .custom-header h5 {
      margin: 0;
      font-weight: bold;
      font-size: 18px;
    }

    .custom-header .back-btn img {
      width: 28px; /* Ukuran icon kembali disesuaikan */
      height: 28px;
    }

    .custom-header .back-btn {
      position: absolute;
      left: 16px;
      top: 50%;
      transform: translateY(-50%);
    }

    /* FAQ */
    .faq-container {
      max-width: 600px;
      margin: auto;
      padding: 16px;
    }

    .accordion-item {
      border-radius: 12px;
      margin-bottom: 12px;
      overflow: hidden;
    }

    .accordion-button {
      background-color: #fff;
      border: none;
    }

    .accordion-button:focus {
      box-shadow: none;
    }

    .accordion-body {
      background-color: #e1f0f4;
    }

    /* FOOTER */
    .footer {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      display: flex;
      justify-content: space-around;
      background-color: #fff;
      padding: 10px 0;
      border-top: 1px solid #ccc;
      z-index: 999;
    }

    .footer a {
      text-decoration: none;
      color: inherit;
    }

    .footer div {
      text-align: center;
      font-size: 12px;
      color: #333;
    }

    .footer img {
      width: 36px;
      height: 36px;
      display: block;
      margin: 0 auto 4px;
    }

    .footer .active {
      background-color: #f2f2f2;
      border-radius: 10px;
      padding: 6px 8px;
    }
  </style>
</head>
<body>

<!-- Header Sticky -->
<div class="custom-header">
  <a href="<?= site_url('Home') ?>" class="back-btn">
    <img src="<?= base_url('assets/kembali.png') ?>" alt="Kembali">
  </a>
  <h5>FAQ</h5>
</div>

<!-- Konten FAQ -->
<div class="faq-container">
  <div class="accordion" id="faqAccordion">
    <?php foreach ($faqs as $index => $faq): ?>
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading<?= $index ?>">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $index ?>" aria-expanded="false" aria-controls="collapse<?= $index ?>">
            <?= $faq['question'] ?>
          </button>
        </h2>
        <div id="collapse<?= $index ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $index ?>" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            <?= $faq['answer'] ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- Footer Sticky -->
<div class="footer">
  <div>
    <a href="<?= site_url('profile') ?>">
      <img src="<?= base_url('assets/profile.png') ?>" alt="Profile">
      <div>Profile</div>
    </a>
  </div>
  <div>
    <a href="<?= site_url('komunitas') ?>">
      <img src="<?= base_url('assets/komunitas.png') ?>" alt="Komunitas">
      <div>Komunitas</div>
    </a>
  </div>
  <div class="active">
    <a href="<?= site_url('faq') ?>">
      <img src="<?= base_url('assets/faq.png') ?>" alt="FAQ">
      <div><b>FAQ</b></div>
    </a>
  </div>
  <div>
    <a href="<?= site_url('hubungi') ?>">
      <img src="<?= base_url('assets/hubungi.png') ?>" alt="Hubungi Kami">
      <div>Hubungi Kami</div>
    </a>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
