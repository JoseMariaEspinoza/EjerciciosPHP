<?php
$nombre          = $_POST['nombre'] ?? '';
$clave           = $_POST['clave'] ?? '';
$genero          = $_POST['genero'] ?? '';
$fechaNacimiento = $_POST['fechaNacimiento'] ?? '';
$pais            = $_POST['pais'] ?? [];
$pais = $_POST['pais'] ?? [];
if (!is_array($pais)) {
    $pais = [$pais];
}
$acepto          = $_POST['OK'] ?? '';
$comentario      = $_POST['comentario'] ?? '';
$foto            = $_FILES['foto'] ?? null;

$errores = array();

function comprobarNombre($nombre)
{
    if (empty($nombre)) {
        return 'Campo obligatorio';
    }
    return null;
}

function comprobarClave($clave)
{
    $patron = '/^.{6,12}$/u';
    if (empty($clave)) {
        return 'Campo obligatorio';
    } else if (!preg_match($patron, $clave)) {
        return 'La contraseña no es válida';
    } return null;
}

function comprobarGenero($genero)
{
    if (empty($genero)) {
        return 'Campo obligatorio';
    } return null;
}

function comprobarFechaNacimiento($fechaNacimiento)
{
    $patron = '#^(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[0-2])/[0-9]{2}$#';
    if (!preg_match($patron, $fechaNacimiento)) {
        return 'Formato inválido';
    }  return null;
}

function comprobarPais($pais)
{
    if (empty($pais)) {
        return 'Campo obligatorio';
    } return null;
}

function comprobarAcepto($acepto)
{
    if (empty($acepto)) {
        return 'Campo obligatorio';
    } return null;
}

function comprobarFoto($foto)
{
    $patron = '/^$|^.*\.(jpg|jpeg|png|gif)$/i';
    if (isset($foto['error']) && $foto['error'] !== UPLOAD_ERR_NO_FILE) {
        if (!preg_match($patron, $foto['name'])) {
            return 'Formato inválido';
        }
    } return null;
}


if ($e = comprobarNombre($nombre))                   $errores['nombre'] = $e;
if ($e = comprobarClave($clave))                     $errores['clave'] = $e;
if ($e = comprobarGenero($genero))                   $errores['genero'] = $e;
if ($e = comprobarFechaNacimiento($fechaNacimiento)) $errores['fechaNacimiento'] = $e;
if ($e = comprobarPais($pais))                       $errores['pais'] = $e;
if ($e = comprobarAcepto($acepto))                   $errores['acepto'] = $e;
if ($e = comprobarFoto($foto))                       $errores['foto'] = $e;


function e($texto) {
    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>';

if (empty($errores)) {
    echo "<h1>Formulario enviado!</h1>";
} else {
    echo '<form action="recibeYrepinta.php" method="POST" enctype="multipart/form-data">
        <h1>Formulario</h1>
        <p>Nombre: <input type="text" name="nombre" value="'.e($nombre).'">';
    if(!empty($errores['nombre'])) {
        echo '<font color="red" size="2"> '.$errores['nombre'].'</font>';
    }
    echo '</p>
        <p>Contraseña: <input type="password" name="clave" value="'.e($clave).'">';
    if(!empty($errores['clave'])) {
        echo '<font color="red" size="2"> '.$errores['clave'].'</font>';
    }
    echo '</p>
        <p>Género: <input type="radio" name="genero" value="M" '.($genero== "M" ? "checked" : "").'>M
        <input type="radio" name="genero" value="F" '.($genero== "F" ? "checked" : "").'>F';
    if(!empty($errores['genero'])) {
        echo '<font color="red" size="2"> '.$errores['genero'].'</font>';
    }
    echo '</p>
        <p>Fecha de nacimiento: <input type="text" name="fechaNacimiento" value="'.e($fechaNacimiento).'">';
    if(!empty($errores['fechaNacimiento'])) {
        echo '<font color="red" size="2"> '.$errores['fechaNacimiento'].'</font>';
    }
    echo '</p>
        <p>País: <select multiple size="3" name="pais[]">
                <option value="Espana" '.(in_array("Espana",$pais) ? "selected" : "").'>España</option>
                <option value="Peru" '.(in_array("Peru",$pais) ? "selected" : "").'>Perú</option>
                <option value="China" '.(in_array("China",$pais) ? "selected" : "").'>China</option>
            </select>';
    if(!empty($errores['pais'])) {
        echo '<font color="red" size="2"> '.$errores['pais'].'</font>';
    }
    echo '</p>
        <p>Acepto Términos y condiciones <input type="checkbox" name="OK" '.(!empty($acepto) ? "checked" : "").'>';
    if(!empty($errores['acepto'])) {
        echo '<font color="red" size="2"> '.$errores['acepto'].'</font>';
    }
    echo '</p>
        <p>Comentario: <textarea cols="50" rows="4" name="comentario">'.e($comentario).'</textarea></p>
        <p>Foto: <input type="file" size="5MB" name="foto">';
    if(!empty($errores['foto'])) {
        echo '<font color="red" size="2"> '.$errores['foto'].'</font>';
    }
    echo '</p>
        <input type="submit" value="Enviar">
    </form>';

}
echo '</body>
</html>';
?>
