<?php

class db
{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $db_name="entornos";

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
  public function devolverUsuCont($usuario){
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT Usuarios, Clave FROM cosas WHERE Usuarios='".$usuario."'");
      return $resultado;
    }else{
      return null;
    }
  }
}


 ?>
