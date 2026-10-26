<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function cmp($a, $b)
    {
        /*if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;*/
        return $a <=> $b; //Devuelve -1, 0 o 1 automáticamente
    }

    $arr = ["Camisa" => 25, "Zapatos" => 80, "Pantalón" => 40];

    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    $arr = ["Camisa" => 25, "Zapatos" => 80, "Pantalón" => 40];
    usort($arr, "cmp");

    echo "<h3>1. usort() - Ordena por precio (Destruye las claves Camisa, Zapatos...)</h3>";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    $arr = ["Camisa" => 25, "Zapatos" => 80, "Pantalón" => 40];
    uksort($arr, function ($a, $b) {
        return strlen($a) <=> strlen($b); // Camisa(6), Zapatos(7), Pantalón(9)
    });
    echo "<h3>2. uksort() - Ordena por longitud de las CLAVES (Mantiene los precios)</h3>";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    
    $arr = ["Camisa" => 25, "Zapatos" => 80, "Pantalón" => 40];
    uasort($arr, function ($a, $b) {
        return $b <=> $a; // Al poner $b antes que $a, invierte el orden a descendente
    });

    echo "<h3>3. uasort() - Ordena por precio de mayor a menor (MANTIENE las claves)</h3>";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    $arr = ["Camisa" => 25, "Zapatos" => 80, "Pantalón" => 40];

    // Para usar multisort con un array asociativo como el tuyo, primero extraemos los valores (precios) 
    // para usarlos como "columna de ordenación", y pasamos el array original para que se ordene en base a ella.
    $precios = array_values($arr);

    // Ordena los precios de menor a mayor (SORT_ASC) y aplica ese mismo orden exacto al array original
    array_multisort($precios, SORT_ASC, $arr);

    echo "<h3>4. array_multisort() - Ordena usando un array auxiliar de precios (Mantiene claves asociativas)</h3>";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    ?>
</body>

</html>