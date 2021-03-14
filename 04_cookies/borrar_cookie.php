<?php

setcookie('idioma_solicitado', '', time() - 1, '/');
header('Location: usar_cookie.php');

?>
