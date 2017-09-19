<?php

include("conexion.php")

$nombre=
$apellido=
$correo=
$contrasena=
$documento=
$edad=


	  mysqli_query($db,"INSERT INTO usuarios (nombre1 , nombre2, apellido1, apellido2, correo, contrasena, documento, experiencia, nombreE, fk_nivel, fk_estadoC, edad, id) 
		  VALUES( '$f2nombre', '$f2nombre1','$f2apellido', '$f2apellido1', '$f2correo', '$f2contrasena', '$f2documento', '$f2experienciaL', '$f2nombreE', '$fk_nivel', '$fk_estadoC', '$f2edad', NULL)")
		  or die (mysqli_error($db));
		  
		  echo"Datos registrados correctamente!!";
?>