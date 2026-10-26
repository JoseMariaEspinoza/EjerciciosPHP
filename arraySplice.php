<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $frutas = ["rojo", "verde", "azul", "amarillo"];
    echo "Array original:\n";
    echo '<pre>';
    print_r($frutas);
    echo '</pre>';
    // Desde el índice 1, elimina 2 elementos y pon "naranja" y "morado" en su lugar
    $eliminados = array_splice($frutas, 1, 2, ["naranja", "morado"]);
    
    echo "Array original modificado:\n";
    echo '<pre>';
    print_r($frutas);
    echo '</pre>';
    echo "Elementos que fueron eliminados:\n";
    echo '<pre>';
    print_r($eliminados);
    echo '</pre>';

    $frutas = ['r'=>"rojo", 'v'=>"verde", 'a'=>"azul", 'a2'=>"amarillo"];
    echo "Array original:\n";
    echo '<pre>';
    print_r($frutas);
    echo '</pre>';
    // Desde el índice 1, elimina 2 elementos y pon "naranja" y "morado" en su lugar
    $eliminados = array_splice($frutas, 'v', 'a', ["naranja", "morado"]);

    echo "Array original modificado:\n";
    echo '<pre>';
    print_r($frutas);
    echo '</pre>';
    echo "Elementos que fueron eliminados:\n";
    echo '<pre>';
    print_r($eliminados);
    echo '</pre>';
    ?>

</body>

</html>