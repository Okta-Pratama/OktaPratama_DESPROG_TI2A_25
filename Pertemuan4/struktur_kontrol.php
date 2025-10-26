<?php

echo "<h2>Struktur Kontrol</h2>";

$nilaiNumerik = 92;
echo "Nilai Numerik: $nilaiNumerik <br>";
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;
while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan {$hari} hari untuk mencapai jarak 500 kilometer.<br><br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;
for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;
foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor<br><br>";

echo "Daftar Nilai Siswa (Lulus/Tidak Lulus):<br>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br>";

$nilaiSiswaSoal21 = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswaSoal21);

$total = 0;
for ($i = 2; $i < (sizeof($nilaiSiswaSoal21) - 2); $i++) {
    $total += $nilaiSiswaSoal21[$i];
}
$avg = $total / (sizeof($nilaiSiswaSoal21) - 4);

echo "Rata-rata nilai 10 siswa tanpa 2 nilai tertinggi dan terendah = $avg";

echo "<br><br>";

$harga_produk = 120000;
$diskon = 0.2;
$harga_setelah_diskon = 0;
if ($harga_produk > 100000) {
    $harga_setelah_diskon = $harga_produk - ($diskon * $harga_produk);
} else {
    $harga_setelah_diskon = $harga_produk;
}

echo "Harga yang harus dibayar pengguna Rp." . $harga_setelah_diskon;

echo "<br><br>";

$pointPemain = [500, 400, 600, 700, 650];
$batasPoint = 500;

foreach ($pointPemain as $point) {
    if ($point > $batasPoint) {
        echo "Total skor pemain: $point <br>";
        echo "Apak pemain mendapatkan hadian tambahan? YA <br><br>";
    } else {
        echo "Total skor pemain: $point <br>";
        echo "Apak pemain mendapatkan hadian tambahan? TIDAK <br><br>";
    }
}

