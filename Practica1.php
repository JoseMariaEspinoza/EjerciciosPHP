<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo '<h4>1. Crea un array $dias con los días de la semana y muestra todas sus parejas
    índices/valores mediante un bucle foreach y for.</h4>';
    $dias = array(
        'Lunes',
        'Martes',
        'Miercoles',
        'Jueves',
        'Viernes',
        'Sabado',
        'Domingo'
    );
    echo '<h5>Mostramos con foreach</h5>';
    foreach($dias as $clave =>$valor){
        echo $clave.': '.$valor.'<br>';
    }
    echo '<h5>Mostramos con for</h5>';
    for($i=0; $i<7; $i++){
        echo $i.': '.$dias[$i].'<br>';
    }
    echo '<h4>2. Crea un array con una lista de 5 alumnos de la clase. Muestra primero la lista de
    los 3 primeros alumnos del array y luego los dos últimos de la lista usando las
    funciones array_slice y array_splice.</h4>';
    $alumnos = array('Jose Maria','Paco','Marcos','Mario','Izan');
    echo '<pre>';
    print_r(array_slice($alumnos,0,3));
    echo '</pre>';

    echo '<pre>';
    print_r(array_splice($alumnos,-2));
    echo '</pre>';


    ?>
</body>

</html>