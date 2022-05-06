<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Link a los estilos de todas la aplicación-->
</head>
<body>
<div class="header">
        <h3>Login</h3>
    </div>
    <form method="post" action="login.php">
      <!-- Incluimos la gestion de errores-->
        <?php include('errors.php'); ?>
        <!-- Formulario para la insercion de datos del usuario para el log in-->
        <div class="input-group">
            <label>Nombre Usuario:</label>
            <input type="text" name="username" />
        </div>
        <div class="input-group">
            <label>Contraseña:</label>
            <input type="password" name="password" />
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <!-- Links a otras partes de la aplicacion-->
        <p>
          Aún no estas resgistrado? <a href="registro.php">Registrarme</a><br />
          Para volver a la pagina principal clicka <a href='portada.php'>Aqui</a>
        </p>

</body>
</html>
