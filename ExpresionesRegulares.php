<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Array de cadenas para probar
    $cadenas = [
        'josemaria.espinoza.admgmail.com',
        'josemaria.espinoza.adm@gmailcom',
        '1998@gmail.com',
        'josemaria.espinoza.adm@gmail.com'
    ];
    $patron = '/^[\w.%+-]+@[\w.-]+\.[a-zA-Z]{2,}$/';
    $coincidencias = preg_grep($patron, $cadenas);
    print_r($coincidencias);
    ?>
    <?php
    // Array de cadenas para probar
    $cadenas = [
        '641567128',
        '+34641567128',
        '0034641567128',
        '987654321'
    ];
    $patron = '/^(\+34|0034)?[6-9][0-9]{8}$/';
    $coincidencias = preg_grep($patron, $cadenas);
    echo '<br>';
    print_r($coincidencias);
    ?>
    
</body>

</html>