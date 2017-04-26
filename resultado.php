<!DOCTYPE html>
<html>
<head>
	<title>Resultados</title>
</head>
<body>
<?php 
include "nbadb.php";

$nba=new nba();
if ($nba->getErrorConexion()==false){
$resultado=$nba->maxAnotador()
while($fila=$resultado->fetch_assoc()){
echo "<table>";
echo "<tr>";
echo "<th>Equipo Local</th>";
echo "<th>Equipo Visitante</th>";
echo "<th>Puntos Local</th>";
echo "<th>Puntos Visitante</th>";
echo "<th>Temporada</th>";
echo "</tr>";
}
while ($filas=$resultado->fectch_assoc()) {
echo "<tr>";
echo "<td>" . $fila["equipo_local"] . "</td>";
echo "<td>" . $fila["equipo_visitante"] . "</td>";
echo "<td>" . $fila["puntos_visitante"] . "</td>";
echo "<td>" . $fila["puntos_local"] . "</td>";
echo "<td>" . $fila["temporada"] . "</td>";
echo "</tr>";
}
echo "</table>";
}
?>
</body>
</html>