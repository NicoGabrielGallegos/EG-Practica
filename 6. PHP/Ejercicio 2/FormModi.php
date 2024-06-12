<html>
<head>
    <title>Modificacion</title>
</head>
<boby>
    <?php
    include ("conexion.inc");
    //Captura datos desde el Form anterior
    $id = $_POST['Id'];
    //Arma la instrucción SQL y luego la ejecuta
    $query = "SELECT * FROM capitales WHERE id ='$id' ";
    $result = mysqli_query($connection, $query) or die (mysqli_error($connection));;
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) == 0) {
        echo "No existe una Capital con ese ID...!!! <br>";
        echo ("<A href='FormModiIni.html'>Continuar</A>");
    }
    else {
    ?>
    <FORM action="Modi.php" method="POST" name="FormModi">
    <TABLE width="225">
        <TR>
            <TD> ID:</TD>
            <TD>
                <input type="TEXT" name="Id" size="20" maxlength="50" value="<?php echo($row['id'])?>" readonly>
            </TD>
        </TR>
        <TR>
            <TD> Ciudad:</TD>
            <TD>
                <input type="TEXT" name="Ciudad" size="20" maxlength="50" value="<?php echo($row['ciudad'])?>">
            </TD>
        </TR>
        <TR>
            <TD> Pais:</TD>
            <TD>
                <input type="TEXT" name="Pais" size="20" maxlength="50" value="<?php echo($row['pais'])?>">
            </TD>
        </TR>
        <TR>
            <TD> Habitantes: </TD>
            <TD>
                <input type="NUMBER" name="Habitantes" size="20" maxlength="20" min="1" value="<?php echo($row['habitantes'])?>">
            </TD>
        </TR>
        <TR>
            <TD> Superficie: </TD>
            <TD>
                <input TYPE="NUMBER" name="Superficie" size="20" maxlength="40" min="1" step="0.01" value="<?php echo($row['superficie'])?>">
            </TD>
        </TR>
        <TR>
            <TD> tieneMetro: </TD>
            <TD>
                <select name="TieneMetro">
                    <option value="1" <?php if ($row['tieneMetro']) { echo ' selected'; }?>>S&iacute;</option>
                    <option value="0" <?php if (!$row['tieneMetro']) { echo ' selected'; }?>>No</option>
                </select>
            </TD>
        </TR>
        <TR>
            <TD colspan="2" align="center">
                <input TYPE="SUBMIT" name="Submit" value="Modificar">
                <p><a href="Menu.html">Volver al men&uacute; del ABML</a></p>
            </TD>
        </TR>
    </TABLE>
</FORM>
</boby>
<?php
}
// Liberar conjunto de resultados
mysqli_free_result($result);
// Cerrar la conexion
mysqli_close($connection);
?>