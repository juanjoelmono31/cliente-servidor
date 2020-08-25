<?php


	if($_GET){
		$Nombre = $_GET['Nombre'];
		echo "<h4> Nombre: ". $Nombre." </h4>";

		$Numero = $_GET['Numero'];
		echo "<h4> Numero: ". $Numero." </h4>";

		$Genero = $_GET['Genero'];
		echo "<h4> Genero: ". $Genero." </h4>";

		
		
		if(!empty($_GET['Edad'])){
			echo "<h4> Es mayor de edad </h4>";
		}else {
			echo "<h4> No es mayor de edad </h4>";
		}
		

	}

?>