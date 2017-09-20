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
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
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

<iframe src="menuopcionesUsu.php"width="1400" height="230" scrolling="no" frameborder="0"></iframe>

<p class="nombreUsu">
<?php
 include('Usuario.php');
 
 $usuario=new usuario();
 echo  $usuario->mostrarDatos($_SESSION['Usuario']);
 
include("datosUsuarios.php");
include('datosHistorial.php');
?>
</p>

 <br /><br /><br /><br /><br /><br /><br /><br /><br />




<iframe src="menusuario.php" width="1400" height="120" scrolling="no" frameborder="0"></iframe>


<iframe src="sliderUsu.php" width="1400" height="440" scrolling="no" frameborder="0"></iframe>

<div>


</div>

<!--Inicio formulario-->
  <form id="form1" name="form1" method="post" action="SesionUsuario.php">
    		    <label>
    		    <div align="center">
    		      <p class="titulocita">Historial </p>
    		      <p>&nbsp;</p>
    		      <p>&nbsp; </p>
    		    </div>
    		    </label>
  		        <label>
    <div align="center">
      <p align="center" class="textos">&nbsp;</p>
	  
  		          <p align="center" class="textos">
	              Motivo</p>
  		          <p align="center" class="textos">
  		            <input name="nombresC" type="text" id="nombresC" readonly="readonly" class="apellidoC" value="<?php echo obtenerHistorial($_SESSION['Usuario'],"motivo")?>" />
  		          </p>
  		          <p align="center" class="textos">	              Enfermedad Actual	              </p>
  		          <p align="center" class="textos">
  		            <input name="appellidosC" type="text" id="appellidosC" readonly="readonly" class="apellidoC" value="<?php echo obtenerHistorial($_SESSION['Usuario'],"enfermedad")?>" />
	              </p>
  		          <p align="center" class="textos">
  		            </p>
   </p>
    </div>
  		        </label>
  		        <div align="right"><div align="center">
  		          <p align="center" class="textos">Alergias	              </p>
  		          <p align="center" class="textos">
  		            <input name="telefonoC" type="text" id="telefonoC" class="telefonoC"  readonly="readonly" value="<?php echo obtenerHistorial($_SESSION['Usuario'],"alergias")?>" />
	              </p>
  		          <p align="center" class="textos">Nota</p>
  		          <p align="center" class="textos"><span class="textos"></span>
	               <textarea name="correo"  rows="10" cols="40"><?php echo obtenerHistorial($_SESSION['Usuario'],"nota") ?></textarea>
	              </p>
  		          <p align="left" class="textos">&nbsp;</p>
  		         
                  </p>
	              <p align="center" class="textosH"></p>
	              <p align="left"  class="textosH">
	              
	              </p>
  		          <p align="center" class="textos">&nbsp;</p>
  		          <p align="left" class="textos">&nbsp;</p>
  		          <p align="left" class="textos">
  		            <label>
  		            <input name="regresar" type="submit" class="botonCI" id="Actualizar" value="Regresar" />
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

  
  


  
  
  

