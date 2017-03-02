<!DOCTYPE html>
<html>
<head>
	<title>formulario</title>
</head>
<body>
<form class="" action="filtrado.php" method="post">
	Equipo local: <br>
	<select name="local">
		<?php
		include "formdb.php";
		$nba=new db();
		$local=$nba->devolverEquipoLocal();
		while ($fila=$local->fetch_assoc()) {
  		echo "<option value='".$fila["equipo_local"]."'>".$fila["equipo_local"]."</option>";
		}
	?>
</select>
	<br>
	Equipo visitante:
	<br>
	<select name="visitante">
	<?php
	$visitante=$nba->devolverEquipoVistante();
	while ($fila=$visitante->fetch_assoc()) {
		echo "<option value='".$fila["equipo_visitante"]."'>".$fila["equipo_visitante"]."</option>";
	}
	 ?>
 </select>
	<br>
	Temporada:
	<br>
	<select name="temporada">
	<?php
	$temporada=$nba->devolverTemporada();
	while ($fila=$temporada->fetch_assoc()) {
		echo "<option value='".$fila["temporada"]."'>".$fila["temporada"]."</option>";
	}
	 ?>
 </select>
	<br>
	<br>
	<input type="submit" name="boton"></input>
</form>
</body>
</html>
