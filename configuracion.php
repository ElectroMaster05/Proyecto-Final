<?php 
include("php/conexion.php");

   include("php/validarSesion.php");





 ?> 



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Menù Lateral con Css</title>
  <link rel="stylesheet" href="principal2.css">
</head>
<body>
  <header class="header">
    <div class="container">
    <div class="btn-menu">
      <label for="btn-menu">☰</label>
    </div>
      <div class="logo">
        <h1>Logotipo</h1>
      </div>
    <!--  <nav class="menu">
        <a href="#">Inicio</a>
        <a href="#">Nosotros</a>
        <a href="#">Blog</a>
        <a href="#">Contacto</a>
      </nav>  -->
    </div>
  </header>
  <div class="capa"></div>
<!--  --------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
  <div class="cont-menu">
    <nav>
    <a href="principal.php">Busqueda</a>
      <a href="listacolecciones.php">Colecciones</a>
      <a href="listacategorias.php">Categorias</a>
      <a href="configuracion.php">Configuracion</a>
      <a href="php/CerrarSesion.php">Cerrar sesion</a>
      
      <a href="#"></a>
    </nav>
    <label for="btn-menu">✖️</label>
  </div>
</div>

  <div id="contenedorconfig">

    <h1 class="link">Configuracion</h1>

   <a class="link" href="addlibro.php">Añadir Libro</a>  <br>
  <!--  <a href="#">Añadir Autor</a>    <br> -->

  <a class="link" href="crearColeccion.php">Crear coleccion</a>  <br>
    <!--  <p class="nombrecoleccion">...</p>  -->
    </div>

    




</div>
<?php 

?>


</body>
</html>