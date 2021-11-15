<?php 
   include("php/conexion.php");
   include("php/validarSesion.php");

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
      <a href="php/CerrarSesion.php">Cerrar sesion</a>
      
      <a href="#"></a>
    </nav>
    <label for="btn-menu">✖️</label>
  </div>
</div>



<div id="contenedorbuscador">
  <h1 id="textoBuscador">Buscar</h1>
  <form action="" method="get" id="contcajas">
    <input type="text" name="busqueda" id="barrabuscar"> 
    <input type="submit" name="enviar" id="btnbuscar">
  </form>

  

</div>


<?php

  if(isset($_GET['enviar'])){
    $busqueda=$_GET['busqueda'];


    $consulta=$conexion->query("SELECT * FROM libro where Titulo LIKE '%$busqueda%'");


    while($libroR=mysqli_fetch_array($consulta)){
        //echo $libroR['Titulo'];




    


  ?>


<div id="resultadoBusqueda">
 <a href="<?php echo "verlibro.php?libroselected=".$libroR['idLibro'] ?> " id="a">  <?php echo $libroR['Titulo']  ."<br>"?>  </a>  
</div>

<?php 
}
}
?>


</body>
</html>