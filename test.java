/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import static junit.framework.Assert.assertEquals;
import org.junit.After;
import org.junit.AfterClass;
import org.junit.Before;
import org.junit.BeforeClass;
import org.junit.Test;
import static org.junit.Assert.*;

/**
 *
 * @author maast
 */
public class test {
    
     
   //test1 Positive = new test1();
   //Palindromo p1= new Palindromo(); 
   idMaestroAlumno b= new idMaestroAlumno();
   testProyecto app=new testProyecto();
   
   testApp x= new testApp();
   /*
    @Test
    public void testSomething() {
        assertEquals(15, Positive.sum(new int[]{1,2,3,4,5}));
        assertEquals(13, Positive.sum(new int[]{1,-2,3,4,5}));
        assertEquals(0, Positive.sum(new int[]{}));
        assertEquals(0, Positive.sum(new int[]{-1,-2,-3,-4,-5}));
        assertEquals(9, Positive.sum(new int[]{-1,2,3,4,-5}));
        
        
        
    } 
      
      @Test
    public void testPalindrome() {
        assertEquals(true, p1.checkpalindrome("oso"));
       assertEquals(true, p1.checkpalindrome("ana"));
       assertEquals(true, p1.checkpalindrome("holi"));
    }   
    
    */
    
    public test() {
    }
    
    @BeforeClass
    public static void setUpClass() {
    }
    
    @AfterClass
    public static void tearDownClass() {
    }
    
    @Before
    public void setUp() {
    }
    
    @After
    public void tearDown() {
    }

 
 

    
    
    
    
          @Test
    public void testapp1() {
        assertEquals("header('Location: ../principal.php')", x.validarSesion(true,1));
        assertEquals("header('Location: ../principalenduser.php')", x.validarSesion(true,2));
        assertEquals("contraseña incorrecta", x.validarSesion(false,1));
        assertEquals("contraseña incorrecta", x.validarSesion(false,2));
    }
     
            @Test
    public void testapp2() {
        assertEquals("usuario ya registrado", x.sqlUser(true, "administrador"));
        assertEquals("creando cuenta", x.sqlUser(false, "user1"));
       
    }
    
    
    
          @Test
    public void testapp3() {
        assertEquals("id no valido", x.userId(3));
        assertEquals("creando cuenta administrador", x.userId(1));
        assertEquals("creando cuenta usuario final", x.userId(2));
       
    }  
    
    
           @Test
    public void testapp4() {
        assertEquals("conexion exitosa",x.testConexion("localhost","bibliotecasistemas"));
        assertEquals("error en la conexion",x.testConexion("ramses123","bibliotecasistemas"));
      
       
    }  
    

    
    
}
