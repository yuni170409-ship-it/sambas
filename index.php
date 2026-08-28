<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Saya - Indah & Damai</title>
    <style>
        * {margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif;}
        body {line-height: 1.6; color: #333; background: #f0f8f0;}
        
        /* Header */
        header {background: linear-gradient(135deg, #2d5016, #4a7c23); color: white; text-align: center; padding: 60px 20px;}
        header h1 {font-size: 2.5rem; margin-bottom: 10px;}
        header p {font-size: 1.2rem; opacity: 0.9;}
        
        /* Navigasi */
        nav {background: #2d5016; padding: 12px; text-align: center;}
        nav a {color: white; margin: 0 15px; text-decoration: none; font-weight: 500;}
        nav a:hover {color: #a8e063;}
        
        /* Konten */
        .container {max-width: 1100px; margin: 30px auto; padding: 0 20px;}
        section {background: white; padding: 25px; margin-bottom: 25px; border-radius: 12px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);}
        h2 {color: #2d5016; margin-bottom: 15px; border-bottom: 2px solid #a8e063; padding-bottom: 8px;}
        
        /* Foto & Galeri */
        .foto-desa {width: 100%; max-width: 500px; border-radius: 10px; margin: 15px auto; display: block; box-shadow: 0 4px 12px rgba(0,0,0,0.15);}
        .grid {display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-top: 20px;}
        .kartu {background: #f9fef4; padding: 18px; border-radius: 10px; text-align: center;}
        .kartu h3 {color: #4a7c23; margin: 10px 0;}
        
        /* Footer */
        footer {background: #2d5016; color: white; text-align: center; padding: 20px; margin-top: 30px;}
    </style>
</head>
<body>

<!-- 🔹 JUDUL UTAMA -->
<header>
    <h1>🌿 Desa Sambas</h1>
    <p>Desa Asri, Budaya Luhur, Masyarakat Damai</p>
</header>

<!-- 🔹 MENU -->
<nav>
    <a href="#beranda">Beranda</a>
    <a href="#tentang">Tentang Desa</a>
    <a href="#wisata">Wisata</a>
    <a href="#budaya">Budaya</a>
    <a href="#kontak">Kontak</a>
</nav>

<div class="container">

<!-- 🔹 BERANDA -->
<section id="beranda">
    <h2>🏡 Selamat Datang di Desa Kami</h2>
    <p>Desa Sambas terletak di Kabupaten Sambas, Kalimantan Barat. Dikenal sebagai "Serambi Mekkah", desa ini kaya akan sejarah, budaya, dan keindahan alam yang menenangkan hati.</p>
    <img src="foto.jpg" alt="Pemandangan Desa" class="foto-desa">
    <p style="text-align:center; color:#666; font-style:italic;">Keindahan alam desa kami yang asri dan damai</p>
</section>

<!-- 🔹 TENTANG DESA -->
<section id="tentang">
    <h2>📜 Tentang Desa</h2>
    <p>Desa kami memiliki udara yang segar, pemandangan hijau, dan sungai yang jernih. Penduduknya hidup rukun dalam keberagaman suku dan agama. Pertanian dan perkebunan menjadi mata pencaharian utama warga desa.</p>
    <ul style="margin:15px 0 15px 25px;">
        <li>📍 <strong>Lokasi:</strong> Kabupaten Sambas, Kalimantan Barat</li>
        <li>👥 <strong>Penduduk:</strong> Ramah, sopan, dan bergotong royong</li>
        <li>🌾 <strong>Potensi:</strong> Pertanian, perkebunan, dan kerajinan tangan</li>
        <li>🌤️ <strong>Suasana:</strong> Asri, tenang, dan damai</li>
    </ul>
</section>

<!-- 🔹 WISATA -->
<section id="wisata">
    <h2>🏞️ Tempat Wisata</h2>
    <div class="grid">
        <div class="kartu">
            <h3>🌊 Sungai Jernih</h3>
            <p>Air yang bersih dan sejuk, tempat warga mandi dan bermain air.</p>
        </div>
        <div class="kartu">
            <h3>🌲 Kebun Hijau</h3>
            <p>Pemandangan perkebunan yang luas menyejukkan mata.</p>
        </div>
        <div class="kartu">
            <h3>⛰️ Bukit Indah</h3>
            <p>Tempat terbaik menikmati matahari terbit dan pemandangan desa dari atas.</p>
        </div>
    </div>
</section>

<!-- 🔹 BUDAYA -->
<section id="budaya">
    <h2>🎵 Budaya & Tradisi</h2>
    <p>Desa kami melestarikan budaya leluhur sejak dahulu:</p>
    <ul style="margin:15px 0 15px 25px;">
        <li>🎶 Lagu daerah seperti <strong>"Sambas Mendunie"</strong> dan <strong>"Alok Galing"</strong></li>
        <li>🤝 Semangat <strong>gotong royong</strong> warga desa</li>
        <li>🎊 Pesta panen dan adat istiadat turun-temurun</li>
        <li>🕌 Nilai religius dan sopan santun yang dijaga erat</li>
    </ul>
</section>

<!-- 🔹 KONTAK -->
<section id="kontak">
    <h2>📞 Hubungi Kami</h2>
    <p>Ingin berkunjung atau mengenal lebih dekat?</p>
    <p>📧 Email: <strong>yuni170409@gmail.com</strong></p>
    <p>📍 Lokasi: Kabupaten Sambas, Kalimantan Barat</p>
</section>

</div>

<!-- 🔹 BAWAH -->
<footer>
    <p>🌿 Website Desa Semayang &copy; 2026 — Dibuat dengan penuh cinta ❤️</p>
</footer>

</body>
</html>
