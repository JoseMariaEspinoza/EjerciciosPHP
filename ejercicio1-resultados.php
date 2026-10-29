<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Verdana, Arial, sans-serif;
            font-size: 13px;
        }

        h1 {
            color: #0066cc;
            font-family: Arial, sans-serif;
        }

        div {
            border: 1px dotted #0066cc;
            padding: 6px;
            width: 760px;
        }

        td.etiqueta {
            font-weight: bold;
            width: 200px;
        }
    </style>
</head>
<body>
    <?php
    echo "<h1>Formulario simple. Resultados del formulario</h1>";
    echo "<p>Estos son los datos introducidos:</p>";
    echo "<ul>";
    echo "<li>Texto de búsqueda: ".$_POST['texto']."</li>";
    echo "<li>Buscar en: ".$_POST['seleccion']."</li>";
    echo "<li>Género: ".$_POST['genero']."</li>";
    echo "</ul>";
    echo "<p>[ <a href='ejercicio1.php'>Nueva búsqueda</a> ]</p>"
    ?>
</body>
</html>