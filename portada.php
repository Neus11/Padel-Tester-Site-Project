<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portada</title>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div class="conteiner">
      <!-- creamos el navegador principal, con sus link a las diferentes pagina -->
        <nav class="nav-main">
            <img src="img/logo.PNG" alt="LOGO" class="nav-logo">
            <ul class="nav-menu">
                <li>
                    <a href="login.php">Comentar Palas</a>
                </li>
                <li>
                    <a href="comentarios.php">Comentarios</a>
                </li>
                <li>
                    <a href="acerca_de.html">Acerca de</a>
                </li>
                <li>
                    <a href="contacto.php">Contacto</a>
                </li>
                <li style="background-color: #00C897;">
                    <a class="uno" href="registro.php"> Registro </a>
                </li>
                <li style="background-color:#BD4B4B;">
                    <a class="dos" href="login.php"> Login </a>
                </li>
            </ul>
        </nav>
        <hr>

        <!-- Portada con la foto y el link a las palas-->
        <header class="portada">
            <h2 class="portada-header"> Palas de Padel Reviews!</h2>
            <a href="palas.php"> Ver palas</a>
        </header>
    </div>
</body>
</html>
