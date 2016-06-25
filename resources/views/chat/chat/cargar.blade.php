<?php
	$conexion = mysqli_connect("localhost","root","andres");
	$bd = mysqli_select_db($conexion, "base1");

	//EXTRAEMOS EL CONTENIDO DEL CHAT
	$sql= "SELECT `chat`.`id_message`, `chat`.`id_usuario`, `chat`.`fecha`, `chat`.`mensaje`, `login`.`usuario`, `login`.`foto`  
			FROM `chat` INNER JOIN `login` ON `chat`.`id_usuario` = `login`.`id_usuario` ORDER BY `chat`.`id_message`";
	$rec=mysqli_query($conexion, $sql);

	while($row = mysqli_fetch_array($rec) ){
		echo "<strong><span id=\"linea-texto\">".$row['usuario'].":</strong> ".$row['mensaje']."</span><br>";
	}
	
	/*$this->servidor = "mysql.hostinger.es";
		$this->usuario = "u887458130_tres";
		$this->password = "andres";
		$this->db = "u887458130_datos";*/
?> 
