<?php

session_start();



if($_SESSION['estado']!="1")
{
   header ('location: salir.php');
}


?>