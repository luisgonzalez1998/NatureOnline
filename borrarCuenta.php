<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
  session_start();
  if ($_SESSION['estadoUsuario']!=1)
  {
    header("location:registro.php");
  
  }

// session_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="styloUsuario.css">
 <link rel="stylesheet" href="xd.css"/>	
  <link rel="stylesheet" href="menusuario.css"/>	
    <link rel="stylesheet" href="menuopcionesUsu.css"/>	
	<link rel="stylesheet" href="Styloform.css" />
   <link rel="stylesheet" href="EstilosRegistro.css"> 
 	<link rel="stylesheet" href="style.css"/>	
   

  

<title>Nature Online</title>
</head>
<div class="container">
<div class="social-bar">
    <a href="https://www.facebook.com/tostaocafeypan/" class="icon icon-facebook" target="_blank"></a>
    <a href="https://twitter.com/tostaocafeypan/" class="icon icon-twitter" target="_blank"></a>
	<a href="https://www.instagram.com/tostaocafeypan/" class="icon icon-instagram" target="_blank"></a>
</div>
</div>
<style>
body{
background:url(palo.jpg);
float:left;
height:200px;
background-repeat:no-repeat;
background-size:cover;
background-attachment:fixed;

}
</style>


<body>

<div class="banner">
<?php
 include('Usuario.php');
 
 $usuario=new usuario();
 echo  $usuario->mostrarDatos($_SESSION['Usuario']);
 
include("datosUsuarios.php");
?>

 
	<div id="barra">
    </div>
    
    <ul id="menu">
    		<li>
        	<div class="panel">
            	<div class="frente">
                <img width="130px" src="img/user.png" alt="opciones" />
                <h3>Cuenta</h3>
                </div>
            <div class="atras">
            <ul>
			<li><a href="ActualizarDatos.php">Actualizar Datos</a></li>
                <li>Opciones</li>
                <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
            </ul>
           </div>
      </div>
    </ul>
	



<iframe src="menusuario.php" width="1400" height="120" scrolling="no" frameborder="0"></iframe>


<iframe src="sliderUsu.php" width="1400" height="440" scrolling="no" frameborder="0"></iframe>

<div>


</div>

<!--Inicio formulario-->
   <form id="form1" name="form1" method="post" action="borrar.php">
    		    <label>
    		    <div align="center">
    		      <p class="titulocita">Borrar Cuenta</p>
    		      <p>&nbsp;</p>
    		      <p>&nbsp; </p>
    		    </div>
    		    </label>
  		        <label>
  		        <div align="center">
  		          <p align="center" class="textos">Nombres :
                    <input name="nombre" type="text" disabled="disabled"	  id="nombresC" class="apellidoC" value="<?php echo $usuario->mostrarDatos($_SESSION['Usuario']);?>" />
					<br /> <br />
                    Documento:
                  <input name="documento" type="text" id="appellidosC" class="apellidoC" />
  		          </p>
  		          <p align="center" class="textos">&nbsp;</p>
  		         <br />
  		            <br />
	              </p>
   </div>
  		        </label>
  		        <div align="right"><div align="center">
  		         
	              
				  
				 
  		          </p>
  		         
  		         
                  </p>
	              <p align="center" class="textosH"></p>
	              <p align="left"  class="textosH">
	              
	              </p>
  		        
  		          <p align="left" class="textos">
  		            <label>
  		            <input name="borrar" type="submit" class="botonCI" id="Actualizar" value="Borrar" />
  		            </label>
  		          </p>
  		          <p align="center" class="textos">
  		           
  		          </p>
  		          

 </div>
  
				     <div align="center"></div>
     </div>
				   </form>
  <!--Fin del formulario-->
<div>



  
  
  
<?php

include('footer.html');
?>

</body>
</html> 

  
  


  
  
  

