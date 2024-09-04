<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="100.php">100</a></li>
            <li><a href="sama.php">Bilangan sama</a></li>
            <li><a href="usia.php">Usia</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="text1">
            <?php 

            $usia = [12, 15, 18, 20, 25, 30];
            $anak_anak = 0;
            $dewasa = 0;

            foreach ($usia as $umur) {
                if ($umur < 17 ) {
                    $anak_anak++;
                } else {
                    $dewasa++;
                }
            }

            echo "Usia : 12 15 18 20 25 30";
            echo "<p class=`text1`>Jumlah anak-anak: " . $anak_anak;
            echo "<p class=`text1`>Jumlah dewasa: " . $dewasa;
            ?>
        </div>

        <div class="text2">
            <h1>PENJELASAN</h1>
            <p>Yang ke tiga saya membuat fungsi yang dapat menerima nilai lebih dari 1 dan nilai nilai tersebut di identifikasi sebagai data usia, dari data tersebut dihitung usia anak anak (kurang dari 17) dan usia dewasa (lebih dari atau sama dengan 17)</p>
        </div>
    </div>

    <footer>
        <a href="">Instagram</a>
        <a href="">LinkedIn</a>
        <a href="">GitHub</a>
    </footer>
</body>
</html>