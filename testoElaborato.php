<?php

$paragrafo = $_GET['paragrafo'];
$censura = $_GET['censure'];

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>text-censured</title>
</head>
<body>
    <h1>
        Elaboratore di testo
    </h1>

    <?php
    
    $array_paragrafo = explode(" ",$paragrafo);

    $array_paragrafo = str_ireplace($censura,"***", $array_paragrafo);


    ?>


    
</body>
</html>