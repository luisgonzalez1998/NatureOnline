<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap.css" rel="stylesheet" type="text/css" />	
<title>Documento sin t&iacute;tulo</title>


</head>

<body>
<table width="100%" height="1061" align="center">
  <tr>
    <td width="1280" height="236">
	<?php
	include('Banner.php');
	?>	</td>
  </tr>
  <tr>
    <td width="1280" height="46">

	<?php
	include('menu.php');
	?>	
   </td>
  </tr>
  
 <tr>
 <td>
 <?php
 
 
 include ('conexion.php');
 
 session_start();

 $totalfinal="0";
 $cod_factura=$_POST['codigo'];
  
  
 $sql="SELECT * FROM factura WHERE cod_factura='$cod_factura' ";
 if(!$result = $db->query($sql)){
 die('Hay un error en la conculta, Datos no encontrados ['.$db->error.']');
 }
 
 
  while ($row = $result -> fetch_assoc())
  {
	$ccantidad= stripslashes($row ["cantidad"]);
	$ffk_producto= stripslashes($row ["fk_producto"]);

	
	$sql2="SELECT * FROM producto WHERE codigo_producto='$ffk_producto' ";
 	if(!$result2 = $db->query($sql2)){
 		die('Hay un error en la conculta, Datos no encontrados ['.$db->error.']');
 	}
  	while ($row2 = $result2 -> fetch_assoc())
  	{
  	$pprecioUnitario= stripslashes($row2 ["precio"]);
	}
	
	
	$total= $ccantidad*$pprecioUnitario;

	
	$totalfinal=$totalfinal+$total;
	 
 
  }	
   echo $totalfinal; 
 
 ?>
  
 </td>
</tr>
 

  <tr>
    <td width="859" height="197">
	<?php
	include ('Footer.php');
	?>	
	</td>
  </tr>
</table>
</body>
</html>

