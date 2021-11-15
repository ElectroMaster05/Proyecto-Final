<?php 

include("conexion.php");//include llama a un archivo,en este caso el de conexion

//delcarando variables para recibir y guardar los datos enviados desde el formulario

$nickname =$_POST['nickname'];
$email	  =$_POST['correo'];
$password =$_POST['contraseña'];

$passwordHash=password_hash($password, PASSWORD_BCRYPT); //SCRYPT es el algoritmo de encrptacion, devuelve una cadena de 60 caracteres 

echo $passwordHash;
echo $password;

//   $fotoPerfil="img/$nickname/perfil.jpg";  //ingresamos el nombre de la foto de perfil por defecto


//evaluamos si el nickname ingresado ya existe
$consultaID= //consulta de mysql
"
SELECT Nombre
FROM   usuario
WHERE  Nombre='$nickname'
";



$consultaID=mysqli_query($conexion,$consultaID);//devuelve un objeto con el resultado t o f
$consultaID=mysqli_fetch_array($consultaID);//devuelve un array o null de una fila

if(!$consultaID){//si no existe el nickname creamos el usuario

//$sql="INSERT INTO usuario(Nombre,Correo,Contraseña) VALUES('$nickname','$email','$password')";

$sql="INSERT INTO usuario(FKROL,Nombre,Correo,Contraseña ) VALUES ('2', '".$nickname."','".$email."','" .$passwordHash."')";//aqui puse password hash en ves de password solo
 // fk rol 2, end user, 1 admon

if(mysqli_query($conexion,$sql)){


echo "tu cuenta ha sido creada";
echo "<br> <a href='../login.html'>Iniciar Sesión</a>";

}

else{

	echo "Error:" . $sql . "<br>" . mysqli_error($conexion);
}




}

else{

echo "el usuario ya existe";
echo " <a href='../registro.html'>intentalo de nuevo</a>";	
}



mysqli_close($conexion);



 ?>