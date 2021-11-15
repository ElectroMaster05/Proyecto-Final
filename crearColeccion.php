<?php 
include("php/conexion.php");

   include("php/validarSesion.php");


$directorio='Portadas/PortadaColeccion/';

 $consultaColeccion= "Select *
            From coleccion
            ";
$datosColeccion=mysqli_query($conexion,$consultaColeccion);  


if(isset($_POST['subirColeccion'])){
 $colName=$_POST['colName'];
$portada=$_FILES['portadaCol']['name'];

  $sql="INSERT INTO coleccion(nombreColeccion,portadaColeccion) VALUES('".$colName."', '".$directorio.$portada."')";

if(mysqli_query($conexion,$sql)){


echo "Se añadio la coleccion";
 unset($_POST["$colName"] );

}

else{

  echo "Error al crear coleccion:" . $sql . "<br>" . mysqli_error($conexion);
}



}





if(isset($_POST['formarColeccion'])){
  $miSelectColeccion = $_POST['coleccionSeleccionada'];
  $libroAdd = $_POST['libroName'];

  $sqlLibro="Select idLibro
            From libro where Titulo='$libroAdd' ";

 // $datosl= mysqli_query($conexion,$sqlLibro);

 //while ($fila = mysql_fetch_array($datosl)) {
   // $libroid=$fila['idLibro'];

  
//} 




if($datosl=mysqli_query($conexion,$sqlLibro)){//si se encontro el libro se insertara
echo "Se encontro el libro";

while ($fila = mysqli_fetch_array($datosl)) {
    $libroid=$fila['idLibro'];

  
} 



$sql="INSERT INTO libro_coleccion(Fklibro,Fkcoleccion) VALUES('".$libroid."', '".$miSelectColeccion."')";
 
  if(mysqli_query($conexion,$sql)){
    echo "Se añadio libro a coleccion";
  }
  else{

  echo "error en la insersion:" . $sql . "<br>" . mysqli_error($conexion);
  }



}

else{

  echo "No se encontro el libro:" . $sqlLibro . "<br>" . mysqli_error($conexion);
}



}


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

  
    



<div id="añadirColeccion">
     <form method="post" id="rellenarColeccion" name="colData" enctype="multipart/form-data" >
          
          <h2>Añadir Coleccion</h2>
          <label>Nombre de la coleccion</label>
        <input type="text" name="colName" autocomplete="off" required>   <br>


        <label for="portadaCol">Portada:</label>

        <input type="file" name="portadaCol" autocomplete="off" required>   <br>

       
         <input type="submit" name="subirColeccion" value="subirColeccion">
        </form>

</div>






<div id="formarColeccion">
     <form method="post" id="rellenarColeccion" name="colData" enctype="multipart/form-data" >
          
          <h2>Añadir libro a coleccion</h2>


          <label>Seleccionar coleccion</label>

       <select name="coleccionSeleccionada">
         <?php  while($filaColeccion=mysqli_fetch_array($datosColeccion)){ ?>  
         <option value="<?php echo $filaColeccion['idColeccion'] ?>"> <?php echo $filaColeccion['nombreColeccion'] ?>  </option> 
          <?php 
          }
          ?>
        </select>    <br>
               

        <p>Ingrese el nombre del libro</p>
          <input type="text" name="libroName" required>



         <input type="submit" name="formarColeccion" value="coleccionFormar">
        </form>


    

</div>










</body>
</html>