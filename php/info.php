<?php

$text = $_GET['text'];

$text_length = strlen($text);

$text_censored = str_replace('ciao', '***', $text);

var_dump($text_censored);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le tue Info</title>
</head>
<body>
    <p>Hai scritto: <?= $text ?></p>
    <p>Lunghezza testo: <?= $text_length ?></p>
    <p>testo censurato: <?= $text_censored ?></p>
</body>
</html>