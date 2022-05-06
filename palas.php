<!DOCTYPE html>
<html>
  <head>
    <title>Palas</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
      <br />
      <!-- Creamos un formulario para tramitar la info  con el metodo get -->
      <form action="pagina_busqueda.php" method="get">
        <label> Buscar: <input type="text" name="buscar"></label>
        <input type="submit" name="enviado" value="Busca!" />
        <a href='portada.php' style= color:red;>Volver</a>
        <!-- Añadimos link de vuelta a la pagina principal-->
      </form>
  </body>
</html>

<?php
include ('server.php');
/* Inlcuimos la conexión a la base de datos y gestion de errores*/

$sql = "SELECT * FROM pala";
/*Seleccionamos todos los productos de la tabla*/

$result = mysqli_query($db, $sql);
/*Guardamos el resultado de la query en un variables*/

while($row=mysqli_fetch_assoc($result)) {
  /* Recorremos los resultados y guardamos el resultado row para usar luego su valor
  para crear una table con HTML para mostras el resultado determinado, nos fererimos a ellos
  con el nombre del campo gracias a la funcion fecth_assoc*/

  echo '<table width="100%" align="center"><th> NOMBRE DE LA PALA: </th><td>' . $row["nombre"] . '</td>';
  echo '<th> PRECIO: </th><td>' . $row["precio"] . '€ </td>';
  echo '<img src = "data:image/jpeg; base64,' . base64_encode($row["photo"]) . '" width = "200px" height = "200px"/>' ;
  /*Cogemos el contenido del campo photo en tipo BLOB y lo descodificamos para su correcta muestra*/
  echo '<th> COLOR: </th><td>' . $row["palaCol"] . '</td>';
  echo '<th> PESO: </th><td>' . $row["precio"] . 'g </td>';
  echo '<th> MARCA: </th><td>' . $row["idMarca"] . '</td>';
  echo '</table><br />';
  echo '<h3>DESCRIPCIÓN: </h3>' . $row["descripcion"];
  echo "<p><a href='portada.php' style= color:red;>Volver</a></p><br /><br />";
  /*Link de vuelta a la portada*/

}

?>
