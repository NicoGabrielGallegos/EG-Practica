<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Ejercicio 2</title>
</head>
<body>
    <form action="consultas.php" method="post" id="contact-form">
        <label for="consultas">¡Envia tus consultas directamente al webmaster!</label>
        <table>
            <tr>
                <th scope="row" align="left"><label for="nombre">Nombre:</label></td>
                <td><input type="text" name="nombre"></td>
            </tr>
            <tr>
                <th scope="row" align="left"><label for="mail">Mail:</label></td>
                <td><input type="text" name="mail"></td>
            </tr>
            <tr>
                <th scope="row" align="left"><label for="consulta">Consulta:</label></td>
                <td><textarea name="consulta" form="contact-form"></textarea></td>
            </tr>
        </table>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>