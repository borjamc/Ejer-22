<?php 

/**
* 
*/
class nbaDB
{
	private $mysqli;
	private $errorconexion=false;
	function __construct(){
		$this->mysqli = new mysqli("localhost", "root", "", "nba");
		if ($conexion->connect_errno) {
			$this->errorconexion=true;
		}
	public function getErrorConexion(){
		return $this->errorconexion;
	}
	public function maxAnotador(){
		$resultado=$conexion->query("SELECT jugador,Puntos_por_partido FROM estadisticas ORDER BY Puntos_por_partido DESC LIMIT 1;");
	}
}
}
 ?>