<?php


class Cita
{
        public function ConsultarAgenda($cumplio)
		     {
			 
			 include('conexion.php');
			 session_start();
			 
			      $Cumplio = $cumplio;
				  $this->cumplio= $Cumplio;
				  
				
				    
					$sql = "SELECT * FROM cita WHERE cumplio = '$this->cumplio' ";
					if (!$resultado = $db->query($sql))
					       {
						        die('no se pudo['  .$db->error. ']');
						   }
						   					
					while($row = $resultado->fetch_assoc())
					     {
						     $this->iid=stripslashes($row['id']);
							 $this->iidC=stripslashes($row['idC']);
							 $this->iidE =stripslashes($row['idE']);
							 $this->ddia =stripslashes($row['dia']);
							 $this->mmes =stripslashes($row['mes']);
							 $this->aano =stripslashes($row['ano']);
							 $this->hhora =stripslashes($row['hora']);
							 $this->mminuto =stripslashes($row['minuto']);
							 $this->cconsultorio =stripslashes($row['consultorio']);
							 $this->ccumplio =stripslashes($row['cumplio']);
							 
							 <div class="cita1">

<p class="nombre5"><?php echo $idC; ?></p>
<p class="nombre5"><?php echo $idE; ?></p>
<p class="nombre5"><?php echo $hhora; ?></p>
<p class="nombre5"><?php echo $fecha; ?></p>


</div>
							 
							 
							 
						 }
						 
						 
						 $_SESSION['3id'] = $this->iid;
						 $_SESSION['3idC'] = $this->iidC;
						 $_SESSION['3idE'] = $this->iidE;
						 $_SESSION['3dia'] = $this->ddia;
						 $_SESSION['3mes'] = $this->mmes;
						 $_SESSION['3ano'] = $this->aano;
						 $_SESSION['3hora'] = $this->hhora;
						 $_SESSION['3minuto'] = $this->mminuto;
						 $_SESSION['3consultorio'] = $this->cconsultorio;
						 $_SESSION['3cumplio'] = $this->ccumplio;
						 
						 
						 echo  $_SESSION['3id'];
						 echo "<br/>";
						 echo $_SESSION['3idC'];
						 echo "<br/>";
						 echo $_SESSION['3idE'];
						 echo "<br/>";
						 echo $_SESSION['3dia'];
						 echo "<br/>";
						 echo $_SESSION['3mes'];
						 echo "<br/>";
						 echo $_SESSION['3ano'];
						 echo "<br/>";
						 echo $_SESSION['3hora'];
						 echo "<br/>";
						 echo $_SESSION['3minuto'];
						 echo "<br/>";
						 echo $_SESSION['3consultorio'];
						 echo "<br/>";
						 echo $_SESSION['3cumplio'];
						 echo "<br/>";
						 
						  
						 
						 
						 
						 
			 }
}

$cumplio = 0;

$nuevo = new Cita();
$nuevo->ConsultarAgenda($cumplio);

 header('location: ConsultarAgenda.php');

?>