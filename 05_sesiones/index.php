<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesiones con PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form method="post" action="control.php" name="autentificacion_frm" enctype="application/x-www-form-urlencoded">
    <?php
      error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
      if ($_GET['error'] == 'si') {
        echo '<h2><span>Verifica tus datos</span></h2><span>usuario o contraseña incorrectos</span><br>';
      } else {
        echo '<h2>Introduce tus datos</h2>';
      }
    ?>
    Usuario: <input type="text" name="usuario_txt"><br>
    Password: <input type="password" name="password_txt">
    <br><br>
    <input type="submit" value="Entrar" name="entrar_btn">
  </form>
</body>
</html>