<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Link a los estilos de todas la aplicación-->
    <style>
        #coment {
        margin: auto;
        width: 50%;
      }
      #coment td {
        width: 50%;
        color: white;
        background: grey;
        border: 1px solid black;
        border-top: none;
        text-align: center;
        border-radius: 0px 0px 10px 10px;
        padding: 50px;
      }
    </style>
  </head>
  <body>
    <!-- Pequeño formulario para la busqueda -->
    <form action="comentarios.php" method="get">
      <input type="submit" name="enviado" value="Volver!"></input>
    </form>
  </body>
</html>

<?php

$busqueda = $_GET["buscar"]; // Variable donde se guarda el input del usuario

include ('server.php'); // Incluimos conexion

// La query a la base de datos para que nos devuelvan lo que pide el usuario.
$sql = "SELECT * FROM comentarios WHERE nombrePala LIKE '%$busqueda%'";

$result = mysqli_query($db, $sql);

// Si no nos da ningun resultado informamos del que no existe y damos opcion a pedirla
// en otra seccion de la aplicacion
if (!$row = mysqli_num_rows($result)) {
  echo '<h2> Oops! Esta pala aun no la han comentado! </h2>
        <div style="text-align:center"> Inscribite
        <a href="contacto.php"> aqui </a> y comentala! </div>';
}

// Recorremos los resultados y mostramos la informacion requerida en una tabla con la misma
// estructura que la muestra de productos
while($row=mysqli_fetch_assoc($result)) {
    echo "<h2>" . $row['nombrePala'] . ":  </br>"  .  $row['name'] . "</h2>";
    echo "<table id='coment'><tr><td>" . $row['comentario'] . "</td></tr>
          </table>";
}

?>