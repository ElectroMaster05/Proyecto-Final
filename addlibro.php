<?php 
include("php/conexion.php");

   include("php/validarSesion.php");


   //consuylto autores

  



 // if(isset($_POST['libroData'])){//donde selecciono el autor
      
       
        /* Ya con esto recoge lo que viene del formulario, tambien puedes poner como condicion si no se hace un post en esa pagina que vuelva al formulario o que mande a una pagina 404 */
//}else{
     /* ... lo que quieras poner */
//}


  //if(isset($_POST['libroData'])){//donde selecciono la categoria
      // $miSelectCategoria = $_POST['CategoriaSeleccionada'];
       
        /* Ya con esto recoge lo que viene del formulario, tambien puedes poner como condicion si no se hace un post en esa pagina que vuelva al formulario o que mande a una pagina 404 */
//}else{
     /* ... lo que quieras poner */
//}




//consultas
  $consultaAutor= "Select *
            From autor
            ";
  $consultaCategorias= "Select *
            From categoria
            ";          
$datosAutor=mysqli_query($conexion,$consultaAutor);  

$datosCategoria=mysqli_query($conexion,$consultaCategorias);  




$directorio='Portadas/';


//donde inserto

  
  if(isset($_POST['subir'])){
    $tituloLibro=$_POST['titulo'];
   $miSelectAutor = $_POST['AutorSeleccionado'];
   $miSelectCategoria = $_POST['CategoriaSeleccionada'];  

  $nombre=$_FILES['archivo']['name'];
  //$ruta=$_FILES['archivo']['tmp_name']; 
  $portada=$_FILES['portada']['name'];
 
 
  $sql="INSERT INTO libro(AutorFK,UsuarioFK,CategoriasFK,ColeccionFK,Titulo,PortadaDir,nomre_archivo) VALUES('".$miSelectAutor."','4','".$miSelectCategoria."','1','".$tituloLibro."','".$directorio.$portada."','".$nombre."')";


if(mysqli_query($conexion,$sql)){


echo "tse subio el libro";


}

else{

  echo "Error al subir:" . $sql . "<br>" . mysqli_error($conexion);
}




 
//echo $nombre;
//echo $ruta;
//echo $portada;
 echo "aut:"; 
//echo $miSelectCategoria;   
echo $miSelectAutor;   
 echo $tituloLibro; 
  }
  else{

    //echo "Error al subir libro:" . $sql . "<br>" . mysqli_error($conexion);
  }




if(isset($_POST['subirAutor'])){
 $AutorName=$_POST['aName'];


  $sql="INSERT INTO autor(Nombre) VALUES('".$AutorName."')";

if(mysqli_query($conexion,$sql)){


echo "Se añadio el autor";
 unset($_POST["$AutorName"] );

}

else{

  echo "Error al añadir autor:" . $sql . "<br>" . mysqli_error($conexion);
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

<div>
  
  <form method="post" id="rellenarLibro" name="libroData" enctype="multipart/form-data" autocomplete="off">
    <h2 class="link">Añadir libro</h1>
    
     <!--   <label>Titulo</label>   -->
       <!-- <input type="text" name="titulo">  -->
      

    <label>Autor</label>
        <select name="AutorSeleccionado">
         <?php  while($filaAutor=mysqli_fetch_array($datosAutor)){ ?> 
         

         <option  value="<?php echo $filaAutor['idAutor'] ?>" > <?php echo $filaAutor['Nombre'] ?>  </option> 
          <?php 
          }

          ?>


        </select>  <br>

        <label>Categoria</label>
        <select name="CategoriaSeleccionada">
         <?php  while($filaCategoria=mysqli_fetch_array($datosCategoria)){ ?>  
         <option value="<?php echo $filaCategoria['idCategoria'] ?>"> <?php echo $filaCategoria['NombreCategoria'] ?>  </option> 
          <?php 
          }
          ?>
        </select>    <br>
        

    
       <label for="portada">Portada:</label>

        <input type="file" name="portada" autocomplete="off" required>   <br>
      

      
       <label>Nombre archivo</label>
        <input type="text" name="titulo" autocomplete="off" required>   <br>
      

        
       
        <label for="archivo">Archivo:</label>

        <input type="file" name="archivo" autocomplete="off">     <br>



        
        <input type="submit" name="subir" value="subir" >
      

      </form>
    

        <form method="post" id="rellenarAutor" name="autorData" enctype="multipart/form-data" >
          
          <h2 class="link">Añadir autor</h2>
          <label>Nombre del autor</label>
        <input type="text" name="aName" autocomplete="off" required>   <br>

         <input type="submit" name="subirAutor" value="subirAutor">
        </form>




</div>



</body>


</html>