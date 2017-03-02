<!DOCTYPE html>
<html>
<head>
	<title>Filtrado</title>
</head>
<body>
<?php

//Comprobacion a la base de datos
include "formdb.php";
//Coprobacion de $_POST
if (isset($_POST["local"]) && !empty($_POST["local"])) {
	$nba=new db();
	$resultado=$nba->devolverEquiposLocal($_POST["local"],$_POST["visitante"],$_POST["temporada"]);
	while ($fila=$resultado->fetch_assoc()) {
		echo "Nombre del equipo local es: " . $fila["equipo_local"] . "<br>";
		echo "Los puntos del equipo local es: " . $fila["puntos_local"] . "<br>";
		echo "Nombre del equipo visitante es: " . $fila["equipo_visitante"] . "<br>";
		echo "Los puntos del equipo visitante es: " . $fila["puntos_visitante"] . "<br>";
		echo "La temporada es: " . $fila["temporada"] . "<br><br>";
	}


}else{
	?>
	<a href="inde.php">No me has enviado nada</a>
<?php
}




 ?>
</body>
</html>
