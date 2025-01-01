<?php
// Ngatur var ke hasil track ...
$perluKacang = '';
// Get input.
$hewan = $_GET['hewan'];
// Pengaturan keperluan kacang.
if ($hewan == 'tupai') {
    $perluKacang = 'Ambillah beberapa kacang tanah..';
}
elseif ($hewan == 'kambing') {
    $perluKacang = 'Dapatkan banyak kacang.';
}
elseif ($hewan == 'gajah') {
    $perluKacang = 'Dapatkan banyak sekali kacang tanah!';
}
else {
    $perluKacang = "Saya tidak tahu berapa banyak kacang yang Anda butuhkan.";
}
?><!doctype html>
<html lang="en">
    <head>
        <title>Kebutuhan Kacang</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="styles.css">
    </head>
<body>
        <h1>Kebutuhan Kacang</h1>
        <p>Hewan kamu adalah: <?= $hewan ?></p>
        <p><?= $perluKacang ?></p>
</body>
</html>
