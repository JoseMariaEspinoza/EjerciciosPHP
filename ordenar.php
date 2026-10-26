<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php

    $fruits = array("lemon", "orange", "banana", "apple");
    foreach ($fruits as $key => $fruta) {
        echo "fruits[" . $key . "] = " . $fruta . "<br>";
    }
    echo '<br>';
    sort($fruits);
    foreach ($fruits as $key => $val) {
        echo "fruits[" . $key . "] = " . $val . "<br>";
    }

    $statusCode = 500;
    // Sintaxis moderna acortada (Match)
    $mensaje = match ($statusCode) {
        200, 300 => 'OK',
        404      => 'No encontrado',
        default  => 'Error desconocido',
    };
    echo "<script type='text/javascript'>alert('$mensaje')</script>";

    ?>
</body>

</html>