<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengatur Pakan Ikan Otomatis</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <h1>Pengatur Pakan Ikan Otomatis</h1>
    <form action="set_schedule.php" method="POST">
        <label for="time">Waktu Pakan:</label>
        <input type="time" id="time" name="time" required>
        
        <br>
        <label for="amount">Jumlah Pakan:</label>
        <input type="number" id="amount" name="amount" required>
        <br>
        <input type="submit" value="Atur Jadwal Pakan">
    </form>
    <br>
    <a href="view_schedule.php">Lihat Jadwal Pakan</a>
</body>
</html>