<?php
$nilaiNumerik = 92;
echo ("Nilai Angka : 92<br>");

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo("Nilai huruf: A<br>");
} elseif($nilaiNumerik >=80 && $nilaiNumerik < 90){
    echo("Nilai huruf: B<br>");
} elseif($nilaiNumerik >=70 && $nilaiNumerik < 80){
    echo("Nilai huruf: C<br>");
} elseif($nilaiNumerik < 70){
    echo("Nilai huruf: D<br>");
}


echo "
<h1>Soal Mengenai Jarak yang dihitung Menggunakan Perulangan</h1>
<hr>
    jarakSaatIni = 0<br>
    jarakTarget = 500<br>
    peningkatanHarian = 30<br>
    hari = 0<br>";


$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "
    <h1>Perhitungan Jarak Atlet</h1>
    <p>Atlet tersebut memerlukan <strong>$hari hari</strong> untuk mencapai jarak <strong>$jarakTarget kilometer</strong>.</p>
<br>";

echo ("
    <h1>Soal Mengenai Jumlah Buah</h1>
    <hr>
    jumlahLahan = 10<br>
    tanamanPerLahan = 5<br>
    buahPertanaman = 10<br>
    jumlahBuah = 0<br>");


    $jumlahLahan = 10;
    $tanamanPerLahan = 5;
    $buahPertanaman = 10;
    $jumlahBuah = 0;

    for($i = 1; $i <= $jumlahLahan; $i++ ){
        $jumlahBuah += ($tanamanPerLahan * $buahPertanaman);
    }

echo ("
    <h1>Perhitungan Jumlah Buah</h1>
    <p>Jumlah Buah yang dipanen adalah: </strong>$jumlahBuah</strong></p>
<br>");

echo ("
    <h1>Soal Mengenai Total Skor Ujian</h1>
    <hr>
    <ul>
        <li>skorUjian = [85, 92, 78, 96, 88]</li>
        <li>totalSkor = 0</li>
    </ul>
    ");

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach($skorUjian as $skor){
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor<br>";

echo"<h1>Nilai Lulus dan Tidak Lulus</h1>
<hr>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach($nilaiSiswa as $nilai){
    if($nilai < 60){
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo"<h1>Soal 1: Menghitung rata-rata Nilai Matematika</h1>
<hr>";

$nilaiMat = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiMat);
$totalNilai = 0;
$count = 0;

echo"Nilai yang ditambahkan yaitu: ";

for($i = 2; $i < 8; $i++){ 
    echo "$nilaiMat[$i] ";
    $totalNilai += $nilaiMat[$i];
    $count++;
}

echo"<br>";

$rataRata = $totalNilai / $count++;

echo"Rata-rata Nilai setelah dikurangi dua nilai tertinggi dan dua nilai terendah adalah: $rataRata";

echo"<h1>Soal 2: Menghitung Harga Setelah Diskon</h1>
<hr>";

$hargaasli = 120000;
$diskon = 0;

if($hargaasli > 100000){
    $diskon = 0.2;
} else {
    $diskon = 0;
}

$hargaSetelahDiskon = $hargaasli - ($hargaasli * $diskon);
echo"
Harga asli yaitu Rp.$hargaasli <br>
Diskon yang diperoleh $diskon <br>
Harga setelah diskon yaitu Rp.$hargaSetelahDiskon";

echo"<h1>Soal 3: Menghitung Skor Pemain Untuk Mendapat Hadiah</h1>
<hr>";

$skor= 400;
$hadiah = ($skor > 500) ? "Ya" : "Tidak";

echo "Total Skor Pemain adalah $skor <br>
Apakah Pemain mendapatkan hadiah? $hadiah"

?>
