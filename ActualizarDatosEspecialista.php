<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="EstilosRegistro.css">
<link rel="stylesheet" href="EstilosEspecialistaActualizar.css" />
 <link rel="stylesheet" href="xd.css"/>	
  <link rel="stylesheet" href="Style.css"/>	
  
  

<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo1 {
	font-family: "Times New Roman", Times, serif;
	left: 0px;
	top: -50px;
	font-size: 80px;
	color: #FFFFFF;
	position: absolute;
}
-->
</style>
</head>
<div class="social-bar">
    <a href="https://www.facebook.com/tostaocafeypan/" class="icon icon-facebook" target="_blank"></a>
    <a href="https://twitter.com/tostaocafeypan/" class="icon icon-twitter" target="_blank"></a>
	<a href="https://www.instagram.com/tostaocafeypan/" class="icon icon-instagram" target="_blank"></a>
		     
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

<?php
include('conexion.php');
session_start();





$iid= $_SESSION['iidentificacion'];
$nnombre=$_SESSION['1nombre'];
$aapellido=$_SESSION['1apellido'];
$ttelefono=$_SESSION['1telefono'];
$ccorreo=$_SESSION['1correo'];
$ccontrasena=$_SESSION['1password'];

?>




<body>


<div class="baner">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
<iframe src="Menu1.php" width="1450" height="100" scrolling="no" frameborder="0"></iframe>

<iframe src="silider.html"  width="1300" height="380" scrolling="no" frameborder="0"></iframe>



<div class="campo7">

<div class="campo8">

<p class="historiaL"></p>
<p class="actualizarL"><u>Actualizar datos de especialista</u></p>
<img src="img_fotoP.jpg" class="foto1" /> 

<form id="form2" name="form2" method="post" action="ActualizarEspecialistaC.php">
      <p class="identificacionL">Identificacion.</p>
         <input type="text" name="identificacion" class="identificacion" value="<?php echo $iid ; ?>" readonly />
     <p class="nombreL1">Nombre.</p>
         <input type="text" name="nombre" class="nombre1" value="<?php echo $nnombre ; ?>" />
	 <p class="apellidoL1">Apellido.</p>
	     <input type="text" name="apellido" class="apellido1" value="<?php echo $aapellido ; ?>" />
	 <p class="telefonoL">Telefono.</p>
	     <input type="text" name="telefono" class="telefono" value="<?php echo $ttelefono ; ?>" />
	 <p class="correo1L">Correo.</p>
	     <input tipe="text" name="correo" class="correo1" value="<?php echo $ccorreo ; ?>" />
     <p class="contrasenaL1">Contrasena</p>
	     <input type="text" name="contrasena" class="contrasena1" value="<?php echo $ccontrasena ; ?>" />
		 
		 <button class="boton11">Guardar cambios</button>

    </form>

</div>



<div class="campo9">
<img src="img_burguer.png" class="imgburger" />
</div>

<div class="campo10">

<?php
include('footer.html');
?>

</div>

<div class="campo11">

<?php
include('BusquedaEspecialista.php');
?>

</div>


  
 

  
  
  
  </body>
</html>
  
  
  
  
  
  
  
  
  
  
  
  
  

    

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

    
