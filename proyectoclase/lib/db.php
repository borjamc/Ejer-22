<?php
/**
 * Permitir la conexion contra la base de datos.
 */
class db
{
  //Atributos necesarios para la conexion.
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $db_name="db";

  //Conector
  private $conexion;

  //Propiedades para controlar errores.
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

public function realizarConsulta($consulta){
  if ($this->error==false) {
    $resultado=$this->conexion->query($consulta);
    return $resultado;
  }else {
    $this->error_msj="Imposible realizar la consulta: ". $consulta;
    return null;
  }
}

  //Funcion para la insercion de datos.
  public function insertarUsuario($insert){
    if ($this->error==false) {

    if (!$this->conexion->query($insert)) {
      echo "Falló la creacion de la tabla: (" . $this->conexion->errno .")" . $this->conexion->error;
      return false;
    }else {
      return true;
    }
  }$this->error_msj="Imposible realizar la insercion: ".$insert;
  }

}


 ?>
