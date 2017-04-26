<!DOCTYPE html>
<html>
<head>
	<title>Jugadores de NBA</title>
</head>
<body>
	<?php 
		$conexion = new mysqli("localhost", "root", "", "nba");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
$resultado=$conexion->query("SELECT * FROM Jugadores");

echo "Número de jugadores: " . $resultado->num_rows;

$resultado=$conexion->query("SELECT Nombre FROM equipos");

echo "<br>";

echo "Numero de equipos: " . $resultado->num_rows;
}

$resultado=$conexion->query("SELECT AVG(altura) FROM jugadores");

<table border="1">
<tr>
	<th>Numero de jugadores</th>
	<th>Numero de equipos</th>
	<th>Algo</th>
</tr>
</table>

while ($fila=$resultado->fetch_assoc()) {
	echo $fila=$resultado;
}

echo "<br>";
echo "La media de la altura de todos es: " . $resultado->num_rows;

 	?>
</body>
</html>