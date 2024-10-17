<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();

    // Validasi nama
    if(empty($nama)){
        $errors[] = "Nama harus diisi.";
    }

    // Validasi email
    if(empty($email)){
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // Tambahkan negasi '!'
        $errors[] = "Format email tidak valid.";
    }

     // Validasi password minimal 8 karakter
    if (empty($password)) {
        $errors[] = "Password harus diisi.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password harus minimal 8 karakter.";
    }

    // Jika ada kesalahan validasi
    if (!empty($errors)) {  // Jika ada kesalahan
        foreach($errors as $error){
            echo $error . "<br>";
        }
    } else {
        echo "Data berhasil dikirim.";
    }
}
?>
