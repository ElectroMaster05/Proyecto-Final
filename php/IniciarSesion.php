<?php 
include("conexion.php");

session_start(); //inicia una nueva sesion o reanuda la existente

$_SESSION['login']=false; //variable superglobal se puede usar en cualquier php, variable comun

//declarar variables para recibir y gueardar los datos enviados desde el formulario

$correo =$_POST["correo"];
$password =$_POST["contraseña"];


//evaluamos el nickname ingresado 

$consulta="
SELECT *
FROM usuario
WHERE Correo='$correo' ";


$consulta =mysqli_query($conexion,$consulta);//ejecutamos la consulta
$consulta =mysqli_fetch_array($consulta);

//echo $consulta['Contraseña']."<br>";
//echo $password;

if($consulta){

	if(password_verify($password,$consulta['Contraseña'])){

		$_SESSION['login'] =true; //coincide el password
		echo "dentro coincide";

		switch($consulta['FKROl']){

			case 1:
			header('Location: ../principal.php');//redireccionamos a la pagina busqueda	admon
			break;

			case 2:
			header('Location: ../principalenduser.php');//redireccionamos a la pagina busqueda	admon
			break;	
		}

	//header('Location: ../principal.php');//redireccionamos a la pagina busqueda	admon
}
    else{
	echo "contraseña incorrecta1";
	echo "<br> <a href='../login.html'> Intentalo de nuevo.</a> </div> ";

    }


}
 else{//la consulta esta vacia, es dedir no existe el nickname

echo "el usuario no existe";
echo "<br> <a href='../login.html'> Intentalo de nuevo.</a> </div> ";
 }   



//cerrando la conexion
 mysqli_close($conexion);


 ?>