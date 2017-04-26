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
	echo "Conexion realizada";
	?>
	<table border=1>
<tr>
	<th>Numero de equipos</th>
	<th>Numero de jugadores</th>
	<th>Algo</th>
</tr>

<?php
	$resultado=$conexion->query("SELECT * FROM Jugadores");

	while ($fila=$conexion->fetch_assoc()) {
		echo "<tr>";
			echo "<td>".$fila['Nombre']."</td>";
			echo "<td>".$fila['Procedencia']."</td>";
			echo "<td>".$fila['codigo']."</td>";
		echo "<tr>";
		
	}
	echo "</table>";
}
 ?>

</body>
</html>