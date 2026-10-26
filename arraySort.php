<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arr = ["Camisa" => 25, "Zapatos" => 80, "Pantalón" => 40];
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    $arr = ["Camisa" => 25, "Zapatos" => 80, "Pantalón" => 40];

    sort($arr);

    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    $arr = ["Camisa" => 25, "Zapatos" => 80, "Pantalón" => 40];

    rsort($arr);

    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    $arr = ["Camisa" => 25, "Zapatos" => 80, "Pantalón" => 40];

    asort($arr);

    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    $arr = ["Camisa" => 25, "Zapatos" => 80, "Pantalón" => 40];

    arsort($arr);

    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    $arr = ["Camisa" => 25, "Zapatos" => 80, "Pantalón" => 40];

    ksort($arr);

    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    $arr = ["Camisa" => 25, "Zapatos" => 80, "Pantalón" => 40];

    krsort($arr);

    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    ?>
</body>

</html>