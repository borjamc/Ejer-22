<?php

  class personaje
  {
    private $nombre;

    function __construct(){

      $this->nombre="";
      echo "Esta es la clase personajes";
    }

    public function getNombre(){
      return $this->nombre;
    }

    public function setNombre($nombre){
      $this->nombre=$nombre;
    }







  }





 ?>
