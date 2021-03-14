<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subir archivos al servidor con PHP</title>
</head>
<body>
  <form method="post" action="./subir_archivo.php" name="enviar_archivo_frm" enctype="multipart/form-data">
    <input type="file" name="archivo_fls">
    <input type="submit" value="Subir archivo" name="subir_btn">
  </form>
</body>
</html>