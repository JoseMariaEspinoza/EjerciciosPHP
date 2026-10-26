<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo 'valor: ' . $_GET['valor'] . '<br>';
    echo 'valor: ' . $_POST['valor'] . '<br>'; //→ vacío
    echo 'valor: ' . $_REQUEST['valor'] . '<br>';
    echo 'nombre: ' . $_GET['nombre'] . '<br>'; //→ vacío
    echo 'nombre: ' . $_POST['nombre'] . '<br>';
    echo 'nombre: ' . $_REQUEST['nombre'] . '<br>';
    ?>
</body>

</html>