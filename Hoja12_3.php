<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function generaBotonesRadio($name, $botones, $seleccionado)
    {
        $html = '';
        foreach ($botones as $etiqueta => $valor) {
            $checked = ($valor == $seleccionado) ? ' checked' : '';
            $html .= "<label>" . $etiqueta . "</label>"
                . "<input type='radio' name='" . $name . "' value='" . $valor . "' " . $checked . "/>";
        }
        return $html;
    }
    $arrayBotonesRadio = array('Mujer' => 'M', 'Hombre' => 'H');
    echo 'Sexo: ' . generaBotonesRadio('sexo', $arrayBotonesRadio, $_POST['sexo']);

    ?>
</body>

</html>