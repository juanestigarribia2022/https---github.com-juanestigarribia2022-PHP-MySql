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
            </tbody>
        </table>
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
                                    <form id="form1" name="form1" method="post" action="enviaralta.php">
                                        <label for="nombre"></label>
                                        <table width="100%" border="0">
                                            <tbody>
                                                <tr>
                                                    <td colspan="7" align="center"><strong>ALTA DE NUEVO CLIENTE</strong></td>
                                                </tr>
                                                <tr>
                                                    <td width="216" bgcolor="#999999"><strong>Apellido y Nombre</strong></td>
                                                    <td colspan="150" bgcolor="#CCCCCC"><input name="nombre" type="text" id="nombre" size="80"></td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#999999"><strong>Fecha de Nacimiento</strong></td>
                                                    <td bgcolor="#CCCCCC">
                                                        <input name="fecha_nacimiento" type="text" id="dia" size="10">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#999999"><strong>Domicilio/Localidad/C.P.</strong></td>
                                                    <td colspan="6" bgcolor="#CCCCCC"><input name="domicilio" type="text" id="domicilio" size="100">

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#999999"><strong>C.U.I.T./C.U.I.L./D.N.I.</strong></td>
                                                    <td width="157" bgcolor="#CCCCCC">
                                                        <input name="dni" type="text" id="dni">
                                                    </td>
                                                    <td width="134" bgcolor="#999999"><strong>Medio de Pago</strong></td>
                                                    <td width="253" colspan="2" bgcolor="#CCCCCC">
                                                        <input name="pago" type="text" id="pago">
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#999999"><strong>Celular</strong></td>
                                                    <td colspan="2" bgcolor="#CCCCCC">
                                                        <input name="celular" type="text" id="celular">
                                                    </td>
                                                    <td bgcolor="#999999"><strong>Celular Referente</strong></td>
                                                    <td colspan="3" bgcolor="#CCCCCC">
                                                        <input name="celular referente" type="text" id="celular_referente">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#999999"><strong>Mail</strong></td>
                                                    <td colspan="2" bgcolor="#CCCCCC"><input name="mail" type="text" id="mail"></td>
                                                    <td width="134" bgcolor="#999999"><strong>Vendedor</strong></td>
                                                    <td width="253" colspan="2" bgcolor="#CCCCCC">
                                                        <input name="vendedor" type="text" id="vendedor">
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="7" align="right"><input type="submit" name="button" id="button" value="CARGAR DATOS"></td>
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
        <?php include("footer.php") ?>
</body>

</html>