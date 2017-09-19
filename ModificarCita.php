
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="EstilosRegistro.css">
<link rel="stylesheet" href="EstilosModificarCita.css">
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

session_start();


$idC =$_SESSION['2idC'];
$idCC = $_SESSION['2idCC'];
$idE =  $_SESSION['2idEC'];
$dia = $_SESSION['2dia'];
$mes = $_SESSION['2mes'];
$ano =  $_SESSION['2ano'];
$hora = $_SESSION['2hora'];
$minuto = $_SESSION['2minuto'];  
$consultorio = $_SESSION['2consultorio'];



$hhora = $hora.":".$minuto;
$ffecha = $dia."/".$mes."/".$ano;
?>



<body>


<div class="baner">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
<iframe src="Menu1.php" width="1450" height="100" scrolling="no" frameborder="0"></iframe>

<iframe src="silider.html"  width="1300" height="380" scrolling="no" frameborder="0"></iframe>



<div class="campo">

		

		

<div class="campo1">
<p class="asigL">Modificar Cita.</p>

<p class="datos1L">Datos de la cita.</p>

<form id="form1" name="form1" method="post" action="ModificarCitaC.php">

		  <p class="documentoL">Documento del usuario:</p>
		  <input type="text" name="documentoC" class="documento" value="<?php echo $idCC ; ?>" readonly />
	  		  
		 	  
		 
		 <p class="documentoEL">Documento especialista:</p>
		 <input type="text" name="documentoE" class="documentoE" value="<?php echo $idE ; ?>" readonly  />
		 
		 <p class="fecha01L">Fecha Actual de la cita</p>
		  <input type="text" name="fecha" class="fecha" value="<?php echo $ffecha ; ?>" readonly  />
		  
		   <p class="hora01L">Hora Actual de la cita</p>
		  <input type="text" name="hora" class="hora01" value="<?php echo $hhora ; ?>" readonly  />
		 

	<p class="fechaA"><u>¿Si deseas modificar la hora, fecha,<br/> consultorio de la cita.?</u></p>	
	
		<input type="checkbox" name="checkbox" class="chek" value="checkbox" />
		
		<p class="fechaL">Fecha de la cita:</p>

		  <select name="dia" class="dia">
    <option value="dia">Dia</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
  </select>
		  <select name="mes" class="mes">
            <option value="Mes">Mes</option>
            <option value="ene">ene</option>
            <option value="feb">feb</option>
            <option value="mar">mar</option>
            <option value="abr">abr</option>
            <option value="may">may</option>
            <option value="jun">jun</option>
            <option value="jul">jul</option>
            <option value="ago">ago</option>
            <option value="sep">sep</option>
            <option value="oct">oct</option>
            <option value="nov">nov</option>
            <option value="dic">dic</option>
      </select>
			
  
         <select name="ano" class="ano">
           <option value="a&ntilde;o">A&ntilde;o</option>
           <option value="2000">2000</option>
           <option value="2001">2001</option>
           <option value="2002">2002</option>
           <option value="2003">2003</option>
           <option value="2004">2004</option>
           <option value="2005">2005</option>
           <option value="2006">2006</option>
           <option value="2007">2007</option>
           <option value="2008">2008</option>
           <option value="2009">2009</option>
           <option value="2010">2010</option>
           <option value="2011">2011</option>
           <option value="2012">2012</option>
           <option value="2013">2013</option>
           <option value="2014">2014</option>
           <option value="2015">2015</option>
           <option value="2016">2016</option>
           <option value="2017">2017</option>
         </select>
		 
		 <p class="horaL">Hora de la cita:</p>
		 
         <select name="hora" class="hora">
           <option value="Hora">Hora</option>
           <option value="01">01</option>
           <option value="02">02</option>
           <option value="03">03</option>
           <option value="04">04</option>
           <option value="05">05</option>
           <option value="06">06</option>
           <option value="07">07</option>
           <option value="08">08</option>
           <option value="09">09</option>
           <option value="10">10</option>
           <option value="11">11</option>
           <option value="12">12</option>
      </select>
         </label>
         <select name="minuto" class="minuto">
           <option value="Minutos">Minutos</option>
           <option value="01">01</option>
           <option value="02">02</option>
           <option value="03">03</option>
           <option value="04">04</option>
           <option value="05">05</option>
           <option value="06">06</option>
           <option value="07">07</option>
           <option value="08">08</option>
           <option value="09">09</option>
           <option value="10">10</option>
           <option value="11">11</option>
           <option value="12">12</option>
           <option value="13">13</option>
           <option value="14">14</option>
           <option value="15">15</option>
      </select>
				  
				  		  <p class="consultorioL">Consultorio.</p>
		<input type="text" name="consultorio" class="consultorio" value="<?php echo $consultorio ; ?>" />
		
		<div class="lineacrear"></div>
				  
				  		 <button class="boton boton1" >Guardar Cita Medica</button>
</form>
     
</div>

       <div class="campo5">

     <div class="salir"><a href="CrearCita.php"> <p class="salirL"><u>Salir.</p></u></a></div>
	 <img src="img_iconocerrar.jpg" class="img2" />

         
		 
	<div class="eliminar">
	 <p class="eliminar0L">¿Deseas eliminar la cita?</p>
		<form name="form8" method="post" action="EliminarCitaC.php">
		    <input type="text" name="idC" class="identificacionCliente" value="<?php echo $idCC;  ?>" />
			<button class="boton boton2" >Eliminar</button>
			
		</form>
		
	</div>	




</div>



<div class="campo22">
<?php
include('footer.html');
?>
</div>

<div class="campo23">

<?php
include('BusquedaEspecialista.php');
?>

</div>

<iframe src=""  width="1300" height="500" scrolling="no" frameborder="0"></iframe>

  </div>
  
 

  
  
  
  </body>
</html>