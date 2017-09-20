<?php
	function obtenerDatos($sesion)
	{
		include("conexion.php");
		$resultado = mysqli_query($Conexion,"SELECT * FROM usuarios WHERE documento = $sesion");
		while($filas = mysqli_fetch_assoc($resultado))
		{
			switch (func_num_args())
			{
				case 2:
					return $filas[func_get_arg(1)];
					break;
				
				default:
					# code...
					break;
			}
		}
	}

?>