<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "
    <h1>Inisialisasi Nilai</h1>
    <p>
        <ul>
            <li>Nilai a = 10</li>
            <li>Nilai b = 5</li>
        </ul>
    </p>

    <h1>Operator Matematika</h1>
    <p>
        <ul>
            <li>Hasil Penjumlahan dari $a + $b adalah $hasilTambah</li>
            <li>Hasil Pengurangan dari $a - $b adalah $hasilKurang</li>
            <li>Hasil Perkalian dari $a * $b adalah $hasilKali</li>
            <li>Hasil Pembagian dari $a / $b adalah $hasilBagi</li>
            <li>Hasil Sisa bagi dari $a % $b adalah $sisaBagi</li>
            <li>Hasil Pangkat dari $a ** $b adalah $pangkat</li>
        </ul>
    </p>
";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "
    <h1>Operator Perbandingan</h1>
    <p>
        <ul>
            <li>Nilai $a sama dengan $b     : ". ($hasilSama ? 'benar' : 'salah') . "</li>
            <li>Nilai $a tidak sama dengan $b     : ". ($hasilTidakSama ? 'benar' : 'salah') . "</li>
            <li>Nilai $a lebih kecil dari $b     : ". ($hasilLebihKecil ? 'benar' : 'salah') . "</li>
            <li>Nilai $a lebih besar dari $b     : ". ($hasilLebihBesar ? 'benar' : 'salah') . "</li>
            <li>Nilai $a lebih kecil sama dengan $b     : ". ($hasilLebihBesarSama ? 'benar' : 'salah') . "</li>
            <li>Nilai $a lebih besar sama dengan $b     : ". ($hasilLebihKecilSama ? 'benar' : 'salah') . "</li>
            
        </ul>
    </p>
";

$hasilAND = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "
    <h1>Operator AND, OR, NOT</h1>
    <p>
        <ul>
        <li>Nilai $a AND $b     : ". ($hasilAND ? 'benar' : 'salah') . "</li>
            <li>Nilai $a OR $b     : ". ($hasilOr ? 'benar' : 'salah') . "</li>
            <li>Nilai NOT $a       : ". ($hasilNotA ? 'benar' : 'salah') . "</li>
            <li>Nilai NOT $b       : ". ($hasilNotB ? 'benar' : 'salah') . "</li>
            
        </ul>
    </p>
";

$a += $b; 
$hasilTambah = $a;

$a -= $b; 
$hasilKurang = $a;

$a *= $b; 
$hasilKali = $a;

$a /= $b; 
$hasilBagi = $a;

$a %= $b; 
$hasilModulus = $a;

echo "
    <h1>Operator Berulang</h1>
    <p>
        <ul>
            <li>Nilai a += b sama dengan: $hasilTambah</li>
            <li>Nilai a -= b sama dengan: $hasilKurang</li>
            <li>Nilai a *= b sama dengan: $hasilKali</li>
            <li>Nilai a /= b sama dengan: $hasilBagi</li>
            <li>Nilai a %= b sama dengan: $hasilModulus</li>
        </ul>
    </p>
";

$a = 10;
$b = 5;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "
    <h1>Operator Perbandingan 2 Nilai</h1>
    <p>
        <ul>
            <li>Nilai $a apakah identik dengan $b       : ". ($hasilIdentik ? 'benar' : 'salah') . "</li>
            <li>Nilai $a apakah tidak identik dengan $b       : ". ($hasilTidakIdentik ? 'benar' : 'salah') . "</li>
            
        </ul>
    </p>
";

echo("
    Ada soal cerita : Sebuah restoran memiliki 45 kursi di dalamnya. Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. 
    Berapa persen kursi yang masih kosong di restoran tersebut?<br>
    Jawab     :<br>
");

$x = 45; // seluruh kursi
$y = 28;

$kursiKosong = $x - $y;
$persentaseKursiKosong = ($kursiKosong / $x) * 100;

echo("Persentase Kursi Kosong = $persentaseKursiKosong%");
?>