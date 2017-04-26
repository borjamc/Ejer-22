<!DOCTYPE html>
<html>
<head>
	<title>Jugadores</title>
</head>
<body>
<?php 
//$conexion = new mysqli("localhost", "root", "", "nba");
//if ($conexion->connect_errno) {
//   echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
//}else{
$resultado=$conexion->query("SELECT nombre, altura, procedencia FROM jugadores ORDER BY nombre;");
echo "<table>";
echo "<tr>";
echo "<th>Nombre Jugador</th>";
echo "<th>Altura Jugador</th>";
echo "<th>Procedencia Jugador</th>";
echo "</tr>";
while ($fila=$resultado->fetch_assoc()){
echo "<tr>";
echo "<td>" . $fila["nombre"] . "</td>";
echo "<td>" . $fila["altura"] . "</td>";
echo "<td>" . $fila["procedencia"] . "</td>";
echo "</tr>";
}
echo "</table>";
//}
 ?>
</body>
</html>