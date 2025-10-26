<?php
// function perkenalan($salam, $nama)
// {
//     echo $salam . ", ";
//     echo "Perkenalkan, nama saya " . $nama . "<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// perkenalan("Selamat Pagi", "Budi");
// echo "<hr>";
// perkenalan("Hi", "Santi");


function perkenalan($salam = "Assalamualaikum", $nama = "Budi")
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan();
echo "<hr>";

perkenalan("Selamat Malam");
echo "<hr>";

perkenalan("Hi", "Santi");
