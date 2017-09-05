<?php
header("Content-: text/html;charset=utf-8");
$db = new mysqli('localhost', 'root','','natureonline');
$acentos = $db->query("SET NAMES 'utf8'");
if($db->connect_error > 0)
{
     die('Lo siento pero no hay conexión a la base de datos [' . $db->connect_errior . ']');
}
?>