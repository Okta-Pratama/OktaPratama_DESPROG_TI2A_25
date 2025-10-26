<?php
session_start();
if (!isset($_SESSION['bookings'])) {
    $_SESSION['bookings'] = [];
}
$errors = [];
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fullName = sanitize_input($_POST["fullName"] ?? '');
    $email = sanitize_input($_POST["email"] ?? '');
    $serviceType = sanitize_input($_POST["serviceType"] ?? '');
    $location = sanitize_input($_POST["location"] ?? '');
    $projectDescription = sanitize_input($_POST["projectDescription"] ?? '');
    
    // Validasi Nama (minimal 3 karakter)
    if (empty($fullName) || strlen($fullName) < 3) {
        $errors[] = "Nama lengkap harus diisi minimal 3 karakter.";
    }

    // Validasi Email (format dasar)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Validasi Jenis Layanan (harus dipilih)
    if (empty($serviceType)) {
        $errors[] = "Jenis layanan wajib dipilih.";
    }
    
    // Validasi Lokasi (minimal 2 karakter)
    if (empty($location) || strlen($location) < 2) {
        $errors[] = "Lokasi proyek harus diisi minimal 2 karakter.";
    }
    
    // Validasi Deskripsi (minimal 20 karakter)
    if (empty($projectDescription) || strlen($projectDescription) < 20) {
        $errors[] = "Deskripsi proyek minimal 20 karakter.";
    }
    
    if (empty($errors)) {
        $new_booking = [
            'id' => time(),
            'fullName' => $fullName,
            'email' => $email,
            'serviceType' => $serviceType,
            'location' => $location,
            'description' => $projectDescription,
            'date' => date("Y-m-d H:i:s")
        ];
        
        $_SESSION['bookings'][] = $new_booking;
        ?>
        <!DOCTYPE html>
        <html lang="id">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Konfirmasi Pemesanan</title>
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="styles-booking.css">
        </head>
        <body>
            <div class="card">
                <div class="success">Pemesanan Berhasil!</div>
                <h1>Terima Kasih, <?= htmlspecialchars($fullName) ?>!</h1>
                <p>Pemesanan jasa proyek Anda telah kami terima pada tanggal <?= date("d-m-Y") ?>. Tim kami akan segera menghubungi Anda melalui email untuk konfirmasi lebih lanjut.</p>
                
                <div class="details">
                    <p><strong>Layanan:</strong> <?= htmlspecialchars($serviceType) ?></p>
                    <p><strong>Lokasi:</strong> <?= htmlspecialchars($location) ?></p>
                    <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
                    <p><strong>Deskripsi:</strong> <?= htmlspecialchars($projectDescription) ?></p>
                </div>

                <p style="font-size: 0.9em; color: #9ca3af;">(Total <?= count($_SESSION['bookings']) ?> pemesanan disimpan dalam sesi Anda.)</p>

                <a href="index.html" class="btn-back">Kembali ke Beranda</a>
            </div>
        </body>
        </html>
        <?php
    } else {
        ?>
        <!DOCTYPE html>
        <html lang="id">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Pemesanan Gagal</title>
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="styles-booking-error.css">
        </head>
        <body>
            <div class="card">
                <div class="error">Pemesanan Gagal!</div>
                <h1>Kesalahan Validasi</h1>
                <p>Harap perbaiki kesalahan berikut pada formulir Anda:</p>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?= htmlspecialchars($error) ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="javascript:history.back()" class="btn-back">Kembali ke Formulir</a>
            </div>
        </body>
        </html>
        <?php
    }
} else {

    header("Location: index.html");
    exit();
}

?>
