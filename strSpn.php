<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Texto que queremos analizar
    $texto = "42 es la respuesta";

    // Lista de caracteres permitidos (solo números)
    $permitidos = "1234567890";

    // Cuenta cuántos caracteres del inicio coinciden con la lista
    $resultado = strcspn($texto, $permitidos,2);

    echo $resultado; // Imprime: 2
    ?>

</body>

</html>