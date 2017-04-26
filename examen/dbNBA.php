<?php

//Clase a la que se accede desde las demas paginas para crear nuevos atributos
class dbNBA
{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $db_name="nba";

  //Conector
  private $conexion;

  //Propiedades para controlar errores
  private $error=false;

  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno) {
        $this->error=true;
      }
  }

  //Funcion para saber si hay error en la conexion
  function hayError(){
    return $this->error;
  }

  //Funciones para la devolucion de resultados
  //Funcion mostrarEquipos, para la pagina (index.php)
  public function mostrarEquipos(){
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT nombre, ciudad, conferencia, division FROM equipos");
      return $resultado;
    }else{
      return null;
    }
  }
  //Funcion mostrarConfEste, para la pagina (confeste.php)
  public function mostrarConfEste(){
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT nombre, ciudad, division from equipos WHERE conferencia LIKE 'East'");
      return $resultado;
    }else{
      return null;
    }
  }
  //Funcion mostrarTemporada, para la pagina (temporada.php)
    public function mostrarTemporada($temporada){
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT equipo_local, equipo_visitante, puntos_local, puntos_visitante, " .$temporada . " FROM partidos WHERE temporada LIKE '99/00'");
      return $resultado;
    }else{
      return null;
    }
  }
}
 ?>