<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $time = $_POST['time'];
    $amount = $_POST['amount'];

    // Simpan jadwal pakan ke file teks
    $schedule = "Waktu: $time, Jumlah: $amount\n";
    file_put_contents('schedule.txt', $schedule, FILE_APPEND);

    echo "Jadwal pakan berhasil diatur!<br>";
    echo "<a href='index.php'>Kembali</a>";
} else {
    echo "Metode tidak valid.";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengatur Pakan Ikan Otomatis</title>
    <link rel="stylesheet" href="Style.css">
</head>