<?php 

session_start();


//destruir todas las variables de sesion
$_SESSION= array();


//destruir la sesion

  session_destroy();
  header('Location: ../inicio.html');



 ?>