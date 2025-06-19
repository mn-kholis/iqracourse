<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Daftar Akun</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <style>
    * {
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
    }
    body {
      margin: 0;
      padding: 0;
      background: #ffffff;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .wrapper {
      width: 90%;
      max-width: 400px;
      margin: auto;
    }
    .top-skip {
      position: fixed;
      top: 10px;
      right: 15px;
      font-size: 14px;
      z-index: 1000;
    }
    .top-skip a {
      color: #4B9DA7;
      text-decoration: none;
      font-weight: bold;
    }
    form {
      margin-top: 40px;
      display: flex;
      flex-direction: column;
    }
    input[type="email"],
    input[type="password"],
    input[type="number"],
    input[type="text"] {
      padding: 14px;
      margin-bottom: 15px;
      border-radius: 12px;
      border: 1px solid #ccc;
      font-size: 15px;
      width: 100%;
      height: 48px;
      box-sizing: border-box;
    }
    .password-container {
      position: relative;
      margin-bottom: 15px;
    }
    .password-container input {
      padding-right: 45px;
    }
    .password-container img {
      position: absolute;
      top: 50%;
      right: 15px;
      transform: translateY(-50%);
      width: 22px;
      height: 22px;
      cursor: pointer;
      opacity: 0.7;
    }
    button {
      padding: 14px;
      background-color: #4B9DA7;
      color: white;
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      margin-top: 10px;
    }
    .margin-bawah {
      margin-bottom: 20px;
    }
    p {
      font-size: 13px;
      color: #555;
      margin-top: -10px;
      margin-bottom: 10px;
    }
    .text-link {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
    }
    .text-link a {
      color: black;
      font-weight: bold;
      text-decoration: none;
      margin-left: 5px;
    }
    .error-msg {
      color: red;
      font-size: 14px;
      margin-bottom: 15px;
      text-align: center;
    }
    @media (min-width: 600px) {
      body {
        background: #f8f8f8;
      }
    }
    .popup-overlay {
        position: fixed; top: 0; left: 0; width: 100%; height: 100%;
        background: rgba(0, 0, 0, 0.6); display: none;
        justify-content: center; align-items: center; z-index: 9999;
    }
    .popup-box {
        background: white; padding: 30px; border-radius: 15px;
        text-align: center; width: 90%; max-width: 320px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    .popup-box .icon img{
      font-size: 40px;
      color: #28a745;
      background-color: #e9f7ef;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin: 0 auto 20px auto;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .popup-box h2 {
        color: #28a745; font-size: 1rem; font-weight: bold; margin: 0 0 5px 0;
    }
    .popup-box p {
        font-size: 1.1rem; font-weight: bold; color: #333;
        margin: 0; line-height: 1.4;
    }
    .popup-box .sub-text {
        font-size: 1.1rem; font-weight: bold; color: #333;
        margin-bottom: 30px; line-height: 1.4;
    }
    .popup-box .continue-btn {
        display: block; background-color: #28a745; color: white;
        padding: 12px; border-radius: 10px; text-decoration: none;
        font-weight: bold; font-size: 1rem;
    }
  </style>
</head>
<body>

  <div class="top-skip"><a href="<?= site_url('Home') ?>">Lewati</a></div>

  <div class="wrapper">
    <?php if ($this->session->flashdata('error')): ?>
      <div class="error-msg"><?= $this->session->flashdata('error') ?></div>
    <?php endif; ?>

    <form method="post" action="<?= site_url('register/process') ?>">
      <input type="email" name="email" placeholder="Masukkan email Anda" required>
      <p>Klik kirim untuk dapatkan kode verifikasi via email</p>
      <button type="button" class="margin-bawah">Kirim kode verifikasi</button>
      <input type="number" name="kode" placeholder="Masukkan 5 digit kode verifikasi" required>
      <div class="password-container">
        <input type="password" name="password" id="password" placeholder="Buat kata sandi baru" required>
        <img src="<?= base_url('assets/mata.png') ?>" alt="toggle" onclick="togglePassword('password', this)">
      </div>
      <div class="password-container">
        <input type="password" name="repeat_password" id="repeat_password" placeholder="Masukkan ulang kata sandi" required>
        <img src="<?= base_url('assets/mata.png') ?>" alt="toggle" onclick="togglePassword('repeat_password', this)">
      </div>
      <button type="submit">Buat Akun</button>
      <div class="text-link">
        Sudah punya akun? <a href="<?= site_url('login') ?>">Masuk</a>
      </div>
    </form>
  </div>

  <div class="popup-overlay" id="registerSuccessPopup">
    <div class="popup-box">
      <div class="icon"><img src="<?= base_url('assets/centang.png'); ?>" alt="centang"></i></div>
      <h2>Success</h2>
      <p>Pendaftaran Berhasil</p>
      <p class="sub-text">Silahkan Masuk ke Akun Anda</p>
      <a href="<?= site_url('login') ?>" class="continue-btn">Continue</a>
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

  <?php if($this->session->flashdata('register_success')): ?>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var popup = document.getElementById('registerSuccessPopup');
      popup.style.display = 'flex';
    });
  </script>
  <?php endif; ?>

</body>
</html>