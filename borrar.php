<?php

include('Usuario.php');
 if(isset($_POST['borrar']))
        {  				
            			$usuario = new usuario();
						$usuario->borrarCuenta($_POST['documento']);
		}
						
?>