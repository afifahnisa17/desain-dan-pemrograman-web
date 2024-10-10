<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleSlide.css"/>
    <link rel="stylesheet" href="jquery-ui-1.14.0.custom/jquery-ui.css">
    <script src="jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#kotak2").slideToggle("slow");
            });
        });
    </script>
    <title>Data Siswa</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <div id="flip">Klik untuk tampilkan semua data</div>
    <table border="1" id="kotak2">
        <tr>
            <th class="center-text">Nama</th>
            <th class="center-text">Umur</th>
            <th class="center-text">Kelas</th>
            <th class="center-text">Alamat</th>
        </tr>
        <?php
            $siswa = array(
                array("Nama" =>"Siti Aminah", "Umur" => 17, "Kelas" =>"TI-2G", "Alamat" =>"Jl. Kemangi"),
                array("Nama" =>"Aminuddin", "Umur" => 16, "Kelas" =>"TI-2H", "Alamat" =>"Jl. Merdeka"),
                array("Nama" =>"Wildan", "Umur" => 19, "Kelas" =>"TI-2I", "Alamat" =>"Jl. WijayaKusuma"),
                array("Nama" =>"Dandi", "Umur" => 20, "Kelas" =>"TI-2A", "Alamat" =>"Jl. Pegangsaan Timur")
            );

            foreach($siswa as $siswaItem){
                echo "<tr>";
                foreach($siswaItem as $key => $value){
                    echo"<td>". $value ."</td>";
                }
                echo"</tr>";
            }
            
            $jumlahbaris = count($siswa);
            $totalUmur = 0;

            foreach($siswa as $data){
                $totalUmur += $data["Umur"];
            }

            $rataRataUmur = $totalUmur/$jumlahbaris;

            echo "<tr>";
                echo "<th colspan='4' class='center-text'>Rata-rata umur siswa: " . $rataRataUmur . " tahun</th>";
            echo"</tr>";
            
        ?>
    </table>
</body>
</html>