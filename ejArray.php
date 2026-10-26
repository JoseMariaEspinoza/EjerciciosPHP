<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo '<B><U>Sentencia foreach</U></B><BR>';
    echo '<BR>Primer ejemplo de foreach<BR>';
    $matriz1 = array('PHP 3', 'PHP 4', 'PHP 5');
    foreach ($matriz1 as $var1) {
        echo "Elemento de matriz1: $var1<br>";
    }
    print "<BR>Segundo ejemplo de foreach<BR>";
    $matriz2 = array();
    $matriz2['PHP 3'] = 1998;
    $matriz2['PHP 4'] = 2000;
    $matriz2['PHP 5'] = 2004;
    foreach ($matriz2 as $clave => $var1) {
        echo "Elemento de matriz 2: clave $clave año $var1<br>";
    }
    print "<BR>Tercer ejemplo de foreach<BR>";
    $matriz3 = array(10 => 1998, 20 => 2000, 30 => 2004);
    $matriz3[40] = 2025;
    $matriz3['PHP'] = 2026;
    foreach ($matriz3 as $clave => $var1) {
        echo "Elemento de matriz 2: clave $clave año $var1<br>";
    }
    echo '<br>Elemento de matriz 2: ' . $matriz2['PHP 3'] . '<br>';
    echo array_search(2000, $matriz2).'<br>';
    unset($matriz1['PHP 3']);
    echo '<BR>Primer ejemplo de foreach(2)<BR>';
    foreach ($matriz1 as $var1) {
        echo "Elemento de matriz1: $var1<br>";
    }
    ?>
</body>

</html>