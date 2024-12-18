<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Pakan Ikan</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <h1>Jadwal Pakan Ikan</h1>
    <pre>
        <?php
        // Tampilkan jadwal pakan dari file teks
        if (file_exists('schedule.txt')) {
            echo file_get_contents('schedule.txt');
        } else {
            echo "Belum ada jadwal pakan yang diatur.";
        }
        ?>
    </pre>
    <form method="post" action="">
        <button type="submit" name="reset">Reset Jadwal</button>
    </form>
    <br>
    <a href="index.php">Kembali</a>

    <?php
    // Proses reset jadwal pakan
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset'])) {
        if (file_exists('schedule.txt')) {
            file_put_contents('schedule.txt', ''); // Kosongkan isi file
            echo "<p>Jadwal pakan berhasil direset.</p>";
        } else {
            echo "<p>File jadwal tidak ditemukan.</p>";
        }
    }
    ?>
</body>
</html>
