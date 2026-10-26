<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $cadenas = [
        'josemaria.espinoza.admgmail.com',
        'josemaria.espinoza.adm@gmailcom',
        '1998@gmail.com',
        'josemaria.espinoza.adm@gmail.com'
    ];
    echo array_search('jose', $cadenas).'<br>';
    $matriz = array('lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo');
    echo array_pop($matriz).'<br>';
    print_r($matriz);
    echo '<br>'.array_push($matriz,'domingo').'<br>';
    print_r($matriz);
    ?>
</body>

</html>