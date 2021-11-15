<?php 
include("php/conexion.php");

   include("php/validarSesion.php");


$consultaColecciones= "Select *
            From coleccion
            ";

 $libroColeccion="Select * From libro_coleccion ";    
 
  $datoslibroColeccion=mysqli_query($conexion,$libroColeccion);             

  $datosColeccion=mysqli_query($conexion,$consultaColecciones);           

  while($filaC=mysqli_fetch_array($datosColeccion)){
 // while($filaC=mysqli_fetch_array($datoslibroColeccion)){

 ?> 



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Menù Lateral con Css</title>
  <link rel="stylesheet" href="principal.css">
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
      <a href="#">Cerrar sesion</a>
      
      <a href="#"></a>
    </nav>
    <label for="btn-menu">✖️</label>
  </div>
</div>

<div id="contenedorcolecciones">

  <h1  id="titulocolecciones">Colecciones</h1>

    <div class="recuadro">
      <img src="<?php echo $filaC['portadaColeccion'] ?>">
     <a id="nombrecoleccion"href="<?php echo "AbrirColeccion.php?coleccion=".$filaC['idColeccion'] ?> ">  <?php echo $filaC['nombreColeccion']  ."<br>"?>  </a> 
   
    </div>

    




</div>
<?php 
}
//}
?>


</body>
</html>