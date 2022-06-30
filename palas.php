<!DOCTYPE html>
<html>
  <head>
    <title>Palas</title>
    <style>
       body {
        background: #9A9A9A;
        font-size: 120%;
        font-family: Arial, Helvetica, sans-serif;
      }

      div {
        text-align: center;
      }

      a {
        color: white; 
      }

      #palas {
        margin: auto;
        width: 50%;
      }
      #palas th, td {
        width: 30%;
        color: white;
        background: grey;
        border: 1px solid black;
        text-align: center;
        border-radius: 10px 10px 10px 10px;
        padding: 20px;
      }

      h2 {      
        width: 30%;
        margin: 50px auto 0px;
        color: white;
        background: grey;
        border: 1px solid black;
        text-align: center;
        border-bottom: none;
        border-radius: 10px 10px 0px 0px;
        padding: 20px;
      }

      form {
        text-align: center;
      }

      label {
        color:white;
      }

    </style>
  </head>
  <body>
      <br />
      <!-- Creamos un formulario para tramitar la info  con el metodo get -->
      <form action="pagina_busqueda.php" method="get">
        <label> Buscar: <input type="text" name="buscar"></label>
        <input type="submit" name="enviado" value="Busca!" />
        <a href='portada.php' style= color:white;>Volver</a>
        <!-- Añadimos link de vuelta a la pagina principal-->
      </form>
  </body>
</html>

<?php
include ('server.php');
/* Inlcuimos la conexión a la base de datos y gestion de errores*/
$tam_pag = 5;

if(isset($_GET["pagina"])){

  if($_GET["pagina"]==1){

    header("Location:palas.php");

  } else {

    $page = $_GET["pagina"];

  }

} else {

  $page = 1;

}

$beginning = ($page-1)*$tam_pag;

$sql_tot = "SELECT * FROM pala";

$result = mysqli_query($db, $sql_tot);
$row = mysqli_fetch_array($result);
$num_row = count($row);

$tot_pag = ceil($num_row/$tam_pag);

$sql_limit = "SELECT * FROM pala LIMIT $beginning, $tam_pag";
$result = mysqli_query($db, $sql_limit);

while($row=mysqli_fetch_assoc($result)) {
  /* Recorremos los resultados y guardamos el resultado row para usar luego su valor
  para crear una table con HTML para mostras el resultado determinado, nos fererimos a ellos
  con el nombre del campo gracias a la funcion fecth_assoc*/

  echo '<table id="palas"><th> NOMBRE DE LA PALA: </th><td>' . $row["nombre"] . '</td>';
  echo '<th> PRECIO: </th><td>' . $row["precio"] . '€ </td>';
  
  /*Cogemos el contenido del campo photo en tipo BLOB y lo descodificamos para su correcta muestra*/
  echo '<th> COLOR: </th><td>' . $row["palaCol"] . '</td>';
  echo '<th> PESO: </th><td>' . $row["precio"] . 'g </td>';
  echo '<th> MARCA: </th><td>' . $row["idMarca"] . '</td>';
  echo '<td><img src = "data:image/jpeg; base64,' . base64_encode($row["photo"]) . '" width = "200px" height = "200px"/></td>' ;
  echo '<tr><th>DESCRIPCIÓN: </th><td colspan="10">' . $row["descripcion"] . '</td></tr>';
  echo "<tr><td><a href='portada.php' style= color:white;>Volver</a></td></tr><br />";
  echo '</table><br /><div>';
}

// Paginación

for ($i=1; $i<=$tot_pag; $i++) {

  echo "<a href='?pagina=" . $i . "'>" . $i . " </a>";

}

echo "</div>";
?>
