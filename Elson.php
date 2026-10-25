<?php
date_default_timezone_set('Asia/Makassar');

// Data diri
$nama = "Elsonsius Mona";
$panggilan = "Elson";
$peran = "Mahasiswa Rekayasa Sistem Komputer";
$tahunLahir = 2003;
$kota = "Flores, Nagekeo";
$github = "elsonsiusmona";
$email = "elsonsiusmona@gmail.com";

// Hitung umur
$tahunSekarang = (int)date('Y');
$umur = $tahunSekarang - $tahunLahir;

// Sapaan
$jam = (int)date('H');
if ($jam >= 4 && $jam < 11) {
    $sapaan = "Selamat Pagi";
} elseif ($jam >= 11 && $jam < 15) {
    $sapaan = "Selamat Siang";
} elseif ($jam >= 15 && $jam < 18) {
    $sapaan = "Selamat Sore";
} else {
    $sapaan = "Selamat pagi";
}

$kategoriUmur = ($umur >= 18) ? "Dewasa" : "Remaja";
$tanggal = date('d-m-Y');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - <?= htmlspecialchars($panggilan) ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #0c1445 0%, #282a75 100%);
            min-height: 100vh;
            padding: 40px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            background: white;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            max-width: 420px;
            width: 100%;
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 40px 20px;
            text-align: center;
            color: white;
        }

        .foto-profil {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            background: white;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            overflow: hidden;
        }

        .foto-profil img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .sapaan {
            font-size: 16px;
            opacity: 0.9;
            margin-bottom: 5px;
        }

        .nama {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .peran {
            font-size: 15px;
            opacity: 0.85;
        }

        .content {
            padding: 30px 25px;
        }

        .section {
            margin-bottom: 25px;
        }

        .section h3 {
            font-size: 18px;
            color: #ea666616;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 2px solid #f0f0f0;
        }

        .info-row {
            display: flex;
            padding: 8px 0;
            font-size: 15px;
        }

        .info-row strong {
            min-width: 90px;
            color: #333;
        }

        .info-row span {
            color: #555;
        }

        .kontak a {
            color: #667eea;
            text-decoration: none;
        }

        .kontak a:hover {
            text-decoration: underline;
        }

        .footer {
            text-align: center;
            padding: 15px;
            font-size: 13px;
            color: #999;
            background: #f9f9f9;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="header">
        <div class="foto-profil">
            <!-- Ganti "foto.jpg" dengan nama file fotomu -->
            <img src="foto.jpg" alt="Foto Profil" onerror="this.style.display='none'">
        </div>
        <p class="sapaan"><?= $sapaan ?> 👋</p>
        <h1 class="nama"><?= htmlspecialchars($nama) ?></h1>
        <p class="peran"><?= htmlspecialchars($peran) ?></p>
    </div>

    <div class="content">
        <div class="section">
            <h3>📋 Tentang Saya</h3>
            <div class="info-row"><strong>Panggilan:</strong> <span><?= htmlspecialchars($panggilan) ?></span></div>
            <div class="info-row"><strong>Asal:</strong> <span><?= htmlspecialchars($kota) ?></span></div>
            <div class="info-row"><strong>Umur:</strong> <span><?= $umur ?> tahun</span></div>
            <div class="info-row"><strong>Status:</strong> <span><?= $kategoriUmur ?></span></div>
            <div class="info-row"><strong>Tanggal:</strong> <span><?= $tanggal ?></span></div>
        </div>

        <div class="section kontak">
</div>  
            <h3>📬 Hubungi Saya</h3>
            <div class="info-row"><strong>GitHub:</strong> <span><a href="https://github.com/<?= htmlspecialchars($github) ?>" target="_blank">@<?= htmlspecialchars($github) ?></a></span></div>
            <div class="info-row"><strong>Email:</strong> <span><a href="mailto:<?= htmlspecialchars($email) ?>"><?= htmlspecialchars($email) ?></a></span></div>
        </div>
    </div>

    <div class="footer">
        HIDUP JOKOWI! 
    </div>
</div>

</body>
</html>