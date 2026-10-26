<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $frutas = ["rojo" => "manzana", "verde" => "pera", "azul" => "plátano", "amarillo" => "naranja", "rosa" => "fresa"];

    // Extraer 3 elementos a partir de la posición 1 (índice numérico)
    $porcion = array_slice($frutas, 1, 3);
    echo '<pre>';
    print_r($porcion);
    echo '</pre>';
    ?>

</body>

</html>