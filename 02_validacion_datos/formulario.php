<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validación de datos con PHP</title>
  <script src="./main.js"></script>
</head>
<body>
  <?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    
    if ($_GET["error"] == "si") {
      echo '<span style="color: red; font-size: 2rem">VERIFICA TUS DATOS</span>';
    }
  ?>
  <h1>Formulario de datos GET</h1>
  <form action="validar_datos.php" method="get" name="valida_datos_get_frm" enctype="application/x-www-form-urlencoded">
    Ingresa tu nombre:
    <input type="text" name="nombre_txt">
    <br><br>
    Ingresa tu password:
    <input type="password" name="password_txt">
    <br><br>
    <input type="radio" name="sexo_rdo" value="M">
    Masculino&nbsp;
    <input type="radio" name="sexo_rdo" value="F">
    Femenino&nbsp;
    <br><br>
    <input type="hidden" name="enviar_hdn" value="get">
    <input type="button" id="enviar-get" name="enviar_btn" value="Enviar x GET">
  </form>
  
  <h1>Formulario de datos POST</h1>
  <form action="validar_datos.php" method="post" name="valida_datos_post_frm" enctype="application/x-www-form-urlencoded">
    Ingresa tu nombre:
    <input type="text" name="nombre_txt">
    <br><br>
    Ingresa tu password:
    <input type="password" name="password_txt">
    <br><br>
    <input type="radio" name="sexo_rdo" value="M">
    Masculino&nbsp;
    <input type="radio" name="sexo_rdo" value="F">
    Femenino&nbsp;
    <br><br>
    <input type="hidden" name="enviar_hdn" value="post">
    <input type="button" id="enviar-post" name="enviar_btn" value="Enviar x POST">
  </form>
</body>
</html>