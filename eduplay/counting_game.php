<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduplay - Permainan Menghitung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet"> <!-- Font ceria -->
    <style>
        body {
            background-image: url('bg.png'); /* Ganti dengan jalur file gambar Anda */
            background-size: cover; /* Agar gambar mencakup seluruh layar */
            background-position: center; /* Pusatkan gambar */
            background-attachment: fixed; /* Gambar tetap saat di-scroll */
            font-family: 'Pangolin', cursive;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin-top: 50px;
        }
        h1 {
            color:rgb(17, 184, 106);
            font-family: 'Pangolin', cursive; /* Font lucu untuk judul */
            font-weight: bold; /* Membuat judul tebal */
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3); /* Menambah efek bayangan */
            font-size: 2.5rem; /* Memperbesar ukuran teks judul */
            text-align: center;
        }
        h3 {
            color: #f39c12;
            font-family: 'Pangolin', cursive; /* Font menarik untuk subjudul */
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        #countingObjects {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="number"] {
            padding: 10px;
            font-size: 1.2rem;
            border-radius: 5px;
            width: 100%;
            margin-top: 10px;
            border: 2px solid #ff6347;
        }
        button {
            background-color: #ff6347;
            color: white;
            padding: 15px;
            border-radius: 10px;
            font-size: 1.2rem;
            border: none;
            width: 100%;
            margin-top: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        button:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .btn-back {
            background-color: #ff69b4;
            border-color: #ff69b4;
            font-size: 1.2rem;
            padding: 15px;
            border-radius: 15px;
            width: 100%;
            margin-top: 30px;
            transition: all 0.3s ease;
        }
        .btn-back:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Permainan Menghitung</h1>
        <h3 align=center>Berapa banyak objek yang terlihat?</h3>
        <div id="countingObjects" class="my-4">
            <!-- Tempat untuk menampilkan objek -->
        </div>
        <input type="number" id="countInput" placeholder="Masukkan jawaban Anda" class="form-control">
        <button onclick="checkCountingAnswer()">Kirim</button>
        <p id="countingResultMessage" class="text-center mt-3"></p>
        <button onclick="nextCounting()">Berikutnya</button>

        <hr>
        <a href="games.php" class="btn btn-back">Kembali ke Halaman Utama</a>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>
