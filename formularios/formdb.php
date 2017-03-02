<?php
/**
 * Permitir la conexion contra la base de datos
 */
class db
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
  public function devolverEquipoLocal(){
    if($this->error==false){
      $local = $this->conexion->query("SELECT DISTINCT(equipo_local) FROM partidos");
      return $local;
    }else{
      return null;
    }
  }
  public function devolverEquipoVistante(){
    if($this->error==false){
      $visitante = $this->conexion->query("SELECT DISTINCT(equipo_visitante) FROM partidos");
      return $visitante;
    }else{
      return null;
    }
  }
  public function devolverTemporada(){
    if($this->error==false){
      $temporada = $this->conexion->query("SELECT DISTINCT(temporada) FROM partidos");
      return $temporada;
    }else{
      return null;
    }
  }

  public function devolverEquiposLocal($local,$visitante,$temporada){
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT distinct equipo_local, puntos_local, equipo_visitante, puntos_visitante, temporada FROM partidos WHERE equipo_local= '".$local."' AND equipo_visitante='".$visitante."' AND temporada='".$temporada."'");
      return $resultado;
    }else{
      return null;
    }
  }
}


 ?>
