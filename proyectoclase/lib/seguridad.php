<?php

class Seguridad
{
  private $usuario=null;

  function __construct()
  {
    sesion_start();
    if (isset($_SESSION["usuario"])) $this->usuario=$_SESSION["usuario"];
  }

  public function getUsuario(){
    return $this->usuario;
  }

  public function insertarUsuario($usuario)
  {
    $_SESSION["usuario"]=$usuario;
    $this->usuario=$usuario;
  }

  public function logOut()
  {
    $_SESSION=[];
    session_destroy();
  }




}
 ?>
