<!DOCTYPE html>
<html>
<head>
	<title>Periodico local de los lakers</title>
	<link rel="stylesheet" type="text/css" href="/estilos.css">
</head>
<body>

<table border=1>
<tr>
<td>
<?php 
include "nbadb.php";

$nba=new nbadb();
if ($nba->getErrorConexion()==false) {

	?>


	<?php 
$resultado=$conexion->query("SELECT jugador,Puntos_por_partido FROM estadisticas ORDER BY Puntos_por_partido DESC LIMIT 1;");

while ($fila=$resultado->fetch_assoc()){

echo "Codigo Jugador: " . $fila["jugador"] . "<br>" . " Puntuación máxima: " . $fila["Puntos_por_partido"];
}
?>
</td>
</tr>
<tr>
<td>
<?php
$resultado=$conexion->query("SELECT jugador,Asistencias_por_partido FROM estadisticas ORDER BY Puntos_por_partido DESC LIMIT 1;");

while ($fila=$resultado->fetch_assoc()){

echo "Codigo Jugador: " . $fila["jugador"] . "<br>" . " Asistencias por partido: " . $fila["Asistencias_por_partido"];

}
}
 ?>
 </td>
 </tr>
</table>
 </body>
</html>