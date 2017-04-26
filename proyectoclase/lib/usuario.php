<?php

include 'db.php';

class Usuario extends db
{

  function __construct()
  {
    parent::__construct();
  }
//Insertamos usuario
public function insertarUsuario($nombre,$apellido,$usuario,$pass,$edad,$rol){

  $sql="INSERT INTO usuarios(id, nombre, apellidos, usuario, pass, edad, rol) VALUES (NULL,'".$nombre."', '".$apellidos ."', '" .$usuario ."', '" .$pass ."', '" .$rol ."', " .$fechaCreacion .")";
  //Hacer Consulta
  $resultado=$this->realizarConsulta($sql);
  if ($insertarUsuario!=false) {
    $sql="SELECT * from usuarios ORDER BY id DESC";

  }else {
     return false;
  }



}





}

 ?>
