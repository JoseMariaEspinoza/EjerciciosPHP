<html>

<body><?php
        echo "name:" . $_FILES['imagen']['name'] . "<br>";
        echo "tmp_name:" . $_FILES['imagen']['tmp_name'] . "<br>";
        echo "size:" . $_FILES['imagen']['size'] . "<br>";
        echo "type:" . $_FILES['imagen']['type'] . "<br>";
        if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
            $nombreDirectorio = "imagenes/";
            $nombreFichero = $_FILES['imagen']['name'];
            $nombreCompleto = $nombreDirectorio . $nombreFichero;
            if (is_dir($nombreDirectorio)) { // es un directorio existente
                $idUnico = time();
                $nombreFichero = $idUnico . "-" . $nombreFichero;
                $nombreCompleto = $nombreDirectorio . $nombreFichero;
                move_uploaded_file($_FILES['imagen']['tmp_name'], $nombreCompleto);
                echo "Fichero subido con el nombre: $nombreFichero<br>";
            } else echo 'Directorio definitivo inválido';
        } else
            print("No se ha podido subir el fichero\n");
        ?></body>

</html>