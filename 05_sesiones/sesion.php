<?php

session_start();

// Evaluo que la sesión continúe verificando una de las variables creadas en 'control.php', cuando ésta ya no coincida con su valor inicial, se redirige al archivo 'salir.php'

if (!$_SESSION['autentificado']) {
  
  header('Location: salir.php');
}

?>