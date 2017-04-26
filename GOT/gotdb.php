<?php
class db
{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $db_name="gameofthrones";

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
  public function resumen(){
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT id, title, plot FROM titles");
      return $resultado;
    }else{
      return null;
    }
  }
  public function actores(){
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT serie_name, name FROM cast");
      return $resultado;
    }else{
      return null;
    }
  }
  public function actorestemp(){
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT name, season FROM season_ep");
      return $resultado;
    }else{
      return null;
    }
  }
}
 ?>
