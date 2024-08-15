<?php
// Data dinamis
$title = "Selamat Datang di Halaman PHP";
$header = "Halo, Dunia!";
$content = "Ini adalah halaman web sederhana yang dibuat dengan PHP.";
$date = date("l, d F Y"); // Mengambil tanggal saat ini
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            color: #555;
        }
        .date {
            color: #888;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $header; ?></h1>
        <p><?php echo $content; ?></p>
        <div class="date"><?php echo $date; ?></div>
    </div>
</body>
</html>
