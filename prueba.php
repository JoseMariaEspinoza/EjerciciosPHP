<!DOCTYPE html>

<head>
    <title>Bienvenido al curso de PHP 7</title>
</head>

<body>
    Estas líneas están escritas directamente en HTML
    <br>
    Esta es una línea incluida directamente en el cuerpo de la página web
    <br>
    <?php
    $expresion = "1";
    if ($expresion == "2") {
        echo "1.Empiezan líneas generadas por PHP<br>\n";
        echo "El contenido de la expresion es $expresion<br>";
        print "2.El texto está por instrucción print de PHP";
    } else
        echo <<<END
        1.Empiezan líneas generadas por PHP<br>\n
        El contenido de la expresion es $expresion<br>
        2.El texto está por instrucción print de PHP<br>
        END;
        echo '<IMG SRC=\'logo.gif\'>';
    ?>
</body>

</html>