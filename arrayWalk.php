<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $precios = array ('prod1'=> 1500,'prod2'=> 1000,'prod3'=>800,'prod6'=>100,'prod7'=>500);
    echo '<pre>';
    print_r($precios);
    echo '</pre>';
    function aEuros(&$valor,$clave){
    $valor=$valor/166.386;
    }
    array_walk($precios,'aEuros');
    echo '<pre>';
    print_r($precios);
    echo '</pre>';
    ?>
    
</body>

</html>