<?php include('server.php'); ?>
<!-- Incluimos la conexion -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Comentarios</title>
    <link rel="stylesheet" href="style.css">
    <!-- Incluimos el estilo -->
  </head>
  <body>
      <h2> Comentarios </h2>
  </body>
</html>

<?php
  // Seleccionamos toda la informacion de la tabla comentarios y lo ordenamos por
  //idComm que se mostraran los mas nuevos primero.
  $sql = "SELECT * FROM comentarios ORDER BY idComm DESC";

// Comprobamos que hay resultado y recorremos es el resultado para mostrarlo
  if($result = mysqli_query($db, $sql)) {
    while($row = mysqli_fetch_assoc($result)) {

      echo "<h2>" . $row['nombrePala'] . "</h2>";
      echo "<div style='text-align:center'>" . $row['comentario'] . "</div><br />";
    }
  }

  // Links a otras partes de la aplicación
  echo "<div style='text-align:center'> Para volver a la pagina principal clicka <a href='portada.php'> Aqui! </a></div>";
  echo "<div style='text-align:center'> Para vovler a ingrasera comentario clicka <a href='form_comentario.php' </a> Aqui! </div>";


?>
