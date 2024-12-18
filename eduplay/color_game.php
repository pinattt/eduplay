<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduplay - Permainan Mencocokkan Warna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('bg.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'Pangolin', cursive;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            padding: 30px; /* Mengurangi padding untuk ukuran lebih kecil */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px; /* Memperkecil lebar container */
            margin-top: 30px;
        }
        h1 {
            color:rgb(17, 184, 106);
            font-family: 'Pangolin', cursive;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            font-size: 1.8rem; /* Mengurangi ukuran font judul */
            text-align: center;
        }
        h3 {
            color: #f39c12;
            font-family: 'Pangolin', cursive;
            font-weight: bold;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
            font-size: 1.5rem; /* Mengurangi ukuran font subjudul */
        }
        .color-box {
            width: 150px; /* Mengurangi ukuran box warna */
            height: 150px; /* Mengurangi ukuran box warna */
            margin: 0 auto;
            border: 2px solid #ccc;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        .color-button {
            background-color: #ff6347;
            color: white;
            padding: 10px; /* Mengurangi padding tombol */
            font-size: 1rem; /* Mengurangi ukuran font tombol */
            border-radius: 8px; /* Memperkecil radius border */
            margin: 8px;
            width: 100%;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .color-button:hover, button:hover, .btn-back:hover {
            transform: scale(1.05); /* Sedikit memperkecil efek hover */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        button {
            background-color: #ff6347;
            color: white;
            padding: 12px; /* Mengurangi padding tombol */
            border-radius: 8px; /* Mengurangi radius tombol */
            font-size: 1rem; /* Mengurangi ukuran font tombol */
            border: none;
            width: 100%;
            margin-top: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .btn-back {
            background-color: #ff69b4;
            border-color: #ff69b4;
            font-size: 1rem; /* Mengurangi ukuran font */
            padding: 12px; /* Mengurangi padding tombol */
            border-radius: 12px;
            width: 100%;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Permainan Mencocokkan Warna</h1>
        <h3 align=center>Warna Apakah Ini?</h3>
        <div id="colorBox" class="color-box"></div>

        <button class="color-button" onclick="checkAnswer('red')">Merah</button>
        <button class="color-button" onclick="checkAnswer('blue')">Biru</button>
        <button class="color-button" onclick="checkAnswer('yellow')">Kuning</button>
        <button class="color-button" onclick="checkAnswer('green')">Hijau</button>

        <p id="colorResultMessage" class="text-center mt-3"></p>
        <button onclick="nextColor()" class="btn btn-success">Warna Berikutnya</button>

        <hr>
        <a href="games.php" class="btn btn-back">Kembali ke Halaman Utama</a>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>
