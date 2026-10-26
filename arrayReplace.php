<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $matriz_destino = array('altura' => 185, 'peso' => 85);
    $matriz_origen = array('pelo' => 'moreno', 'peso' => 95);
    var_dump(array_replace($matriz_destino, $matriz_origen));
    ?>
</body>

</html>