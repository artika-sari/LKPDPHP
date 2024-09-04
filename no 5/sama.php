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

        $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
        $bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

        $intersect = array_intersect($bil1, $bil2);
        $result = array_diff($bil1, $bil2);

        echo "Bilangan 1 : 80, 77, 65, 89, 55, 12, 90, 86 <br>";
        echo "Bilangan 2 : 77, 99, 55, 81, 45, 90, 91, 98 <br>";
        echo "Bilangan yang ada di dalam kedua variable:  " . implode(', ', $intersect) . '<br>';
        echo "Bilangan yang tidak ada di dalam kedua variable:  " . implode(', ', $result);

        // echo `<p class="text1">Bilangan 1 : 80, 77, 65, 89, 55, 12, 90, 86 <br>`;
        // echo `<p class="text1">Bilangan 2 : 77, 99, 55, 81, 45, 90, 91, 98 <br>`;
        // echo `<p class="text1">Bilangan yang ada di kedua variabel: ` . implode(`, `, $intersect) . `<br>`;
        // echo `<p class="text1">Bilangan yang tidak ada di kedua variabel: ` . implode(`, `,$result) . `<br>`;
        ?> 
        </div>

        <div class="text2">
            <h1>PENJELASAN</h1>
            <p>Yang kr dua saya membuat 2 kelompok bilangan dan kita harus mencari bilangan yang sama diantara 2 kelompok tersebut, dan yang di tampilkan adalah bilangan yang ada di kedua kelompok dan bilangan yang hanya ada di suatu kelompok</p>
        </div>
    </div>

    <footer>
        <a href="">Instagram</a>
        <a href="">LinkedIn</a>
        <a href="">GitHub</a>
    </footer>
</body>
</html>