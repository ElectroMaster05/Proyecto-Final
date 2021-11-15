<?php 

//declarando variabls para la conexion
$servidor ="localhost";  //el servidor a usar, localhost
$usuario  ="root";       // usuario de la DB
$contrasena =""; 		 //contraseña de usuario que se utilizara
$BD			="bibliotecasistemas";			//Nombre de la base de datos


//creando la conexion
$conexion =mysqli_connect($servidor,$usuario,$contrasena,$BD);

//verificando la conexion
if (!$conexion) {
	echo  "Fallo la conexion <br>";
	die("conection failed: ". mysqli_connect_error());
}
else{
echo "conexion exitosa";

}








 ?>