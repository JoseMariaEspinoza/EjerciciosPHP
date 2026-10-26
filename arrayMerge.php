<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // 1. Declaración de los 3 arrays de precios
    $precios1 = [12.50, 8.90, 15.00];
    $precios2 = [22.00, 18.50, 25.00];
    $precios3 = [6.50, 7.00, 8.50];

    // 2. Combinación (merge) de los 3 arrays en uno solo
    $todos_los_precios = array_merge($precios1, $precios2, $precios3);

    // 3. Mostrar el resultado
    echo '<pre>';
    print_r($todos_los_precios);
    echo '</pre>';


    // Declaración de los 3 arrays (pueden ser simples o multidimensionales)
    $precios1 = [12.50, 8.90, "menu1" => [15.00, 10.00]];
    $precios2 = [22.00, 18.50, "menu1" => [25.00]];
    $precios3 = [6.50, 7.00, 8.50];

    // Combinación recursiva
    $todos_los_precios = array_merge_recursive($precios1, $precios2, $precios3);
    echo '<pre>';
    print_r($todos_los_precios);
    echo '</pre>';
    ?>
</body>

</html>