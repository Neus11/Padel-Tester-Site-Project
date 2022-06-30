<?php

    session_start(); /*Empezamos sesions para el login*/

    //Creamos variables para la gestion de la info de la base de datos
    $username = "";
    $email = "";
    $errors = array();
    //Array donde se guardaran los errores

    //Conexion con la base de datos con
    $db = mysqli_connect('localhost', 'root', '', 'padel_tester');

    //Gestion del formulario de registro y de sus errores
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conf_pass = $_POST['conf_pass'];

        // Revisamos que todos los campos esten rellenados
        if (empty($username)) {
            array_push($errors, "Nombre de usuario requerido!");
        }
        if (empty($email)) {
            array_push($errors, "Correo electronico requerido!");
        }
        if (empty($password)) {
            array_push($errors, "Contraseña requerida!");
        }
        if ($password != $conf_pass) {
            array_push($errors, "Las contraseñas no coincide!");
        }

        $query = "SELECT * FROM user WHERE usuario='$username' AND password ='$password'";
        $result = mysqli_query($db, $query);
        //Sino hay errores se introducira la info a la tabla de usuario
        if(count($errors) == 0 && mysqli_num_rows($result) == 0) {
            $sql = "INSERT INTO user (email, password, usuario) VALUES ('$email', '$password', '$username')";
            mysqli_query($db, $sql);
            echo "<h2>Registrado!!</h2>";
            //$_SESSION['username'] = $username;
            //$_SESSION['succes'] = "You are now logged in";
            //header('location: index.php');
          }

          if (mysqli_num_rows($result) == 1) {
          array_push($errors, "No se ha podido insertar, ya existe! Porfavor haga SignIn!");
    }
  }

    // Gestion del formulariologin y sus errores
    if (isset($_POST['login'])) {
        $username = ($_POST['username']);
        $password = ($_POST['password']);

        // Nombre y Contraseña requeridos sino error
        if (empty($username)) {
            array_push($errors, "Nombre de usuario requerido!");
        }
        if (empty($password)) {
            array_push($errors, "Password requerido!");
        }

        // Si no hay errores miraremos si el usuario existe o no y si es asi el login sera exitoso
        if(count($errors) == 0) {
            $query = "SELECT * FROM user WHERE usuario='$username' AND password='$password'";
            $result = mysqli_query($db, $query);

            if (mysqli_num_rows($result) == 1) {

                $_SESSION['username'] = $username;
                $_SESSION['success'] = "Login con exito!";
                header('location: index.php');

            } else {
                array_push($errors, "Usuario o contraseña erroneos! Intentalo otra vez");

            }
        }


    }

// Gestionamos el logut del usuarios destruyendo la sesion.
    if(isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>
