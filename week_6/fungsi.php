<?php

function hitungUmur($thn_lahir, $tahun_sekarang){
    $umur = $tahun_sekarang-$thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam="Assalamu'alaikum"){
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/";

    echo "Saya berusia " . hitungUmur(2005, 2024) . " tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

perkenalan("Afifah");
?>
