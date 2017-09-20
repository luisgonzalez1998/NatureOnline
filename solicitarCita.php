<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="styloUsuario.css">
 <link rel="stylesheet" href="xd.css"/>	
  <link rel="stylesheet" href="menuopcionesUsu.css"/>
  <link rel="stylesheet" href="menusuario.css"/>
    <link rel="stylesheet" href="Styloform.css"/>		
   <link rel="stylesheet" href="EstilosRegistro.css"> 
 	<link rel="stylesheet" href="style.css"/>	
   

  

<title>Nature Online</title>

<style>
body{
background:url(palo.jpg);
float:left;
height:200px;
background-repeat:no-repeat;
background-size:cover;
background-attachment:fixed;

}
.Estilo1 {color: #FFFFFF}
</style>
<body>


<div class="banner">
<?php

 session_start();
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
                <li><a href="OpcionesUsu.php">Opciones</a></li>
                <li><a href="Registro.php">Cerrar Sesión</a></li>
            </ul>
           </div>
      </div>
    </ul>

<iframe src="menusuario.php" width="1400" height="120" scrolling="no" frameborder="0"></iframe>

 <form id="form1" name="form1" method="post" action="validarcita.php">
    		    <label>
    		    <div align="center">
    		      <p class="titulocita">Solicitar Cita Medica</p>
    		      <p>&nbsp;</p>
    		      <p>&nbsp; </p>
    		    </div>
    		    </label>
  		        <label>
  		        <div align="center">
  		          <p align="center" class="textos">Nombres
                    <input name="nombresC" type="text" id="nombresC" class="apellidoC" placeholder="Escriba Sus Apellidos" />
                    Apellido
                  <input name="appellidosC" type="text" id="appellidosC" class="apellidoC" placeholder="Escriba Sus Apellidos" />
  		          </p>
  		          <p align="center" class="textos">&nbsp;</p>
  		          <p align="center" class="textosI">Identificación
  		            <input name="identificacionC" type="text" id="identificacionC" class="IdentifacionC" placeholder="Escriba Su Identificación" />
  		            <span class="textosE">Estado Civil
  		            <label>
  		            <select name="estadoc" class="estadoc" id="estado">
  		              <option value="Seleccione..." c>Seleccione...</option>
  		              <option value="Soltero">Soltero</option>
  		              <option value="Casado">Casado</option>
  		              <option value="Casado">Viudo</option>
  		              <option value="Divorciado">Divorciado</option>
  		              <option value="Unión Libre">Unión Libre</option>
	                </select>
  		            </label>
  		            </span><br />
  		            <br />
	              </p>
   </div>
  		        </label>
  		        <div align="right"><div align="center">
  		          <p align="center" class="textos">Telefono
  		            <input name="telefonoC" type="text" id="telefonoC" class="telefonoC" placeholder ="Digite su Telefono de Contacto" />
	              <span class="textos">Direccion</span>
	              <input name="direccionC" type="text" id="direccionC" class="direccionC" placeholder="Digite Su Dirección" />
  		          </p>
  		          <p align="left" class="textos">&nbsp;</p>
  		          <p align="left"  class="textosF">Fecha
  		            <input name="fechaC" type="date" id="fechaC" class="fechaC" placeholder="Digite Su Dirección" />
  		          
  		          <p align="left"  class="textosH">Hora
	                <input name="horaC" type="time" id="horaC" class="horaC" placeholder="Digite Su Dirección" />
                  </p>
	              <p align="center" class="textosH"></p>
	              <p align="left"  class="textosH">
	              
	              </p>
  		          <p align="center" class="textos">&nbsp;</p>
  		          <p align="left" class="textos">&nbsp;</p>
  		          <p align="left" class="textos">
  		            <label>
  		            <input type="submit" name="registrarcita" value="Enviar" class="botonCI" />
  		            </label>
  		          </p>
  		          <p align="center" class="textos">
  		           
  		          </p>
  		          

 </div>
  
				     <div align="center"></div>
				   </div>
				   </form>

<div align="right"><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br />
<p>
  <?php

include('footer.html');
?>


</div></body>
</html> 

  
  


  
  
  

