</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <H3>Uso del constructor array()</H3>
    <?php
    $matriz3 = array(10 => 1998, 20 => 2000, 30 => 2004, 40 => 2026);
    ?>
    <table border="dashed">
        <tr align="center">
            <?php
            echo "<td>Clave</td>";
            foreach ($matriz3 as $clave => $valor) {
                echo "<td>$clave</td>";
            }
            ?>
        </tr>
        <tr align="center">
            <?php
            echo "<td>Valor</td>";
            foreach ($matriz3 as $clave => $valor) {
                echo "<td>$valor</td>";
            }
            ?>
        </tr>
    </table>
</body>

</html>