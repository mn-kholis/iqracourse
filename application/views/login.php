<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Masuk</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <style>
    * { box-sizing: border-box; font-family: 'Roboto', sans-serif; }
    body { margin: 0; padding: 0; background: #ffffff; height: 100vh; display: flex; justify-content: center; align-items: center; }
    .wrapper { width: 90%; max-width: 400px; margin: auto; }
    .top-skip { position: fixed; top: 10px; right: 15px; font-size: 14px; z-index: 1000; }
    .top-skip a { color: #4B9DA7; text-decoration: none; font-weight: bold; }
    form { margin-top: 40px; display: flex; flex-direction: column; }
    input[type="email"] { padding: 14px; margin-bottom: 15px; border-radius: 12px; border: 1px solid #ccc; font-size: 15px; }
    .password-container { position: relative; margin-bottom: 15px; }
    .password-container input { width: 100%; padding: 14px; padding-right: 45px; border-radius: 12px; border: 1px solid #ccc; font-size: 15px; }
    .password-container img { position: absolute; top: 50%; right: 15px; transform: translateY(-50%); width: 22px; height: 22px; cursor: pointer; opacity: 0.7; }
    .forgot { text-align: right; font-size: 13px; margin-top: -10px; margin-bottom: 10px; }
    .forgot a { color: red; text-decoration: none; }
    button { padding: 14px; background-color: #4B9DA7; color: white; font-size: 16px; font-weight: bold; border: none; border-radius: 12px; cursor: pointer; margin-top: 10px; }
    .text-link { text-align: center; margin-top: 20px; font-size: 14px; }
    .text-link a { color: black; font-weight: bold; text-decoration: none; margin-left: 5px; }
    .policy { font-size: 11px; text-align: center; margin-top: 20px; color: #555; line-height: 1.5; }
    @media (min-width: 600px) { body { background: #f8f8f8; } }

    /* [CSS BARU] UNTUK POP-UP */
    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        display: none; /* Sembunyi secara default */
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }
    .popup-box {
        background: white;
        padding: 40px 30px;
        border-radius: 15px;
        text-align: center;
        width: 90%;
        max-width: 320px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    .popup-box .icon {
        font-size: 40px;
        color: #28a745;
        background-color: #e9f7ef;
        width: 70px;
        height: 70px;
        border-radius: 50%;
        margin: 0 auto 20px auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .popup-box h2 {
        color: #28a745;
        font-size: 1rem;
        font-weight: bold;
        margin: 0 0 5px 0;
    }
    .popup-box p {
        color: #333;
        font-size: 1.2rem;
        font-weight: bold;
        margin: 0 0 30px 0;
    }
    .popup-box .continue-btn {
        display: block;
        background-color: #28a745;
        color: white;
        padding: 12px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: bold;
        font-size: 1rem;
    }
  </style>
</head>
<body>

  <div class="top-skip"><a href="<?= site_url('Home') ?>">Lewati</a></div>

  <div class="wrapper">
    <form method="post" action="<?= site_url('login/process') ?>">
      <input type="email" name="email" placeholder="Masukkan email Anda" required>
      <div class="password-container">
        <input type="password" name="password" id="password" placeholder="Masukkan kata sandi" required>
        <img src="<?= base_url('assets/mata.png') ?>" alt="toggle" onclick="togglePassword('password', this)">
      </div>
      <div class="forgot"><a href="#">Lupa Kata Sandi?</a></div>
      <button type="submit">Masuk</button>
      <div class="text-link">
        Belum punya akun? <a href="<?= site_url('register') ?>">Daftar Disini</a>
      </div>
      <div class="policy">
        Dengan melanjutkan, Anda dianggap telah menyetujui<br>
        Kebijakan Privasi dan Ketentuan Pengguna.
      </div>
    </form>
  </div>

  <div class="popup-overlay" id="successPopup">
    <div class="popup-box">
      <div class="icon">
        <i class="fas fa-check"></i>
      </div>
      <h2>Success</h2>
      <p>Login Berhasil</p>
      <a href="<?= site_url('Home') ?>" class="continue-btn">Continue</a>
    </div>
  </div>

  <script>
    function togglePassword(id, icon) {
      const field = document.getElementById(id);
      if (field.type === "password") {
        field.type = "text";
        icon.style.opacity = 1;
      } else {
        field.type = "password";
        icon.style.opacity = 0.7;
      }
    }
  </script>

  <?php if($this->session->flashdata('login_success')): ?>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var popup = document.getElementById('successPopup');
      popup.style.display = 'flex';
    });
  </script>
  <?php endif; ?>

</body>
</html>