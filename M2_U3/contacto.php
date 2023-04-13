<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estiloscontacto.css">
    <title>Contacto</title>
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

    </section class="contacto_contenido">
    <form action="enviar_consulta.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" maxlength="50" minlength="2" required  class="contacto_input">

        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" maxlength="50" minlength="2" required class="contacto_input">

        <label for="edad">Edad</label>
        <input type="text" name="edad" maxlength="50" minlength="2" required class="contacto_input">

        <label for="mensaje">Mensaje</label>
        <textarea name="mensaje" maxlength="500" minlength="2" required class="contacto_input" cols="30" rows="10"></textarea>

        <input type="submit" value="Enviar Formulario">
    </form>
    <?php
    if(isset($_GET['ok'])) {
        echo "<h3>Su mensaje ha sido enviado con exito </h3>";
    }
?>
    <section>
</body>

</html>