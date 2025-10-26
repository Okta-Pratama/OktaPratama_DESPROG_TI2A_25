<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Array Asosiatif</title>
    <style>
        table {
            border-collapse: collapse;
            width: 30%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>Array Asosiatif</h2>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];

    echo "<table>";
    echo "<tr><th>Kunci</th><th>Nilai</th></tr>";
    foreach ($Dosen as $key => $value) {
        echo "<tr><td>" . ucwords(str_replace('_', ' ', $key)) . "</td><td>" . $value . "</td></tr>";
    }
    echo "</table>";
    ?>
</body>

</html>