<?php 
include("php/conexion.php");

include("php/validarSesion.php");

$ColeccionSelected=$_GET['coleccion'];


  $leercoleccion= "
  SELECT libro.idLibro,PortadaDir,nomre_archivo,Titulo, libro_coleccion.FKcoleccion,FKlibro
from libro,libro_coleccion


WHERE libro_coleccion.FKcoleccion ='$ColeccionSelected' and libro_coleccion.FKlibro=libro.idLibro;
  ";

 $tbLibroColeccion="Select * From libro_coleccion WHERE FKcoleccion='$ColeccionSelected'"; 

   $datoslibroCol=mysqli_query($conexion,$tbLibroColeccion);        

 $datosCsel=mysqli_query($conexion,$leercoleccion);

while($Coldata=mysqli_fetch_array($datosCsel)){

//while($tblCol=mysqli_fetch_array($datoslibroCol)){

 ?> 

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>categoria X</title>
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



  <div id="librosincoleccion">

 <div id="imagenportada">
  <img src="<?php echo $Coldata['PortadaDir'] ?>">
  </div>

<div id="displayColeccion">
  

 <a href="<?php echo "verlibro.php?libroselected=".$Coldata['idLibro'] ?> ">  <?php echo $Coldata['Titulo']  ."<br>"?>  </a> 
 <!-- <p>  Autor:<?php echo $filaAutor['Nombre']  ."<br>"?> </p>  -->



</div>


</div>

  <?php
//echo $Librodata['nomre_archivo'];
//}
  } 
  ?>




</body>
</html>