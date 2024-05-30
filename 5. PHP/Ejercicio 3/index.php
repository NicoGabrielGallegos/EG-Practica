<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Ejercicio 3</title>
</head>
<body>
    <form action="recomendacion.php" method="post" id="contact-form">
        <label for="consultas">¡Comparte nuestro sitio con un amigo!</label>
        <table>
            <tr>
                <th colspan="2">Tus datos</th>
            </tr>
            <tr>
                <th scope="row" align="left"><label for="nom_visitante">Nombre:</label></td>
                <td><input type="text" name="nom_visitante"></td>
                
            </tr>
            <tr>
                <th scope="row" align="left"><label for="mail_visitante">Mail:</label></td>
                <td><input type="text" name="mail_visitante"></td>
            </tr>
        </table>
        <table>
            <tr>
                <th colspan="2">Datos de tu amigo</th>
            </tr>
            <tr>
                <th scope="row" align="left"><label for="nom_invitado">Nombre:</label></td>
                <td><input type="text" name="nom_invitado"></td>
                
            </tr>
            <tr>
                <th scope="row" align="left"><label for="mail_invitado">Mail:</label></td>
                <td><input type="text" name="mail_invitado"></td>
            </tr>
        </table>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>