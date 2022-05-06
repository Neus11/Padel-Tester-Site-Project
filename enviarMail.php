<?php
  // Variables donde guardamos la info insertada por el usuario
  // Y la usamos con la funcion mail para enviar el email.
  $texto = $_POST["user_message"];

  $destinatario = $_POST["user_email"];

  $correo = "From: neuscalvo11@gmail.com";

  $exito = mail($destinatario, $texto, $correo);

// Miramos si el email se ha creado con exito o no. E informamos de ello.
// En XAMPP no se puede a no ser que se configure para ello.
// Se ha configurado.

  if($exito) {

    echo "<link rel='stylesheet' href='style.css'>";
    echo "<h2>Mensaje enviado con exito</h2>";
    echo "<form action='contacto.php' method='post'>
          <input type='submit' value='Volver'/>
          </form>";

  } else {

    echo "Ha habido un error";
    echo "<form action='contacto.php' method='post'>
          <input type='submit' value='Volver'/>
          </form>";
  }

?>
