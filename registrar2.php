

  <?php
		
        include("conexion.php");
		include("Registro.php");
		include('Usuario.php');
        if(isset($_POST['registrar']))
        {  
                         $nombre = $_POST['nombre'];
                         $apellido = $_POST['apellido'];
						 $correo = $_POST['correo'];
						 $contrasena = $_POST['contrasena'];
						 $documento = $_POST['documento'];
						 $edad = $_POST['edad'];
						 $genero = $_POST['genero'];
						 $numero = $_POST['numero'];
						
            			$usuario = new usuario();
						$usuario->registrarUsuario($nombre,$apellido,$correo, $documento, $contrasena,$edad,$genero,$numero);
						
						
						
						
            		
        }
  ?>
 
  


