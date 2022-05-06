<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Link a los estilos de todas la aplicación-->
  </head>
  <body>
    <!-- Pequeño formulario para la busqueda -->
    <form action="palas.php" method="get">
      <input type="submit" name="enviado" value="Volver!" />
    </form>
  </body>
</html>

<?php

$busqueda = $_GET["buscar"]; // Variable donde se guarda el input del usuario

include ('server.php'); // Incluimos conexion

// La query a la base de datos para que nos devuelvan lo que pide el usuario.
$sql = "SELECT * FROM pala WHERE (nombre LIKE '%$busqueda') OR (idMarca LIKE '$busqueda')";

$result = mysqli_query($db, $sql);

// Si no nos da ningun resultado informamos del que no existe y damos opcion a pedirla
// en otra seccion de la aplicacion
if (!$row = mysqli_num_rows($result)) {
  echo '<h2> Oops! Esta pala aun no la tenemos! </h2>
        <div style="text-align:center"> Escribenos
        <a href="contacto.php"> aqui </a> y pidela! </div>';
}

// Recorremos los resultados y mostramos la informacion requerida en una tabla con la misma
// estructura que la muestra de productos
while($row=mysqli_fetch_assoc($result)) {

  echo '<table width="100%" align="center"><th> NOMBRE DE LA PALA: </th><td>' . $row["nombre"] . '</td>';
  echo '<th> PRECIO: </th><td>' . $row["precio"] . '€ </td>';
  echo '<img src = "data:image/jpeg; base64,' . base64_encode($row["photo"]) . '" width = "200px" height = "200px"/>' ;
  echo '<th> COLOR: </th><td>' . $row["palaCol"] . '</td>';
  echo '<th> PESO: </th><td>' . $row["precio"] . 'g </td>';
  echo '<th> MARCA: </th><td>' . $row["idMarca"] . '</td>';
  echo '</table><br />';
  echo '<h3>DESCRIPCIÓN: </h3>' . $row["descripcion"] . "<br />";
}

?>
