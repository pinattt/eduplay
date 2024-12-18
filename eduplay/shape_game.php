<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduplay - Shape Identification Game</title>
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
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin-top: 30px;
        }
        h1 {
            font-size: 2rem;
            text-align: center;
            color: rgb(17, 184, 106);
        }
        h3 {
            font-size: 1.2rem;
            text-align: center;
            color: #f39c12;
        }
        .shape-box {
            width: 100px; /* Ukuran diperkecil */
            height: 100px;
            margin: 0 auto 15px;
            border: 4px solid #f39c12;
            border-radius: 10px;
            background-color: #fff;
        }
        .shape-button {
            background-color: #ff6347;
            color: white;
            padding: 10px; /* Padding diperkecil */
            font-size: 1rem; /* Font diperkecil */
            border-radius: 10px;
            margin: 5px;
            width: 100%;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .shape-button:hover {
            transform: scale(1.05);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }
        button {
            padding: 10px;
            font-size: 1rem;
            border-radius: 10px;
        }
        .btn-back {
            background-color: #ff69b4;
            border-color: #ff69b4;
            font-size: 1rem;
            padding: 10px;
            border-radius: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Shape Identification Game</h1>
        <h3>What shape is this?</h3>
        <div id="shapeBox" class="shape-box"></div>

        <button class="shape-button" onclick="checkShape('circle')">Circle</button>
        <button class="shape-button" onclick="checkShape('square')">Square</button>
        <button class="shape-button" onclick="checkShape('triangle')">Triangle</button>

        <p id="shapeResultMessage" class="text-center mt-3"></p>

        <button onclick="nextShape()" class="btn btn-success">Next Shape</button>

        <hr>
        <a href="games.php" class="btn btn-back">Back to Games</a>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>
