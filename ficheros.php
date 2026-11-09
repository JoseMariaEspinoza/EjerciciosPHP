<?php
$a = fopen('alumnos.txt', 'r');

if ($a) {
    while (!feof($a)) {
        $linea = fgets($a);
        $partes = explode(";",$linea);
        $nombre = trim($partes[0]);
        $curso = trim($partes[1]);
        echo '<h3>'.$nombre. '</h3><p>'.$curso.'</p>'; 
    } 

    fclose($a);
} else
    echo "No se pudo abrir el archivo.";

/*$b = file('alumnos.txt');

if ($b) {
    foreach ($b as $linea) {
        $partes = explode(";",$linea);
        $nombre = trim($partes[0]);
        $curso = trim($partes[1]);
        echo $nombre. '<br>'.$curso.'<hr>';
    }
} else
    echo "No se pudo abrir el archivo.";*/
