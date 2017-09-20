<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="styloUsuario.css">
 <link rel="stylesheet" href="xd.css"/>	
  <link rel="stylesheet" href="menusuario.css"/>	
    <link rel="stylesheet" href="menuopcionesUsu.css"/>	

   <link rel="stylesheet" href="EstilosRegistro.css"> 
 	<link rel="stylesheet" href="style.css"/>	
   
<?php
  session_start();
  if ($_SESSION['estadoUsuario']!=1)
  {
    header("location:registro.php");
  
  }
?>
  

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
// session_start();
 include('Usuario.php');
 
 $usuario=new usuario();
 echo  $usuario->mostrarDatos($_SESSION['Usuario']);
 
 
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
                <li><a href="borrarCuenta.php">Borrar Cuenta</a></li>
                <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
            </ul>
           </div>
      </div>
    </ul>
	



<iframe src="menusuario.php" width="1400" height="120" scrolling="no" frameborder="0"></iframe>


<iframe src="sliderUsu.php" width="1400" height="440" scrolling="no" frameborder="0"></iframe>

<iframe src="img 3d/index.html" width="1400" height="1500" scrolling="no" frameborder="0"></iframe>



  
  
  
<?php

include('footer.html');
?>

</body>
</html> 

  
  


  
  
  

