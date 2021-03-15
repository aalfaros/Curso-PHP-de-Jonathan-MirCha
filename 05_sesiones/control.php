<?php

if ($_POST['usuario_txt'] == 'x' && $_POST['password_txt'] == 'y') {
  // inicio la sesión
  session_start();
  
  // declaro mis variables de sesión
  $_SESSION['autentificado'] = true;
  $_SESSION['usuario'] = $_POST['usuario_txt'];
  
  header('Location: archivo_protegido.php');
  
} else {
  
  header('Location: index.php?error=si');
}

?>