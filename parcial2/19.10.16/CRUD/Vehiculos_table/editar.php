<html>
<head>
    <title>Edit</title>
</head>

    <body>
        <a href="index.php">Inicio</a>
        <br/><br/>

        <form name="form1" method="post" action="editar.php">
            <table border="0">
                <tr>
                    <td>Tag</td>
                    <td><input type="text" name="tag" value=IMDM-09876543></td>
                </tr>
                <tr>
                    <td>Placas</td>
                    <td><input type="text" name="placas" value=RET-0064></td>
                </tr>
                <tr>
                    <td>Ubicacion</td>
                    <td><input type="text" name="ingreso" value=San Jerónimo></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value=8></td>
                    <td><input type="submit" name="update" value="update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
