<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <!-- Link a los estilos de todas la aplicación-->
  </head>
</html>
<!-- Incluimos la conexion -->
<?php include('server.php');

// Variables donde recoger la informacion del usuario
$elNombre = $_POST["palaname"];
$elComentario = $_POST["comment"];

// Consulta que nos permite isertar los comentarios en la table de comentarios
$sql = "INSERT INTO comentarios (nombrePala, comentario) VALUES ('" . $elNombre . "', '" . $elComentario . "')";

$result = mysqli_query($db, $sql);

// Si se ha insertado bien nos muestra mensaje de exito sino nos da error
if ($result) {
  echo "<br/> Mensaje Agregado";
  echo "<form action='comentarios.php' method='post'>
        <input type='submit' value='Ver comentarios'/>
        </form>";
} else {
  echo 'Error en la Insercions prueba de nuevo';
}


?>
