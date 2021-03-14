<?php

  foreach ($_FILES['archivo_fls'] as $key => $value) {
    echo "Propiedad: $key --- Valor: $value<br>";
  }
  
  $archivo = $_FILES['archivo_fls']['tmp_name'];
  $destino = 'archivos/'.$_FILES['archivo_fls']['name'];
  
  if ($_FILES['archivo_fls']['type'] == 'text/plain') {
    move_uploaded_file($archivo, $destino);
    echo '<br>Archivo subido :)';
  } else {
    echo "<br>Solo se admiten archivos de texto plano<br><a href=\"enviar_archivo.php\">volver</a>";
  }
  

?>