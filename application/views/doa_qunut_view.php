<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Doa Qunut</title>

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #fff;
      font-family: 'Roboto', sans-serif;
      font-size: 14px;
    }

    .custom-header {
      background-color: #4CA6AC;
      padding: 20px 20px; /* Consistent padding for a larger header */
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .custom-header h5 {
      color: white;
      font-weight: 700;
      margin: 0;
      font-size: 22px; /* Consistent, slightly smaller font size */
      font-family: 'Roboto', sans-serif;
    }

    .btn-close-circle {
      position: absolute;
      top: 50%; /* Consistent vertical centering */
      right: 20px; /* Consistent right position */
      transform: translateY(-50%); /* Consistent vertical centering */
      width: 36px; /* Consistent icon size */
      height: 36px; /* Consistent icon size */
      background-color: transparent;
      border: none;
      cursor: pointer;
      padding: 0;
      display: flex; /* Use flexbox to center the image */
      justify-content: center;
      align-items: center;
    }

    .btn-close-circle img {
      width: 36px; /* Image size matches button size */
      height: 36px; /* Image size matches button size */
    }

    .judul-doa {
      text-align: center;
      font-weight: 700;
      font-size: 18px;
      margin-top: 20px;
    }

    .arabic {
      text-align: center;
      font-size: 20px;
      line-height: 2.2;
      direction: rtl;
      margin-top: 20px;
      font-weight: bold;
    }

    .latin, .arti {
      margin-top: 20px;
      text-align: justify;
      font-family: 'Roboto', sans-serif;
      color: #000;
    }

    .latin {
      font-style: italic;
    }

    @media (min-width: 768px) {
      .container-doa {
        max-width: 600px;
        margin: 0 auto;
      }
    }

    .btn-next-bottom {
      text-align: right;
      margin-top: 30px;
    }

    .btn-next-bottom img {
      width: 48px;
      height: 48px;
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

  <div class="container-doa p-4">
    <div class="judul-doa">
      🌙 Doa Qunut 🌙
    </div>

    <div class="arabic">
      اللّهُمَّ اهْدِنِي فِيمَنْ هَدَيْتَ، وَعَافِنِي فِيمَنْ عَافَيْتَ<br>
      وَتَوَلَّنِي فِيمَنْ تَوَلَّيْتَ، وَبَارِكْ لِي فِيمَا أَعْطَيْتَ<br>
      وَقِنِي شَرَّ مَا قَضَيْتَ، فَإِنَّكَ تَقْضِي وَلَا يُقْضَى عَلَيْكَ<br>
      إِنَّهُ لَا يَذِلُّ مَنْ وَالَيْتَ، وَلَا يَعِزُّ مَنْ عَادَيْتَ<br>
      تَبَارَكْتَ رَبَّنَا وَتَعَالَيْتَ، فَلَكَ الْحَمْدُ عَلَى مَا قَضَيْتَ<br>
      وَنَسْتَغْفِرُكَ وَنَتُوبُ إِلَيْكَ، وَصَلَّى اللهُ عَلَى سَيِّدِنَا مُحَمَّدٍ النَّبِيِّ الْأُمِّيِّ<br>
      وَعَلَى آلِهِ وَصَحْبِهِ وَسَلَّمْ
    </div>

    <div class="latin">
      “Allahummaghfirlī fīman hadait, wa ‘āfinī fīman ‘āfait, wa tawallani fīman tawallait, wa bārik lī fīmā a‘thait, wa qinī syarra mā qadhait, fa innaka taqdhi wa lā yuqdhā ‘alaik, innahu lā yadzillu man wālait, wa lā ya‘izzu man ‘ādait, tabārakta rabbānā wa ta‘ālait, falakal-ḥamdu ‘alā mā qadhait, wa nastaghfiruka wa natūbu ilaik. Wa shallallāhu ‘alā sayyidinā Muḥammad, an-Nabiyyil Ummiyyī wa ‘alā ālihi wa ṣaḥbihi wa sallam”
    </div>

    <div class="arti">
      <strong>Artinya:</strong><br>
      "Ya Allah, berilah aku petunjuk sebagai mana orang-orang yang telah Engkau beri petunjuk, maafkanlah aku sebagaimana orang-orang yang telah Engkau maafkan, tolonglah aku sebagaimana orang-orang yang telah Engkau tolong, berkahilah aku dalam semua pemberian-Mu, dan peliharalah daku berkat karunia-Mu dari keburukan qadha’-Mu. Karena sesungguhnya Engkaulah Yang memberi keputusan dan tiada seorangpun yang menetapkan keputusan terhadap-Mu, dan sesungguhnya tidak akan terhina orang yang Engkau musuhi. Maha suci Engkau wahai Tuhan kami lagi Maha tinggi, bagiMu-lah segala puji atas semua keputusan-Mu. Aku memohon ampun dan bertobat kepada-Mu, dan segala salawat dan salam terlimpahkan kepada junjungan kami Nabi Muhammad dan juga segenap keluarga dan para sahabatnya."
    </div>

    <div class="btn-next-bottom">
      <a href="<?= base_url('Doa/quiz') ?>">
        <img src="<?= base_url('assets/panahh.png') ?>" alt="Lanjut ke Quis">
      </a>
    </div>
  </div>

</body>
</html>