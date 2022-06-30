<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <!-- Añadimos los estilos -->
  </head>
  <!-- Creamos formulario de insercion de los comentarios -->
  <body>
    <h2>Ingresar comentario: </h2>
    <form method="post" action="insertar_cont.php">
        <div class="input-group">
            <label>Nombre Pala:</label>
            <input type="text" name="palaname" />
        </div>
        <div class="input-group">
            <label>Nombre:</label>
            <input type="text" name="name"></input>
        </div>
        <div class="input-group">
            <label>Comentario:</label>
            <textarea type="text" name="comment"></textarea>
            <!-- Area en donde se insertara el comentario -->
        </div>
        <div class="input-group">
            <button type="submit" name="insertar" class="btn">Insertar</button><br /><br />
            Para volver a la pagina principal clicka <a href='portada.php'>Aqui! </a>
            <a href="index.php?logout='1'" style="color: red;"> Logout! </a>
            <!-- Podemos insertar info con el boton creado volver a la pagina principal o
              bien la opcion de logout -->
            </ol>
        </div>
      </form>

  </body>
</html>
