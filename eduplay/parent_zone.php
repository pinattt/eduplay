<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Zone - Eduplay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet"> <!-- Font ceria -->
    <style>
        body {
            background: url('bg.png') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Pangolin', cursive;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 50px auto;
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
        .table {
            border-radius: 10px;
            border: none;
            background-color: #f9f9f9;
        }
        .table thead {
            background-color: #ffcc00;
            color: #fff;
            font-size: 1.2rem;
        }
        .table tbody tr {
            background-color: #fff;
            transition: background-color 0.3s ease;
        }
        .table tbody tr:hover {
            background-color: #ffeb3b;
        }
        .table td, .table th {
            padding: 15px;
            text-align: center;
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
        <h1>Parent Zone</h1>
        <h3 align=center>Progress Anak Anda</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Skor</th>
                    <th>Aktivitas</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data -->
                <tr>
                    <td>2/3</td>
                    <td>Tebak</td>
                    <td>2024-12-10</td>
                </tr>
                <tr>
                    <td>10/10</td>
                    <td>Permainan Warna</td>
                    <td>2024-12-09</td>
                </tr>
                <tr>
                    <td>8/10</td>
                    <td>Permainan Bentuk</td>
                    <td>2024-12-08</td>
                </tr>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-back">Kembali ke Halaman Utama</a>
    </div>

    <!-- Menambahkan Bootstrap JS & Popper.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
