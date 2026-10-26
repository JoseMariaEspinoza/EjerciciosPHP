<?php
echo $_POST['usuario'].'<br>';
echo $_POST['foto'].'<br>';
echo $_POST['sexo'].'<br>';
$actualizar = $_POST['actualizar'];
if ($actualizar)
    print ("Se han actualizado los datos");
echo $_POST['username'].'<br>';
echo $_POST['clave'].'<br>';
$borrar = $_POST['borrar'];
if ($borrar)
    echo "Se ha pulsado el botón de limpiar datos";

echo $_POST['color'].'<br>';
if ( ! empty($_POST['idiomas'])){
    $idiomas = $_POST['idiomas'];
    foreach ($idiomas as $idioma)
    echo "$idioma<br>\n";
}
$extras = $_POST['extras'];
foreach ($extras as $extra)
    echo "$extra<br>\n";
echo $_POST['comentario'];
?>