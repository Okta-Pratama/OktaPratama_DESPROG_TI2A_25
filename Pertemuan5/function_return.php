<?php
// function hitung_kuadrat($bilangan)
// {
//     $hasil = $bilangan * $bilangan;
//     return $hasil;
// }

// $angka_awal = 5;
// $kuadrat = hitung_kuadrat($angka_awal);

// echo "Kuadrat dari $angka_awal adalah: " . $kuadrat . "<br>";
// echo "Dua kali kuadrat dari 10 adalah: " . hitung_kuadrat(10) * 2;

function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam = "Assalamualaikum")
{
    echo $salam . ",";
    echo "Perkenalan, nama saya " . $nama . "<br/>";

    echo "Saya berusia " . hitungUmur(1988, 2023) . " tahun<br/>";
    echo "Senang berkenalan dengan anda!<br/>";
}

perkenalan("Elok");
