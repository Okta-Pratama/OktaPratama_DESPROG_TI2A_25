<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <h2>Array Terindeks</h2>
    <?php
    $listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

    // echo $listdosen[2] . "<br>";
    // echo $listdosen[0] . "<br>";
    // echo $listdosen[1] . "<br>";
    echo "<h3>Output Menggunakan Foreach:</h3>";
    foreach ($listdosen as $dosen) {
        echo $dosen . "<br>";
    }
    ?>
</body>

</html>