<?php
/*header ('Refresh: 5; url=http://www.google.es');
echo 'Lo que busca no existe, le redirigiremos a Google en 5 segundos

header ('Location: https://www.educa2.madrid.org/web/centro.ies.domenicoscarlat.aranjuez');
echo 'Lo que busca no existe, le redirigiremos a Google en 5 segundos';

header('Content-type: text/pdf');
header('Content-Disposition: attachment;filename="downloaded.pdf"');
readfile('hoja12.pdf');*/

header("Content-type:image/webp");
header("Content-Disposition:attachment ; filename=images.webp");
readfile('./imagenes/images.webp');