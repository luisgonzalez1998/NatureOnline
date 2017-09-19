<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="EstilosRegistro.css">

<link rel="stylesheet" href="EstilosEspecialistaHistorial.css" />
<link rel="stylesheet" href="EstilosNuevoHistorial.css" />
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
 
 
 
 
 
$id=$_SESSION['idC'];
$nombre=$_SESSION['nombre'];
$apellido=$_SESSION['apellido'];
$genero=$_SESSION['genero'];
$edad=$_SESSION['edad'];
$telefono=$_SESSION['telefono'];
$correo=$_SESSION['correo'];
$direccion=$_SESSION['direccion'];

/*datos del especialista*/

$iid=$_SESSION['idE'];
$nnombre=$_SESSION['nnombre'];
$aapellido=$_SESSION['aapellido'];
$ttelefono=$_SESSION['ttelefono'];
$ccorreo=$_SESSION['ccorreo'];


$iiid= $_SESSION['iiid'];
$motivo=$_SESSION['motivo'];
$enfermedad=$_SESSION['enfermedad'];
$alergia=$_SESSION['alergia'];
$nota=$_SESSION['nota'];

   

?>



<body>


<div class="baner">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
 
  
<iframe src="Menu1.php" width="1450" height="100" scrolling="no" frameborder="0"></iframe>

<iframe src="silider.html"  width="1300" height="380" scrolling="no" frameborder="0"></iframe>
<div class="caja01">


<div class="campo4">
<p class="historiaL">Historia Clinica.</p>

<p class="dato">Datos personales.</p>
<div class="lineadato"></div>
<img src="img_fotoP.jpg" class="foto1" /> 

<form id="form2" name="form2" method="post" action="">
      <p class="identificacionL">Identificacion.</p>
         <input type="text" name="identificacion" class="identificacion" value="<?php echo"$id"; ?>" readonly />
     <p class="nombreL1">Nombre.</p>
         <input type="text" name="nombre" class="nombre1" value="<?php echo"$nombre"; ?>" readonly />
	 <p class="apellidoL1">Apellido.</p>
	     <input type="text" name="apellido" class="apellido1" value="<?php echo"$apellido"; ?>" readonly />
	 <p class="telefonoL">Telefono.</p>
	     <input type="text" name="telefono" class="telefono" value="<?php echo"$telefono"; ?>" readonly />
	 <p class="generoL">Genero.</p>
	     <input type="text" name="genero" class="genero" value="<?php echo"$genero"; ?>" readonly />
	 <p class="edadL">Edad.</p>
	     <input type="text" name="edad" class="edad" value="<?php echo"$edad"; ?>" readonly />
	 <p class="correo1L">Correo.</p>
	     <input tipe="text" name="correo" class="correo1" value="<?php echo"$correo"; ?>" readonly />
     <p class="direccion1L">Direccion.</p>
	     <input type="text" name="direccion" class="direccion1" value="<?php echo"$direccion"; ?>" readonly />

     <div class="linea2"></div>
	 
	 <p class="datoEL">Datos del especialista.</p>
	 <div class="linea3"></div>
	 
	 
	 <p class="documentoEL">Documento.</p>
	    <input type="text" name="documentoE" class="documentoE" value="<?php echo"$iid"; ?>" readonly />
	 <p class="nombreEL">Nombre.</p>
	    <input type="text" name="nombreE" class="nombreE" value="<?php echo"$nnombre"; ?>" readonly />
	<p class="apellidoEL">Apellido.</p>
	    <input type="text" name="apellidoE" class="apellidoE" value="<?php echo"$aapellido"; ?>" readonly />
	<p class="telefonoEL">Telefono.</p>
	    <input type="text" name="telefonoE" class="telefonoE" value="<?php echo"$ttelefono"; ?>" readonly />
	<p class="correoEL">Correo especialista.</p>
	    <input type="text" name="correoE" class="correoE" value="<?php echo"$ccorreo"; ?>" readonly />
		
		
	<div class="linea4"></div>
	
	
	
		
	
	<p class="observacionL">Observaciones.</p>
	<div class="linea5"></div>
	
	<p class="motivoCL">Motivo de la consulta.</p>
	   <input type="text" name="motivo" class="motivoC" value="<?php echo"$motivo"; ?>" readonly />
	<p class="enfermedadL">Enfermedad actual.</p>
	   <input type="text" name="enfermedad" class="enfermedad" value="<?php echo"$enfermedad"; ?>" readonly />
	<p class="alergiaL">Alergias.</p>
	   <input type="text" name="alergia" class="alergia" value="<?php echo"$alergia"; ?>" readonly />
	<p class="notaL">Notas.</p>
	   <input type="text" name="nota" class="nota" value="<?php echo"$nota"; ?>" readonly />	
	   
	 <div class="linea6"></div>
	 
	 
    <a href="BuscarC1.php"><p class="actL"><u>actualizar</u></p></a>
		
</form>


</div>





</div>

		

<div class="campo6 caja02">
<p class="publicidadLetra"><u>Bronquinat</u></p>
<img src="img_Bronquinat.jpg" class="publicidad1" />
<p class="publicidadLetra1">Precio  50.000 pesos</p>
<p class="publicidadLetra2">Ir a catalogo</p>
</div>

<div class="campo5 caja03">
<img src="img_agario.jpg" class="publicidad2" />
<p class="publicidadLetra3">Agario</p>
<p class="publicidadLetra4">Visita el juego de moda</p>
</div>

<div class="caja04">
<?php
include('BusquedaEspecialista.php');
?>
</div>

<div class="caja05">
<?php
include('Footer.html');
?>
</div>


 </div>




  
  
  
  </body>


</html>
  
  
  
  
  
  
  
  
  
  
  
  
  

    

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

    
