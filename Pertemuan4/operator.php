<?php
$a = 10;
$b = 5;

$hTambah = $a + $b;
$hKurang = $a - $b;
$hKali = $a * $b;
$hBagi = $a / $b;
$sBagi = $a % $b;
$pangkat = $a ** $b;

echo "$a + $b = $hTambah <br>";
echo "$a - $b = $hKurang <br>";
echo "$a * $b = $hKali <br>";
echo "$a / $b = $hBagi <br>";
echo "$a % $b = $sBagi <br>";
echo "$a ** $b = $pangkat <br>";

echo "<br>";

$hSama = $a == $b;
$hTidakSama = $a != $b;
$hLebihKecil = $a < $b;
$hLebihBesar = $a > $b;
$hLebihKecilSama = $a <= $b;
$hLebihBesarSama = $a >= $b;

echo "<h2>Operator Perbandingan PHP</h2>";
echo "$a == $b = " . ($hSama ? "true" : "false") . "<br>";
echo "$a != $b = " . ($hTidakSama ? "true" : "false") . "<br>";
echo "$a < $b = " . ($hLebihKecil ? "true" : "false") . "<br>";
echo "$a > $b = " . ($hLebihBesar ? "true" : "false") . "<br>";
echo "$a <= $b = " . ($hLebihKecilSama ? "true" : "false") . "<br>";
echo "$a >= $b = " . ($hLebihBesarSama ? "true" : "false") . "<br>";

echo "<br>";

$hAnd = $a && $b;
$hOr = $a || $b;
$hNotA = !$a;
$hNotB = !$b;

echo "$a && $b  = $hAnd" . "<br>";
echo "$a || $b  = $hOr" . "<br>";
echo "!$a  = $hNotA" . "<br>";
echo "!$b  = $hNotB" . "<br>";

echo "<br>";

echo ($a += $b) . "<br>";
echo ($a -= $b) . "<br>";
echo ($a *= $b) . "<br>";
echo ($a /= $b) . "<br>";
echo ($a %= $b) . "<br>";

echo "<br>";

$hasilIdentikAB = $a === $b;
$hasilTidakIdentikAB = $a !== $b;

echo "--- Operator Identik --- <br>";
echo "Hasil Identik (\$a === \$b): " . ($hasilIdentikAB ? 'true' : 'false') . "<br>";
echo "Hasil Tidak Identik (\$a !== \$b): " . ($hasilTidakIdentikAB ? 'true' : 'false') . "<br>";

echo "<br>";

$total_kursi = 45;
$kursi_ditempati = 28;
$kursi_sisa = $total_kursi -  $kursi_ditempati;
$percentage = ($kursi_sisa / $total_kursi) * 100;

echo "Persentase kursi yang masih kosong " . number_format($percentage, 2, ".") . "%";
