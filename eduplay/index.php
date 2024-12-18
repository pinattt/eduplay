<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduKids - Pendidikan dan Permainan</title>
    <!-- Menambahkan Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Poppins:wght@400;600&display=swap" rel="stylesheet"> <!-- Font yang sama dengan halaman kedua -->
    <link href="assets/css/style.css" rel="stylesheet"> <!-- CSS kustom opsional -->
    <audio autoplay loop muted>
        <source src="musik1.mp3" type="audio/mp3">
    </audio>

    <!-- Menambahkan gambar latar belakang untuk nuansa ceria -->
    <style>
        body {
            background-image: url('bg.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'Baloo 2', cursive; /* Font ramah anak */
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
            color: rgb(17, 184, 106);
            font-family: 'Pangolin', cursive; /* Font menarik untuk subjudul */
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .btn {
            font-size: 1.2rem;
            padding: 15px;
            border-radius: 20px;
            transition: transform 0.3s ease;
        }

        .btn:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(250, 249, 249, 0.2);
            color: black; /* Ubah warna teks saat hover jika diinginkan */
        }

        .btn-primary {
            background-color: #ffcc00;
            border-color: #ffcc00;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-logout {
            background-color: #dc3545; /* Warna merah untuk tombol logout */
            border-color: #dc3545;
            position: absolute;
            top: 20px; /* Atur jarak tombol dari atas halaman */
            right: 20px; /* Atur jarak tombol dari kanan halaman */
        }

        .btn:focus, .btn:active {
            box-shadow: none;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 20px;
            margin-top: 50px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            position: relative; /* Mengatur posisi relatif untuk kontainer */
        }

        .row {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Awan dekoratif -->
    <div class="clouds">
        <div class="cloud cloud1"></div>
        <div class="cloud cloud2"></div>
    </div>

    <!-- Tombol Logout di luar kotak transparan -->
    <a href="logout.php" class="btn btn-logout btn-lg">Logout</a>

    <div class="container my-5">
        <h1 class="text-center mb-4">Selamat Datang di EduKids!</h1>

        <!-- Pilihan Permainan -->
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <a href="games.php" class="btn btn-primary btn-lg w-100">Permainan Belajar Balita</a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="games2.php" class="btn btn-success btn-lg w-100">Permainan Belajar Anak-Anak</a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="parent_zone.php" class="btn btn-info btn-lg w-100">Zona Orang Tua</a>
            </div>
        </div>

        <!-- Pilihan Musik -->
        <div class="text-center mt-5">
            <h3>Pilih Musik</h3>
            <div class="mt-3">
                <select id="musicSelect" class="form-select w-50 mx-auto">
                    <option value="musik1.mp3" align=center>Ampar-Ampar Pisang</option>
                    <option value="musik2.mp3" align=center>Yamko Rambe Yamko</option>
                    <option value="musik3.mp3" align=center>Kicir-Kicir</option>
                </select>
                <button id="playMusic" class="btn btn-primary mt-3">Putar Musik</button>
                <button id="pauseMusic" class="btn btn-warning mt-3" style="display: none;">Pause</button>
                <button id="stopMusic" class="btn btn-danger mt-3" style="display: none;">Stop</button>
            </div>
        </div>

    <!-- Audio Player -->
    <audio id="audioPlayer" loop></audio>

    <!-- Bootstrap JS & Popper.js CDN (Opsional, jika Anda membutuhkan fitur interaktif dari Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <!-- JavaScript -->
    <script>
      const musicSelect = document.getElementById('musicSelect');
        const playMusicButton = document.getElementById('playMusic');
        const pauseMusicButton = document.getElementById('pauseMusic');
        const stopMusicButton = document.getElementById('stopMusic');
        const audioPlayer = document.getElementById('audioPlayer');

        playMusicButton.addEventListener('click', () => {
            const selectedMusic = musicSelect.value;
            audioPlayer.src = selectedMusic;
            audioPlayer.play();

            // Tampilkan tombol Pause dan Stop
            pauseMusicButton.style.display = 'inline-block';
            stopMusicButton.style.display = 'inline-block';
        });

        pauseMusicButton.addEventListener('click', () => {
            if (audioPlayer.paused) {
                audioPlayer.play();
                pauseMusicButton.textContent = 'Pause';
            } else {
                audioPlayer.pause();
                pauseMusicButton.textContent = 'Play';
            }
        });

        stopMusicButton.addEventListener('click', () => {
            audioPlayer.pause();
            audioPlayer.currentTime = 0;

            // Sembunyikan tombol Pause dan Stop
            pauseMusicButton.style.display = 'none';
            stopMusicButton.style.display = 'none';

            // Reset teks tombol Pause
            pauseMusicButton.textContent = 'Pause';
        });
</body>
</html>
