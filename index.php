<?php include("header.php") ?>

<body>
    <style>
        img {
            display: block;
            margin: 0;
            max-width: 100%;
        }

        form {
            width: 100%;
            padding: 16px;
            border-radius: 10px;
            margin: auto;
            background-color: #ccc;
            box-sizing: border-box;
        }

        form label {
            width: 72px;
            font-weight: bold;
            display: inline-block;
        }

        form input[type="submit"] {
            width: 100%;
            height: 100%;
            padding: 8px 16px;
            margin-top: 32px;
            border: 1px solid #000;
            border-radius: 5px;
            display: block;
            color: #fff;
            background-color: #000;
        }

        form input[type="submit"]:hover {
            cursor: pointer;
        }

        textarea {
            width: 100%;
            height: 100%;
            border: 1px solid #f6f6f6;
            border-radius: 3px;
            background-color: #f6f6f6;
            margin: 8px 0;
            resize: none;
            display: block;
        }


        body,
        td,
        th {
            font-family: Verdana, Geneva, sans-serif;
        }

        a:link {
            color: #000;
            text-decoration: none;
        }

        a:visited {
            text-decoration: none;
            color: #000;
        }

        a:hover {
            text-decoration: none;
            color: #000;
        }

        a:active {
            text-decoration: none;
            color: #000;
        }

        #cabeza {
            background: #F90;
            height: 65px;
            position: relative;
            top: 0;
            width: 100%;
        }
    </style>
    <div id="cabeza">
        <table width="100%" border="0">
            <tbody>
                <tr>
                    <td width="15%"><img src="./img/LogoCrediMas Negro.jpeg" width="100" height="100"></td>
                    <td width="85%" valign="middle">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table width="100%" border="0">
                            <tbody>
                                <tr>
                                    <td width="100%" height="60" align="center" valign="middle" bgcolor="#808080"><strong><a href="index.php">HOME</a></strong></td>
                                </tr>
                            </tbody>
                            <td colspan="2">
                                <table width="100%" border="0">
                                    <tbody>
                                        <tr>
                                            <td width="25%" height="60" align="center" valign="middle" bgcolor="#FFFF00"><strong><a href="listar.php">CLIENTES</a></strong></td>
                                            <td width="25%" height="60" align="center" valign="middle" bgcolor="#FF9900"><strong><a href="configuracion.php">CONFIGURACIÓN</a> <a href="caja.php"></a></strong></td>
                                            <td width="25%" height="60" align="center" valign="middle" bgcolor="#FF6600"><strong><a href="comentario.php">DEJE SU COMENTARIO</a> </strong></td>
                                        </tr>
                                        <tr>
                                            <td width="25%" height="60" align="center" valign="middle" bgcolor="#FFFF33"><strong><a href="alta.php">ALTA CLIENTE</a></strong></td>
                                            <td width="25%" height="60" align="center" valign="middle" bgcolor="#FF9900"><strong><a href="pendientes.php">PENDIENTES</a></strong></td>
                                            <td width="25%" height="60" align="center" valign="middle" bgcolor="#FF6600"><strong><a href="logout.php">SALIR</a></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                </tr>
            </tbody>
        </table>
        <tr>
            <td>
                <table width="100%" border="0">
                    <tbody>
                        <tr>
                            <td width="100%" align="center">
                                <form id="form1" name="form1" method="post" action="validar.php">
                                    <label for="nombre"></label>
                                    <table width="100%">
                                        <tbody>
                                            <tr>
                                                <td colspan="7" align="center"><strong>INGRESO USUARIOS</strong></td>
                                            </tr>
                                            <tr>
                                                <td width="216" bgcolor="#999999"><strong>USUARIO</strong></td>
                                                <td colspan="150" bgcolor="#CCCCCC"><input name="usuario" type="text" id="usuario" size="30" required></td>
                                            </tr>
                                            <tr>
                                                <td bgcolor="#999999"><strong>CLAVE</strong></td>
                                                <td bgcolor="#CCCCCC">
                                                    <input name="clave" type="text" id="clave" size="30" required>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="7" align="right"><input type="submit" name="button" id="button" value="INGRESAR"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </table>
        </td>
        </section>
        <?php
        if (isset($_GET['error'])) {
            echo "<h2> Datos Incorrectos </h2>";
        }
        ?>
        <?php include("footer.php") ?>
</body>

</html>