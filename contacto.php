<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="style.css">
    <!-- Añadimos los estilos -->
</head>
<body>
    <div class="contacto">
      <!-- Creamos formulario para insertar la info requerida por el usuario -->
        <h2>Contacto</h2>
        <form name="form_contacto" action="enviarMail.php" method="post">
            <ul>
             <li>
               <label for="name">Nombre:</label>
               <input type="text" id="name" name="user_name" />
             </li>
             <li>
               <label for="mail">Correo electrónico:</label>
               <input type="email" id="mail" name="user_email" />
             </li>
             <li>
               <label for="msg">Mensaje:</label>
               <textarea id="msg" name="user_message"></textarea>
             </li>
             <li class="button">
                <button type="submit">Enviar</button>
            </li>
            <li>
                Para volver a la pagina principal clicka <a href='portada.php'>Aqui</a>
            </li>
          </form>
    </div>
</body>
</html>