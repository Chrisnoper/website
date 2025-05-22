<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Chrisnoper Fredrik Alexsander</title>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'League Spartan', sans-serif;
      background-color: #111;
      color: white;
    }

    .hero {
      position: relative;
      width: 100%;
      height: 100vh;
      overflow: hidden;
    }

    .hero img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .overlay-text {
      position: absolute;
      bottom: 0;
      background: rgba(0, 0, 0, 0.6);
      width: 100%;
      padding: 40px;
    }

    .overlay-text h1 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .overlay-text p {
      font-size: 1.2rem;
      margin: 5px 0;
    }

    .container {
      max-width: 800px;
      margin: 60px auto;
      padding: 0 20px;
    }

    h2 {
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 10px;
    }

    p {
      font-size: 1rem;
      font-weight: 400;
      margin-bottom: 10px;
    }

    .image-container {
      text-align: center;
      margin-top: 30px;
    }

    .korfball-img {
      width: 80%;
      max-width: 600px;
      margin: 10px auto;
      border-radius: 16px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.25);
      display: block;
    }
  </style>
</head>

<body>

  <!-- Hero Section -->
  <div class="hero">
  <img src="image/profile.jpg" alt="Foto Chrisnoper">
  ...
    <div class="overlay-text">
      <h1>Chrisnoper Fredrik Alexsander</h1>
      <p><strong>Tanggal Lahir:</strong> 19 November 2005</p>
      <p><strong>Tempat Lahir:</strong> Tangerang</p>
      <p><strong>Hobi:</strong> Olahraga</p>
      <p><strong>Profesi:</strong> Atlet Korfball Tangsel</p>
    </div>
  </div>

  <!-- Konten Tentang Korfball -->
  <div class="container">
    <h2>Tentang Korfball</h2>
    <p>
      Korfball adalah olahraga campuran pria & wanita yang mirip basket. Setiap tim terdiri dari 8 pemain 
      (4 pria dan 4 wanita). Tujuannya adalah memasukkan bola ke dalam keranjang tinggi tanpa papan pantul. 
      Korfball menekankan kerja sama dan kesetaraan gender.
    </p>
  </div>

  <!-- Galeri -->
  <div class="image-container">
    <h2>Galeri Korfball</h2>

    <img src="image/korf1.jpg" alt="Foto Korfball 1" class="korfball-img">
    ...
    <img src="image/korf2.jpg" alt="Foto Korfball 2" class="korfball-img">
    ...
    <img src="image/korf3.jpg" alt="Foto Korfball 3" class="korfball-img">
    ...
    <img src="image/korf4.jpg" alt="Foto Korfball 4" class="korfball-img">
    ...
    <img src="image/korf5.jpg" alt="Foto Korfball 5" class="korfball-img">
  </div>

</body>
</html>
