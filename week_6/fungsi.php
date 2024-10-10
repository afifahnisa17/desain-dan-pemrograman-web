<?php

function hitungUmur($thn_lahir, $tahun_sekarang){
    $umur = $tahun_sekarang-$thn_lahir;
    return $umur;
}

echo "Umur saya adalah " . hitungUmur(2005, 2024) . " tahun";
?>
