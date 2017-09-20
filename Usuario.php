<script src="alert/dist/sweetalert.min.js"></script>  
   <link rel="stylesheet" type="text/css" href="alert/dist/sweetalert.css">
<?php

   
	class usuario
	{
		public $nombre;
		public $apellido;
		public $correo;
		public $documento;
		public $contrasena;
		public $edad;
		public $genero;
		public $numero;
		
		public  function registrarUsuario($nombre,$apellido,$correo,$documento,$contrasena,$edad,$genero,$numero)
	{
			include('conexion.php');
			$resultado = mysqli_query ($Conexion,"INSERT INTO usuarios (nombre,apellido,correo, documento,contrasena,edad,genero,telefono) VALUES ('$nombre','$apellido', '$correo', '$documento', MD5('$contrasena') ,  '$edad', '$genero', '$numero')");
			
			 if($resultado>0)
			 {
			 		echo "<script>
					alert
					swal('','Sus datos han sido registrados.','success');
					</script>";
						header("Location:videologin.php");
				
			 
			 
			 }
			 else
			 {
			 		
					echo "<script type=\"text/javascript\">alert(\"No se pudo registrar \");</script>";
					header("Location:registro.php");	
			 
			 }
			 
			mysqli_close($Conexion);
                         
		
	
	}
	
	public function ingresarUsuario($documento, $contrasena)
	{
		$conexion=mysqli_connect("localhost","root","","natureonline");
		$consulta="SELECT * FROM usuarios WHERE documento='$documento' and contrasena= MD5('$contrasena')";
		$resultado=mysqli_query($conexion, $consulta);					
		$filas=mysqli_num_rows($resultado);
		if ($filas>0)
		{
			header("location:SesionUsuario.php");
			session_start();
			$_SESSION['Usuario'] = $documento;
			$_SESSION['estadoUsuario'] = 1;
			}
		else
		{
			echo "Error en la autentificacion";
		}
		mysqli_free_result($resultado);
		mysqli_close($conexion);	
	}
	
	public function mostrarDatos($documento)
	{
		
		include('conexion.php');
		$consulta="SELECT nombre, apellido FROM usuarios WHERE documento='$documento'";
		if($resultado=mysqli_query($Conexion, $consulta))
		{
			while($filas = mysqli_fetch_assoc($resultado))
			{
				return $filas['nombre'] . " " . $filas['apellido'] ; 
			}
			
			mysqli_free_result($resultado);
		}
		mysqli_close($Conexion);
	}
	
	public function ActualizarDatos($nombre, $apellido, $telefono, $correo, $edad, $documento)
	{
		include("conexion.php");
		if($resultado = mysqli_query($Conexion,"UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido', correo = '$correo', telefono = $telefono, edad = '$edad' WHERE documento = $documento"))
		{
			$filas = mysqli_affected_rows($Conexion);
			if ($filas>0)
			{
				echo "datos actualizados";
				echo"<br />";
				echo"<br />";
				 echo "<a href='SesionUsuario.php'><input type='Submit' value='Continuar'/></a>";	
			}
			else
			{
				echo "dsadasd";
			}   
		}
	}
	public function borrarCuenta($documento)
	{
		include('conexion.php');	
		$resultado = mysqli_query($Conexion, "SELECT id FROM usuarios WHERE documento = '$documento'");
		if($res=mysqli_fetch_array($resultado))
		{
			mysqli_query($Conexion, "DELETE FROM usuarios WHERE $documento = '$_POST[documento]'");
			
			echo "Su cuenta ha sido eliminada correctamente..";
			echo"<br />";
			echo "<a href='registro.php'><input type='Submit' value='Continuar'/></a>";		
			
           
			
		}
		else
		{
		echo "datos no eliminados";
		}
	}	
}

		
			
	   
?>