<!DOCTYPE html>
<html lang="es">

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
    echo "<h1>Formulario simple</h1>";
    echo "<h3><i>Búsqueda de canciones</i></h3>";
    echo "<form action='ejercicio1-resultados.php' method='post'>";
    echo "<div>";
    echo "<table>";

    echo "<tr><td class='etiqueta'>Texto a buscar:</td>";
    echo "<td><input type='text' name='texto' size='40'/></td></tr>";

    echo "<tr><td class='etiqueta'>Buscar en:</td><td>";
    echo "<input type='radio' name='seleccion' value='cancion'>Títulos de canción ";
    echo "<input type='radio' name='seleccion' value='album'>Nombres de álbum ";
    echo "<input type='radio' name='seleccion' value='ambos' checked>Ambos campos";
    echo "</td></tr>";

    echo "<tr><td class='etiqueta'>Género musical:</td><td>";
    echo "<select name='genero'>";
    echo "<option value='Todos'>Todos</option>";
    echo "<option value='Acustica'>Acústica</option>";
    echo "<option value='Banda Sonora'>Banda Sonora</option>";
    echo "<option value='Blues'>Blues</option>";
    echo "<option value='Electronica'>Electrónica</option>";
    echo "<option value='Folk'>Folk</option>";
    echo "<option value='Jazz'>Jazz</option>";
    echo "<option value='New Age'>New Age</option>";
    echo "<option value='Pop'>Pop</option>";
    echo "<option value='Rock'>Rock</option>";
    echo "</select>";
    echo "</td></tr>";

    echo "<tr><td colspan='2'><input type='submit' value='Buscar'></td></tr>";

    echo "</table>";
    echo "</div>";
    echo "</form>";
    ?>
</body>

</html>