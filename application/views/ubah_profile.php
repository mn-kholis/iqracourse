<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Profil</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Roboto', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #d8d8d8;
        }

        .container {
            max-width: 480px;
            margin: auto;
            background-color: #d8d8d8;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        
        .header {
            position: fixed; 
            top: 0;
            width: 100%;
            max-width: 480px;
            z-index: 1000; 
            background-color: #ffffff;
            padding: 16px;
            border-bottom: 1px solid #ddd;
            align-items: center;
            text-align: center;
            padding: 16px;
        }
        .header .title {
            margin: 0;
            font-size: 20px;
        }
        .back-btn {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            width: 24px;
            height: 24px;
            background-image: url('<?= base_url("assets/back.png") ?>');
            background-size: cover;
            background-repeat: no-repeat;
            text-indent: -9999px;
            border: none;
        }
        
        main {
            padding-top: 70px;  
            padding-bottom: 133px;
            background-color: #f0f2f5; 
        }

        .form-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin: 16px;
        }

        .profile-image {
            display: block;
            margin: 0 auto;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-image: url('<?= base_url("assets/profile.png") ?>');
            background-size: cover;
            background-position: center;
        }

        .upload-btn {
            display: block;
            margin: 10px auto;
            background-color: #4899a0;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 10px;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            border: none;
            border-bottom: 1px solid #ccc;
            padding: 8px;
            background-color: transparent;
        }

        .save-btn {
            display: block;
            width: 100%;
            background-color: #FFA500;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }

        .footer {
            display: flex;
            justify-content: space-around;
            background-color: #fff;
            padding: 10px 0;
            border-top: 1px solid #ccc;
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
            padding: 4px 8px;
        }
    </style>
</head>
<body>
<div class="container">
    <!-- Header -->
    <div class="header">
        <a href="#" onclick="window.history.back();" class="back-btn">Kembali</a>
        <h2 class="title">Ubah Profile</h2>
    </div>
<main>
    <!-- Form -->
    <form class="form-card" onsubmit="redirectProfile(event)">
        <div class="profile-image"></div>
        <button type="button" class="upload-btn">Upload Foto</button>

        <div class="form-group">
            <label>Username :</label>
            <input type="text" placeholder="Masukkan username">
        </div>

        <div class="form-group">
            <label>Email :</label>
            <input type="email" placeholder="Masukkan email">
        </div>

        <div class="form-group">
            <label>Password :</label>
            <input type="password" placeholder="Masukkan password email">
        </div>
        <button type="submit" class="save-btn">Simpan</button>
    </form>
</main>

    <!-- Footer -->
    <div class="footer">
        <div class="active">
            <a href="<?= site_url('profile') ?>">
                <img src="<?= base_url('assets/profile.png') ?>" alt="Profile">
                <div><b style="text-decoration: none;">Profile</b></div>
            </a>
        </div>
        <div>
            <a href="<?= site_url('komunitas') ?>">
                <img src="<?= base_url('assets/komunitas.png') ?>" alt="Komunitas">
                <div>Komunitas</div>
            </a>
        </div>
        <div>
            <a href="<?= site_url('faq') ?>">
                <img src="<?= base_url('assets/faq.png') ?>" alt="FAQ">
                <div>FAQ</div>
            </a>
        </div>
        <div>
            <a href="<?= site_url('hubungi') ?>">
                <img src="<?= base_url('assets/hubungi.png') ?>" alt="Hubungi Kami">
                <div>Hubungi Kami</div>
            </a>
        </div>
    </div>
</div>

<script>
    function redirectProfile(event) {
        event.preventDefault();
        window.location.href = "<?= site_url('profile') ?>";
    }
</script>
</body>
</html>
