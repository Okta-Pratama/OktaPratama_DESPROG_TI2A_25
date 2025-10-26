<?php
session_start();

$bookings = $_SESSION['bookings'] ?? [];

$hasBookings = !empty($bookings);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pemesanan Proyek | Sumber Rezeki</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.bookings.css">
</head>
<body>
    <div class="container">
        <h1><i class="fas fa-list-alt"></i> Daftar Pemesanan Proyek</h1>
        
        <?php if ($hasBookings): ?>
            <div class="table-responsive">
                <table class="booking-table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Lengkap</th>
                            <th>Layanan</th>
                            <th>Lokasi</th>
                            <th>Deskripsi Proyek</th>
                            <th>Waktu Pemesanan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $counter = 1;
                        foreach ($bookings as $booking): 
                            $tagClass = '';
                            switch ($booking['serviceType']) {
                                case 'Renovasi':
                                    $tagClass = 'tag-renovasi';
                                    break;
                                case 'Bangun Baru':
                                    $tagClass = 'tag-bangun';
                                    break;
                                case 'Desain Interior':
                                    $tagClass = 'tag-desain';
                                    break;
                                default:
                                    $tagClass = 'tag-lainnya';
                                    break;
                            }
                        ?>
                        <tr>
                            <td data-label="No."><?= $counter++ ?></td>
                            <td data-label="Nama"><?= htmlspecialchars($booking['fullName']) ?></td>
                            <td data-label="Layanan">
                                <span class="service-tag <?= $tagClass ?>"><?= htmlspecialchars($booking['serviceType']) ?></span>
                            </td>
                            <td data-label="Lokasi"><?= htmlspecialchars($booking['location']) ?></td>
                            <td data-label="Deskripsi"><?= substr(htmlspecialchars($booking['description']), 0, 50) ?>...</td>
                            <td data-label="Waktu"><?= date("d M Y H:i", strtotime($booking['date'])) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="no-data">
                <i class="fas fa-box-open fa-3x" style="color: #9ca3af;"></i>
                <h2>Belum Ada Pemesanan</h2>
                <p>Saat ini belum ada data pemesanan yang tersimpan dalam sesi Anda.</p>
            </div>
        <?php endif; ?>

        <a href="index.html" class="btn-back"><i class="fas fa-arrow-left"></i> Kembali ke Formulir</a>
        <a href="?action=clear" class="btn-back" style="background-color: var(--error-color); margin-left: 1rem;"><i class="fas fa-trash-alt"></i> Hapus Semua Sesi</a>

    </div>
</body>
</html>
<?php
if (isset($_GET['action']) && $_GET['action'] == 'clear') {
    unset($_SESSION['bookings']);
    header("Location: bookings.php");
    exit();
}
?>
