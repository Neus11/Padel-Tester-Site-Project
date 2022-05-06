<?php include('server.php'); ?>
<!-- Incluimos conexions -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in para comentar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Añadimos los estilos -->
</head>
<body>
    <div class="header">
        <h3>Acceso</h3>
    </div>
    <!-- Gestionamos la sesion si es succesful o no -->
    <div class="contenido">
        <?php if (isset($_SESSION['success'])): ?>
            <div class="error success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <!-- Usamos el nombre del usurio que ha creado sesion y le damos acceso-->
        <?php if (isset($_SESSION['username'])): ?>
            <p> Bienvenido/a <strong><?php echo $_SESSION['username']; ?></strong> ahora ya puedes
            <a href="form_comentario.php"> Ingresar comentarios! </a></p>
            <!-- Opcion de acabso con la sesion-->
            <p><a href="index.php?logout='1'" style="color: red;"> Logout</a></p>
        <?php endif ?>
    </div>

</body>
</html>
