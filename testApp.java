/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author maast
 */
public class testApp {
 
    
       public static String validarSesion(boolean sesion,int usuario){//true contraseña correcta, false no coincide  1:admon 2:enduser
   String retorno="";
       
   if(sesion==true && usuario ==1){
    retorno= "header('Location: ../principal.php')";   
   }
   else{
       if(sesion==false && usuario==1){
       retorno= "contraseña incorrecta";}
   }
   
    if(sesion==true && usuario ==2){
      retorno= "header('Location: ../principalenduser.php')";     
   }
    else{
        if(sesion==false && usuario==2){
         retorno= "contraseña incorrecta";
        }
      
    }
   
   return retorno;
   } 
       
       
  public String sqlUser(boolean busqueda,String nickname){
  String retorno="";
  
  if(busqueda==true){
  retorno="usuario ya registrado";
  }
  else{
  retorno="creando cuenta";
  }
  
  
  
  
  return retorno;
  }     
       
 
  public static String userId(int id){
  String retorno="";
  
  if(id==1){
  retorno="creando cuenta administrador";
  }
  else{
    if(id==2){
   retorno="creando cuenta usuario final";
  }
    else{
   retorno="id no valido";
  }
  }
  

  
  
  
  return retorno;}
  
  
  public static String testConexion(String servidor,String bd){
  String retorno="";
  
  if(servidor.equalsIgnoreCase("localhost")&& bd.equalsIgnoreCase("bibliotecasistemas")){
  retorno="conexion exitosa";
  }
  else{
  retorno="error en la conexion";
  }
  
  
  return retorno;
  }
   
    
}
