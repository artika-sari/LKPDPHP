<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usia</title>
    
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
            $nilai = array("80","75","100","85","100","66");
            $hitung = array_count_values($nilai);
            echo "<p class=`code`>Bilangan : 80 75 100 85 100 66 <br>"; 
            echo "<p class=`code`>jumlah angka 100 = " . $hitung['100'];
            ?>
        </div>
        
        <div class="text2">
            <h1>PENJELASAN</h1>
            <p>Yang pertama saya membuat fungsi yang akan menerima data array dan angka yang ingin dicari, lalu saya menampilkan angka yang dicari dan jumlah angka tersebut</p>
        </div>
    </div>

    <footer>
        <a href="">Instagram</a>
        <a href="">LinkedIn</a>
        <a href="">GitHub</a>
    </footer>
</body>
</html>