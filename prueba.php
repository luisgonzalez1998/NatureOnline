<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php

include('conexion.php');

	   
	   $sql ="SELECT * FROM usuarios ";
if (!$resultado = $db->query($sql))
{
   die('no se pudo perrioto [' . $db->error. ']');
}

while ($row =$resultado->fetch_assoc())
{
   $iid=stripslashes($row["id"]);
   $nnombre=stripslashes($row["nombre"]);
   $aapellido=stripslashes($row["apellido"]);
   $ggenero=stripslashes($row["genero"]);
   $eedad=stripslashes($row["edad"]);
   $ttelefono=stripslashes($row["telefono"]);
   $ccorreo=stripslashes($row["correo"]);
   $ddireccion=stripslashes($row["direccion"]);

}

echo "$iid";

 	 	
?>
</body>
</html>
