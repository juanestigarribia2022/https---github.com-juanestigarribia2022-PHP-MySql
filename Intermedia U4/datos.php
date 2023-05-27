<?php include("header.php")?>
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
    <header>
        <div id="cabeza">
            <table width="100%" border="0">
                <tbody>
                    <tr>
                        <td width="15%"><img src="./img/LogoCrediMas Negro.jpeg" width="100" height="100"></td>
                        <td width="85%" valign="middle">
                            <font color="#FFFFFF"><strong>Usuario: admin</strong> </font>
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
                                    <tr>
                                        <td width="25%" height="60" align="center" valign="middle" bgcolor="#FFFF00"><strong><a href="listar.php">LISTAR CLIENTES</a></strong></td>
                                        <td width="25%" height="60" align="center" valign="middle" bgcolor="#FF9900"><strong><a href="configuracion.php">CONFIGURACIÓN</a> <a href="caja.php"></a></strong></td>
                                        <td width="25%" height="60" align="center" valign="middle" bgcolor="#FF6600"><strong><a href="usuarios.php">USUARIOS</a> </strong></td>
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

            </section>
            <table width="100%" border="0" align="center">
                <tbody>
                    <tr>
                        <td width="996"></td>
                    </tr>
                    <tr>
                        <td>
                            <table width="100%" border="0">
                                <tbody>
                                    <tr>
                                        <td colspan="7" align="center">
                                            <table width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td width="160" align="center" bgcolor="#FFFF33">
                                                            <font size="-1"><strong><a href="modificar.php">MODIFICAR DATOS</a></strong></font>
                                                        </td>
                                                        <td width="160" align="center" bgcolor="#FF9900">
                                                            <font size="-1"><strong><a href="nota.php">INICIAR NOTA</a></strong></font>
                                                        </td>
                                                        <td width="160" align="center" bgcolor="#FF6600">
                                                            <font size="-1"><strong><a href="nuevocredito.php">NUEVO CREDITO</a></strong></font>
                                                        </td>    
                        </td>
                    </tr>
                </tbody>
            </table>
            </td>
            </tr>
            <tr>
                <td width="223" bgcolor="#999999"><strong>CLIENTE N°</strong></td>
                <td width="113" bgcolor="#CCCCCC">119</td>
                <td width="86" bgcolor="#999999"><strong>Nombre</strong></td>
                <td colspan="4" bgcolor="#CCCCCC">ACOSTA,MARIA INES ROXANA (AFECTADA)</td>
            </tr>
            <tr>
                <td bgcolor="#999999"><strong>Nacimiento</strong></td>
                <td bgcolor="#CCCCCC"> 21/07/1982 </td>
                <td bgcolor="#999999"><strong>D.N.I.</strong></td>
                <td colspan="4" bgcolor="#CCCCCC">29337250</td>
            </tr>
            <tr>
                <td bgcolor="#999999"><strong>Domicilio</strong></td>
                <td colspan="6" bgcolor="#CCCCCC">BARRIO REPUBLICA ARGENTINA MZ 169 CASA 8 -
                    ()</td>
            </tr>
            <tr>
                <td bgcolor="#999999"><strong>Teléfono</strong></td>
                <td colspan="2" bgcolor="#CCCCCC">3705021466 no existe - 3704226922 no existe</td>
                <td width="133" bgcolor="#999999"><strong>Celular</strong></td>
                <td width="144" colspan="3" bgcolor="#CCCCCC"></td>
            </tr>
            <tr>
                <td bgcolor="#999999"><strong>Cliente desde</strong></td>
                <td colspan="2" bgcolor="#CCCCCC">15/06/2021</td>
                <td bgcolor="#999999"><strong>Mail</strong></td>
                <td colspan="3" bgcolor="#CCCCCC"></td>
            </tr>
            <tr>
                <td colspan="7" align="center"></td>
            </tr>
            <tr>
                <td colspan="7">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="7"><strong>CUOTAS ACTIVAS</strong></td>
            </tr>
            <tr>
                <td colspan="7">
                    <table width="100%" border="0">
                        <tbody>
                            <tr>
                                <td align="center" bgcolor="#999999"><strong>CREDITO</strong></td>
                                <td align="center" bgcolor="#999999"><strong>CUOTA</strong></td>
                                <td align="center" bgcolor="#999999"><strong>FECHA</strong></td>
                                <td align="center" bgcolor="#999999"><strong>VENCIMIENTO</strong></td>
                                <td align="center" bgcolor="#999999"><strong>IMPORTE</strong></td>
                                <td align="center" bgcolor="#999999"><strong>INTERESES</strong></td>
                                <td align="center" bgcolor="#999999"><strong>TOTAL</strong></td>
                                <td align="center" bgcolor="#999999"><strong>PAGOS</strong></td>
                                <td align="center" bgcolor="#999999"><strong>SALDO</strong></td>
                                <td align="center" bgcolor="#999999"><strong>ESTADO</strong></td>
                                <td align="center"><strong></strong></td>

                            </tr>
                            <tr>
                                <td align="center" bgcolor="#cccccc">158</td>
                                <td align="center" bgcolor="#cccccc">6/6</td>
                                <td align="center" bgcolor="#cccccc">12/12/2021</td>
                                <td align="center" bgcolor="#cccccc">22/12/2021</td>
                                <td align="center" bgcolor="#cccccc">$3000.00</td>
                                <td align="center" bgcolor="#cccccc">$14880</td>
                                <td align="center" bgcolor="#cccccc">$17880</td>
                                <td align="center" bgcolor="#cccccc">$0.00</td>
                                <td align="center" bgcolor="#cccccc">$17880</td>
                                <td align="center" bgcolor="#cccccc">
                                    <font color="#FF0000"><strong>496 dias de atraso</strong></font>
                                </td>
                                <td align="center" bgcolor="#cccccc"><strong><a href="pago.php?id=119&amp;res=776">cobrar</a></strong></td>

                            </tr>
                            <tr>
                                <td align="center" bgcolor="#cccccc">158</td>
                                <td align="center" bgcolor="#cccccc">5/6</td>
                                <td align="center" bgcolor="#cccccc">12/11/2021</td>
                                <td align="center" bgcolor="#cccccc">22/11/2021</td>
                                <td align="center" bgcolor="#cccccc">$3000.00</td>
                                <td align="center" bgcolor="#cccccc">$15780</td>
                                <td align="center" bgcolor="#cccccc">$18780</td>
                                <td align="center" bgcolor="#cccccc">$0.00</td>
                                <td align="center" bgcolor="#cccccc">$18780</td>
                                <td align="center" bgcolor="#cccccc">
                                    <font color="#FF0000"><strong>526 dias de atraso</strong></font>
                                </td>
                                <td align="center" bgcolor="#cccccc"><strong><a href="pago.php?id=119&amp;res=775">cobrar</a></strong></td>

                            </tr>
                            <tr>
                                <td align="center" bgcolor="#cccccc">158</td>
                                <td align="center" bgcolor="#cccccc">4/6</td>
                                <td align="center" bgcolor="#cccccc">13/10/2021</td>
                                <td align="center" bgcolor="#cccccc">23/10/2021</td>
                                <td align="center" bgcolor="#cccccc">$3000.00</td>
                                <td align="center" bgcolor="#cccccc">$16680</td>
                                <td align="center" bgcolor="#cccccc">$19680</td>
                                <td align="center" bgcolor="#cccccc">$0.00</td>
                                <td align="center" bgcolor="#cccccc">$19680</td>
                                <td align="center" bgcolor="#cccccc">
                                    <font color="#FF0000"><strong>556 dias de atraso</strong></font>
                                </td>
                                <td align="center" bgcolor="#cccccc"><strong><a href="pago.php?id=119&amp;res=774">cobrar</a></strong></td>

                            </tr>
                            <tr>
                                <td align="center" bgcolor="#cccccc">158</td>
                                <td align="center" bgcolor="#cccccc">3/6</td>
                                <td align="center" bgcolor="#cccccc">13/09/2021</td>
                                <td align="center" bgcolor="#cccccc">23/09/2021</td>
                                <td align="center" bgcolor="#cccccc">$3000.00</td>
                                <td align="center" bgcolor="#cccccc">$17580</td>
                                <td align="center" bgcolor="#cccccc">$20580</td>
                                <td align="center" bgcolor="#cccccc">$0.00</td>
                                <td align="center" bgcolor="#cccccc">$20580</td>
                                <td align="center" bgcolor="#cccccc">
                                    <font color="#FF0000"><strong>586 dias de atraso</strong></font>
                                </td>
                                <td align="center" bgcolor="#cccccc"><strong><a href="pago.php?id=119&amp;res=773">cobrar</a></strong></td>

                            </tr>
                            <tr>
                                <td align="center" bgcolor="#cccccc">158</td>
                                <td align="center" bgcolor="#cccccc">2/6</td>
                                <td align="center" bgcolor="#cccccc">14/08/2021</td>
                                <td align="center" bgcolor="#cccccc">24/08/2021</td>
                                <td align="center" bgcolor="#cccccc">$3000.00</td>
                                <td align="center" bgcolor="#cccccc">$18480</td>
                                <td align="center" bgcolor="#cccccc">$21480</td>
                                <td align="center" bgcolor="#cccccc">$0.00</td>
                                <td align="center" bgcolor="#cccccc">$21480</td>
                                <td align="center" bgcolor="#cccccc">
                                    <font color="#FF0000"><strong>616 dias de atraso</strong></font>
                                </td>
                                <td align="center" bgcolor="#cccccc"><strong><a href="pago.php?id=119&amp;res=772">cobrar</a></strong></td>

                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="7">ESTADO DE CUENTA: $98400</td>
            </tr>
            <tr>
                <td colspan="7"><strong>VENCIDO: $98400</strong></td>
            </tr>
            <tr>
                <td colspan="7">CUOTAS FUTURAS: $</td>
            </tr>
            <tr>
                <td colspan="7">TOTAL A PAGAR: $98400</td>
            </tr>
            <tr>
                <td colspan="7">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="7"><strong>CREDITOS</strong></td>
            </tr>
            <tr>
                <td colspan="7">
                    <table width="100%" border="0">
                        <tbody>
                            <tr>
                                <td align="center" bgcolor="#999999"><strong>Crédito</strong></td>
                                <td align="center" bgcolor="#999999"><strong>Importe</strong></td>
                                <td align="center" bgcolor="#999999"><strong>Concepto</strong></td>
                                <td align="center" bgcolor="#999999"><strong>Fecha</strong></td>
                                <td align="center" bgcolor="#999999"><strong>Estado</strong></td>
                                <td align="center" bgcolor="#999999"><strong> </strong></td>
                            </tr>
                            <tr>
                                <td align="center" bgcolor="#cccccc"><strong>158</strong></td>
                                <td align="center" bgcolor="#cccccc"><strong>$10000.00</strong></td>
                                <td align="center" bgcolor="#cccccc"><strong>VALENTINO</strong></td>
                                <td align="center" bgcolor="#cccccc"><strong>15/06/2021</strong></td>
                                <td align="center" bgcolor="#cccccc"><strong>ABIERTO</strong></td>
                                <td align="center" bgcolor="#cccccc"><strong><a href="vercredito.php?id=119&amp;res=158">ver</a></strong></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="7">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="7"><strong>CUOTAS FUTURAS</strong></td>
            </tr>
            <tr>
                <td colspan="7">
                    <table width="100%" border="0">
                        <tbody>
                            <tr>
                                <td width="70" align="center" bgcolor="#999999"><strong>FECHA</strong></td>
                                <td align="center" bgcolor="#999999"><strong>DETALLE</strong></td>
                                <td width="177" align="center" bgcolor="#999999"><strong>IMPORTE</strong></td>
                                <td width="47" align="center" bgcolor="#999999"><strong>CUOTA</strong></td>
                                <td width="47" align="center">&nbsp;</td>


                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="7"><a href="cuotamanual.php">agregar cuota</a></td>
            </tr>
            <tr>
                <td colspan="7">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="7"><strong>NOTAS</strong></td>
            </tr>
            <tr>
                <td colspan="7">No hay notas sobre el cliente</td>
            </tr>
            <tr>
                <td colspan="7">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="7"><strong>HISTORIAL DE PAGOS</strong></td>
            </tr>
            <tr>
                <td colspan="7">
                    <table width="100%" border="0">
                        <tbody>
                            <tr>
                                <td width="70" align="center" bgcolor="#999999"><strong>REF</strong></td>
                                <td width="70" align="center" bgcolor="#999999"><strong>FECHA</strong></td>
                                <td width="100" align="center" bgcolor="#999999"><strong>CREDITO</strong></td>
                                <td align="center" bgcolor="#999999"><strong>CUOTA</strong></td>
                                <td align="center" bgcolor="#999999"><strong>IMPORTE ABONADO</strong></td>
                                <td align="center"></td>
                                <td align="center"></td>
                            </tr>
                            <tr>
                                <td align="center" bgcolor="#CCCCCC">771</td>
                                <td align="center" bgcolor="#CCCCCC">19/07/2021</td>
                                <td align="center" bgcolor="#CCCCCC">158</td>
                                <td align="center" bgcolor="#CCCCCC">1</td>
                                <td align="center" bgcolor="#CCCCCC">$3000.00</td>
                                <td align="center" bgcolor="#CCCCCC"><a href="copiapago.php?id=119&amp;pago=761">reimprimir</a></td>
                                <td align="center" bgcolor="#CCCCCC"><a href="anularpago.php?id=119&amp;pago=761">anular</a></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="7">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="7">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="7">&nbsp;</td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            <tr>
                <td></td>
            </tr>
            </tbody>
            </table>
</body>
<?php
include("footer.php");
?>

</html>