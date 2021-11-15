<?php 
include("php/conexion.php");

include("php/validarSesion.php");

$categoriaSelected=$_GET['category'];


//consuylto Libro
  $consultalibrocat= "Select *
            From libro
            WHERE CategoriasFK='$categoriaSelected'";

  $datos=mysqli_query($conexion,$consultalibrocat);           

  while($fila=mysqli_fetch_array($datos)){
//consulto libro fin

//consulto  Autor
$consultaAutor= "Select *
            From autor
            WHERE idAutor= '$fila[AutorFK]' ";   // checar id autor
            

  $datosAutor=mysqli_query($conexion,$consultaAutor);           

  while($filaAutor=mysqli_fetch_array($datosAutor)){
 //Autor consulto fin


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
      <a href="#">Configuracion</a>
      <a href="php/CerrarSesion.php">Cerrar sesion</a>
      
      <a href="#"></a>
    </nav>
    <label for="btn-menu">✖️</label>
  </div>
</div>

<?php 

 ?> 

<section id=librobycat>

  <div id="imagenportada">
  <img src="<?php echo $fila['PortadaDir'] ?>" class="caratula">
  </div>
 

 <div id="libroinformacion">
  <!--<h1> Libros:<?php echo $fila['Titulo']  ."<br>"?></h1> -->
   <a href="<?php echo "verlibro.php?libroselected=".$fila['idLibro'] ?> ">  <?php echo $fila['Titulo']  ."<br>"?>  </a> 
  <p>  Autor:<?php echo $filaAutor['Nombre']  ."<br>"?> </p>
  </div>




<?php 
}
}//cierre consulta autor
?>

</section>



</body>
</html>