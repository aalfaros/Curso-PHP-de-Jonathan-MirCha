<?php
  // con el método isset() se puede verificar si una variable ha sido definida
  if (isset($_GET["enviar_btn"])) {
    echo "<h1>Enviaste los datos por el método GET</h1>Los datos son:<br><br>Nombre: ".$_GET["nombre_txt"]."<br>Password: ".$_GET["password_txt"];
  } else if (isset($_POST["enviar_btn"])) {
    echo "<h1>Enviaste los datos por el método POST</h1>Los datos son:<br><br>Nombre: ".$_POST["nombre_txt"]."<br>Password: ".$_POST["password_txt"];
  }
?>