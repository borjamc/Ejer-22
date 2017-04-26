<?php
/**
 * Permitir la conexion contra la base de datos
 */
class usuariosdb
{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $db_name="usuarios";

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
  public function devolverEquipos(){
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT nombre FROM equipos");
      return $resultado;
    }else{
      return null;
    }
  }

  //Funciones para la insercion

  function insertarUsuario($nombre,$apellidos,$edad){
    $sqlInsercion="INSERT INTO usuario(id,nombre,apellidos,edad) VALUES (NULL, '".$nombre."' , '".$apellidos."', ".$edad.")";
    $this->conexion->query($sqlInsercion);

  }


}


 ?>
