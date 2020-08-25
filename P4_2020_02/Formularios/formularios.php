<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formularios (POST) PHP</title>
</head>
<body>
	<form action="mostrar_datos.php" >
		<input type="text" name="Nombre">
		<input type="number" name="Numero">
		<label >
			<input type="radio" name="Genero" value="Masculino">
			Masculino
		</label>
		<label >
			<input type="radio" name="Genero" value="Femenino">
			Femenino
		</label>
		<label >
			<input type="checkbox" name="Edad" >
			¿Eres mayor de 18 años?
		</label>
		<input type="submit" value="Enviar">

	</form>


</body>
</html>