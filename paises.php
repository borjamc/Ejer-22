<!DOCTYPE html>
<html>
<head>
	<title>Paises</title>
</head>
<body>
<?php 

$conexion = new mysqli("localhost", "root", "", "nba");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
	echo "Te has conectado";
}





 ?>
</body>
</html>