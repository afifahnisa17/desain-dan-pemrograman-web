<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Array Terindeks</h2>
    <?php
        $Listdosen=["Elok Nur Hamdana", "Unggul Permana", "Bagas Nugraha"];

        for($i = 1; $i <= 3; $i++){
            echo "Ini perulangan ke-" . $i . "<br>";
            echo $Listdosen[2] . "<br>";
            echo $Listdosen[0] . "<br>";
            echo $Listdosen[1] . "<br>";
            echo "<br>";
        }
        
    ?>
</body>
</html>