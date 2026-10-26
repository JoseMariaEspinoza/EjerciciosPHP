<HTML>
<HEAD>
 <TITLE>Prueba Include</TITLE>
<?PHP
// Incluir bibliotecas de funciones
 include ("conecta.php");
 include ("fecha.php");
 include ("cadena.php");
 include ("globals.php");
?>
<link rel="stylesheet" href="estilo.css">
</HEAD>
<BODY>
<?PHP
 include ("cabecera.html");
?>
// Código HTML + PHP
. . .
<?PHP
 include ("pie.html");
?>
</BODY>
</HTML>