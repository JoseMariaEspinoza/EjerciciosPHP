<?php
$nombre = $_POST['nombre'];
$clave = $_POST['clave'];
$genero = $_POST['genero'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$pais = $_POST['pais'];
$acepto = $_POST['OK'];
$comentario = $_POST['commentario'];
$foto = $_POST['foto'];

$errores = array();

function comprobarNombre($nombre) {
    if(empty($nombre)) {
        $errores[0] = 'Campo obligatorio';
    }
}

function comprobarClave($clave) {
    $patron = '/^.{6,12}$/u';
    if (empty($clave)) {
        $errores[1] = 'Campo obligatorio';
    }else if(!preg_match($patron,$clave)) {
        $errores[1] = 'La contraseña no es válida';
    }
}

function comprobarGenero($genero) {
    if(empty($genero)) {
        $errores[2] = 'Campo obligatorio';
    }
}

function comprobarFechaNacimiento($fechaNacimiento) {
    $patron = '#^(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[0-2])/[0-9]{2}$#';
    if(!preg_match($patron,$fechaNacimiento)) {
        $errores[3] = 'Formato inválido';
    }
}

function comprobarPais($pais) {
    if(empty($pais)) {
        $errores[4] = 'Campo obligatorio';
    }
}

function comprobarAcepto($acepto) {
    if(empty($acepto)) {
        $errores[5] = 'Campo obligatorio';
    }
}

function comprobarFoto($foto) {
    $patron = '/^$|^.*\.(jpg|jpeg|png|gif)$/i';
    if(!empty($foto)) {
        if(preg_match($patron,$nombreArchivo)) {

        }
    }
}
?>