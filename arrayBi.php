<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $pais = array(
        "espana" => array(
            "nombre" => "España",
            "lengua" => "Castellano",
            "moneda" => "euro"
        ),
        "francia" => array(
            "nombre" => "Francia",
            "lengua" => "Francés",
            "moneda" => "euro"
        )
    );
    foreach ($pais as $clave => $valor) {
        echo "$clave";
        foreach ($valor as $clave2 => $valor2) {
            echo "<br>$clave2: $valor2";
        }
        echo '<br><br>';
    }
    ?>
</body>

</html>