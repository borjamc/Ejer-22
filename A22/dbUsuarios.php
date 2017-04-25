<?php
//Borja Molina
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

  //Funciones para la insertar datos



public function insertarEquipo($nombre,$ciudad,$conferencia,$division){
  if ($this->error==false) {

  $insert_sql="INSERT INTO equipos (Nombre, Ciudad, Conferencia, Division) VALUES ('".$nombre."', '".$ciudad."', '".$conferencia."', '".$division."') ";
  if (!$this->conexion->query($insert_sql)) {
    echo "Fallo en la creacion de la tabla: (" .$this->conexion->errno .") " . $this->conexion->error;
  }
  return true;
}else{
  return null;
}

}
public function devolverNuevaFila(){
  if($this->error==false){
    $resultado = $this->conexion->query("SELECT Nombre, Procedencia FROM jugadores");
    return $resultado;
  }else{
    return null;
  }
}

public function actualizarEquipo($nombre,$ciudad,$conferencia,$division){
  if($this->error==false)
  {
    $insert_sql="UPDATE equipos SET Nombre='".$nombre."', Ciudad='".$ciudad."', Conferencia='".$conferencia."', Division='".$division."' WHERE Nombre='".$nombre."'";
    if (!$this->conexion->query($insert_sql)) {
      echo "Falló la actualizacion de la tabla: (" . $this->conexion->errno . ") " . $this->conexion->error;
      return false;
    }
    return true;
  }else{
    return false;
  }
}
public function borrarEquipo($nombre){
  if($this->error==false)
  {
    $insert_sql="DELETE FROM equipos WHERE Nombre='".$nombre."'";
    if (!$this->conexion->query($insert_sql)) {
      echo "Falló el borrado del equipo: (" . $this->conexion->errno . ") " . $this->conexion->error;
      return false;
    }
    return true;
  }else{
    return false;
  }
}
}


 ?>
