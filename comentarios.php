<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Comentarios </title>
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
        width: 30%;
        text-align: center;
        border: 1px solid black;
        background: grey;
        margin: 0px auto 0px;
        border-radius: 0px 0px 0px 0px;
        padding: 20px;
      }

      label {
        color:white;
      }

    </style>
    <!-- Incluimos el estilo -->
  </head>
  <body>
      <h2> Comentarios </h2>
      <form action="pag_busqueda_comm.php" method="get">
        <label> Buscar comentarios: <input type="text" name="buscar"></label>
        <input type="submit" name="enviado" value="Busca!" />
        <a href='portada.php' style= color:white;>Volver</a>
        <!-- Añadimos link de vuelta a la pagina principal-->
      </form>
  </body>
</html>

<?php
include('server.php'); 
  // Seleccionamos toda la informacion de la tabla comentarios y lo ordenamos por
  $tam_pag = 5;

  if(isset($_GET["pagina"])){

    if($_GET["pagina"]==1){

      header("Location:comentarios.php");

    } else {

      $page = $_GET["pagina"];

    }

  } else {

    $page = 1;

  }

  $beginning = ($page-1)*$tam_pag;

  $sql_tot = "SELECT * FROM comentarios";

  $result = mysqli_query($db, $sql_tot);
  $row = mysqli_fetch_array($result);
  $num_row = count($row);

  $tot_pag = ceil($num_row/$tam_pag);

  $sql_limit = "SELECT * FROM comentarios ORDER BY idComm DESC LIMIT $beginning, $tam_pag";
  $result = mysqli_query($db, $sql_limit);

   while($row = mysqli_fetch_assoc($result)) {

    echo "<h2>" . $row['nombrePala'] . ":  </br>"  .  $row['name'] . "</h2>";
    echo "<table id='coment'><tr><td>" . $row['comentario'] . "</td></tr>
          </table>";
  }
  

  // Links a otras partes de la aplicación
  echo "<div> Para volver a la pagina principal clicka <a href='portada.php'> Aqui! </a></div>";
  echo "<div> Para vovler a ingrasera comentario clicka <a href='form_comentario.php' </a> Aqui! </div><div>";

  // Paginación

  for ($i=1; $i<=$tot_pag; $i++) {

    echo "<a href='?pagina=" . $i . "'>" . $i . " </a>";

  }
  
  echo "</div>";
?>
