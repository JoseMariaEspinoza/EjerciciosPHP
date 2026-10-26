<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php
    $pais = array(
        "España" => array(
            "Ciudades" => array("Madrid", "Barcelona", "Galicia", "Pais Vasco"),
            "Lengua" => array("Castellano", "Catalan", "Gallego", "Euskera"),
            "Moneda" => "Euro"
        ),
        "Francia" => array(
            "Ciudades" => array("Sena", "Toulouse", "Niza", "Paris"),
            "Lengua" => "Francés",
            "Moneda" => "Euro"
        ),
        "Alemania" => array(
            "Ciudades" => array("Munich", "Hamburgo", "Berlin", "Colonia"),
            "Lengua" => "Alemán",
            "Moneda" => "Euro"
        )
    );

    /*foreach ($pais as $clave => $valor) {
        foreach ($valor as $clave2 => $valor2) {
            echo "<br>$clave2: $valor2";
            if (is_array($valor2)) {
                foreach ($valor2 as $clave3 => $valor3) {
                    echo "<br>$valor3";
                }
            }
        }
        echo '<br><br>';
    }*/

    //print_r($pais);

    foreach ($pais as $clave => $valor) {
        echo "<p>$clave</p>";
        echo "<table>";
        echo "<tr>";
        foreach ($valor as $clave2 => $valor2) {
            echo "<td>$clave2</td>";
            if (is_array($valor2)) {
                foreach ($valor2 as $clave3 => $valor3) echo "<td>$valor3</td>";
            } else {
                echo "<td>$valor2</td>";
            }
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>

</body>

</html>