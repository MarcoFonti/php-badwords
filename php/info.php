<?php

/* RECUPERO IL VALORE INSERITO DALL'UTENTE */
$text = $_GET['text'];


/* CALCOLO LA LUNGHEZZA DEL TESTO */
$text_length = strlen($text);


/* CESURO IL TESTO INVIATO DALL'UTENTE */
$text_censored = str_replace($text, '***', $text);



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
    <p>Testo censurato: <?= $text_censored ?></p>
</body>

</html>