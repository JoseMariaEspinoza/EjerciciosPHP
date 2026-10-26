<html>

<body>
    <h1>Inserción de la fotográfica del usuario:</h1>
    <form action="subeFichero.php" method="POST" enctype="multipart/form-data">
        <?php
        echo "Nombre usuario:<br><input type='text' name='usuario'/><br>";
        echo "Nombre de su fotografia:<br><input type='text' name='foto'/><br>";
        echo 'Sexo:<br>
            <INPUT TYPE="radio" NAME="sexo" VALUE="M">Mujer
            <INPUT TYPE="radio" NAME="sexo" VALUE="H" CHECKED>Hombre<br>';
        echo '<INPUT TYPE="hidden" NAME="username" VALUE="$usuario">';
        echo 'Contraseña:<br> <INPUT TYPE="password" NAME="clave"><br>';
        echo 'Color:<br>
            <SELECT NAME="color">
            <OPTION VALUE="rojo" SELECTED>Rojo</OPTION>
            <OPTION VALUE="verde">Verde</OPTION>
            <OPTION VALUE="azul">Azul</OPTION>
            </SELECT><br>';
        echo 'Idiomas:<br>
            <SELECT MULTIPLE SIZE="3" NAME="idiomas[ ]">
            <OPTION VALUE="ingles" SELECTED>Inglés</OPTION>
            <OPTION VALUE="frances">Francés</OPTION>
            <OPTION VALUE="aleman">Alemán</OPTION>
            <OPTION VALUE="holandes">Holandés</OPTION>
            </SELECT><br>';
        echo '<INPUT TYPE="checkbox" NAME="extras[ ]" VALUE="garaje" CHECKED>Garaje';
        echo '<INPUT TYPE="checkbox" NAME="extras[ ]" VALUE="piscina">Piscina';
        echo '<INPUT TYPE="checkbox" NAME="extras[ ]" VALUE="jardin">Jardín<br>';
        echo 'Comentario:<br>
            <textarea COLS="50" ROWS="4" NAME="comentario">Este libro me parece ...</textarea><br><br>';
        echo '<INPUT TYPE="FILE" SIZE="44" NAME="imagen"><hr>';
        ?>
        <input type="submit" value="Enviar">
        <INPUT TYPE="button" NAME="actualizar" VALUE="Actualizar datos">
        <INPUT TYPE=reset NAME="borrar" VALUE="Limpiar datos">
    </form>
</body>

</html>