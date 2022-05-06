<?php include('server.php');?>
<!-- Incluimos conexion y gestion de errores -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Enlacamos los estilos de la pagina -->
</head>
<body>
    <div class="header">
        <h3>Registro</h3>
    </div>
    <form method="post" action="registro.php">
      <!-- Incluimos tambien la gestions de errores -->
        <?php include('errors.php'); ?>
        <!-- Creamos el formulario de entrada de datos por el usuario -->
        <div class="input-group">
            <label>Nombre Usuario:</label>
            <input type="text" name="username" value="<?php echo $username; ?>" />
        </div>
        <div class="input-group">
            <label>Correo electrónico:</label>
            <input type="email" name="email" value="<?php echo $email; ?>"/>
        </div>
        <div class="input-group">
            <label>Contraseña:</label>
            <input type="password" name="password" />
        </div>
        <div class="input-group">
            <label>Confirmación Contraseña:</label>
            <input type="password" name="conf_pass"></textarea>
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Registrar</button>
        </div>
        <!-- Links a las diferentes opciones -->
        <p>
          Ya estas resgistrado? <a href="login.php"> Sign in</a><br />
          Para volver a la pagina principal clicka <a href='portada.php'>Aqui</a>
        </p>
</form>

</body>
</html>
