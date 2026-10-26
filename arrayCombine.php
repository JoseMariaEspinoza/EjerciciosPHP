<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Primer array: servirá para las claves
    $claves = ['n'=>'nombre', 'ca'=>'cargo', 'ci'=>'ciudad'];

    // Segundo array: servirá para los valores
    $valores = ['L'=>'Laura', 'D'=>'Desarrolladora PHP', 'M'=>'Madrid'];

    // Combinar ambos arrays en uno asociativo
    $resultado = array_combine($claves, $valores);
    echo '<pre>';
    print_r($resultado);
    echo '</pre>';
    ?>

</body>

</html>