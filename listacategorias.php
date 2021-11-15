<?php 
include("php/conexion.php");

   include("php/validarSesion.php");



 ?> 

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Lista Categorias</title>
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



<section id=listacategorias>


  
  <h1> Categorias</h1>
<?php 
$consulta= "Select *
            From categoria
            ";

  $datos=mysqli_query($conexion,$consulta);           

  while($fila=mysqli_fetch_array($datos)){
 ?> 




 <!-- <p class="categorian"> <?php echo $fila['NombreCategoria'] ?></p>
-->

 <a href="<?php echo "librosbycategory.php?category=".$fila['idCategoria'] ?> " class="c">  <?php echo $fila['NombreCategoria']  ."<br>"?>  </a> 



<?php 
}
?>

</section>



</body>
</html>