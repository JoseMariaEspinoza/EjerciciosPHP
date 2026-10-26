<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $array1 = array("a" => "rojo", "b" => "verde", "c" => "azul");
    $array2 = array("x" => "verde", "y" => "amarillo", "z" => "rojo");
    $array3 = array("a" => "rojo", "b" => "amarillo", "d" => "azul");
    $resultado = array_intersect($array1, $array2, $array3);
    echo '<pre>';
    print_r($resultado);
    echo '</pre>';
    $array1 = array("a" => "rojo", "b" => "verde", "c" => "azul");
    $array2 = array("a" => "rojo", "b" => "amarillo", "d" => "azul");

    $resultado = array_intersect_assoc($array1, $array2);
    echo '<pre>';
    print_r($resultado);
    echo '</pre>';
    ?>

</body>

</html>