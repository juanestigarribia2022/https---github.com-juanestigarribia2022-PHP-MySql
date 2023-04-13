<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilosusuarios.css">
    <title>Usuarios</title>
</head>

<body>

    <head>
        <nav class="botonera_principal">
            <ul>
                <li> <a href="index.php">Home</a></li>
                <li> <a href="creditos.php">Creditos</a></li>
                <li> <a href="contacto.php">Contacto</a></li>
                <li> <a href="usuarios.php">Usuarios Registrados</a></li>
            </ul>
        </nav>
    </head>
    <section>

    </section class="usuarios_contenido">
    <form action="enviar_usuarios.php" method="post">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" maxlength="50" minlength="2" required  class="usuario_input">

        <label for="contraseña">Contraseña</label>
        <input type="text" name="contraseña" maxlength="50" minlength="2" required class="contraseña_input">

        <input type="submit" value="Ingresar">
    </form>
    <?php
    if(isset($_GET['ok'])) {
        echo "<h3>Ingreso con exito </h3>";
    }
?>
    <section>
</body>

</html>