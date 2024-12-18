<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduplay - Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('bg.png'); /* Ganti dengan lokasi file Anda */
            background-size: cover; /* Agar gambar mencakup seluruh layar */
            background-position: center; /* Pusatkan gambar */
            background-attachment: fixed; /* Gambar tetap saat di-scroll */
            font-family: 'Pangolin', cursive;
        }
        h1 {
            color:rgb(17, 184, 106);
            font-family: 'Pangolin', cursive; /* Font lucu untuk judul */
            font-weight: bold; /* Membuat judul tebal */
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3); /* Menambah efek bayangan */
            font-size: 3.5rem; /* Memperbesar ukuran teks judul */
            text-align: center;
        }
        h3 {
            color: #f39c12;
            font-family: 'Pangolin', cursive; /* Font menarik untuk subjudul */
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Transparansi */
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }
        .btn {
            font-size: 1.2rem;
            padding: 15px;
            border-radius: 15px;
            margin-top: 20px;
            transition: all 0.3s ease;
            color: white; /* Warna teks tombol seragam */
        }

        .btn:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(250, 249, 249, 0.2);
            color: black; /* Ubah warna teks saat hover jika diinginkan */
        }

        .btn-primary {
            background-color: #f39c12;
            border-color: #f39c12;
        }
        .btn-success {
            background-color: #2ecc71;
            border-color: #2ecc71;
        }
        .btn-info {
            background-color: #3498db;
            border-color: #3498db;
        }
        .btn-secondary {
            background-color: #ff69b4;
            border-color: #ff69b4;
        }
        .row {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Selamat Datang di Eduplay!</h1>
        <h3 class="text-center mb-5">Tempat di mana belajar menjadi seru dan menyenangkan!</h3>
        
        <!-- Pilihan Permainan -->
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <a href="counting_game.php" class="btn btn-primary btn-lg w-100">Permainan Menghitung</a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="shape_game.php" class="btn btn-info btn-lg w-100">Permainan Menebak Bentuk</a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="color_game.php" class="btn btn-success btn-lg w-100">Permainan Menebak Warna</a>
            </div>
        </div>

        <!-- Tombol Kembali -->
        <div class="text-center mt-5">
            <a href="index.php" class="btn btn-secondary btn-lg">Kembali ke Halaman Utama</a>
        </div>
    </div>

    <!-- Menambahkan Bootstrap JS & Popper.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
