<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Aman</title>
</head>
<body>
<h2>Form Input Aman</h2>
    <form action="proses_form.php" method="post">
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama" required> <br><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        echo "<h3>Data yang Anda Masukkan:</h3>";
        echo "<p> . $input . </p>";

        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        } else{
            echo "Maaf, email yang Anda masukkan tidak valid";
        }

    }
    
    
    ?>
</body>
</html>

