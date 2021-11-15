<?php 

session_start();
$login =$_SESSION['login'];


if(!$login){

	header('Location: login.html');
}
else{

	//
}


 ?>