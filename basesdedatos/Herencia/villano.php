<?php


   include "personaje.php";

  class villano extends personaje
  {
    private $maldad; //String del poder del villano
    private $locura; //Bolean true o false

    function __construct($nombre)
    {
      parent::__construct();
      $this->maldad="";
      $this->locura=true;
      $this->setNombre($nombre);
      echo "<br>Esta es la clase villano: ".$this->getNombre()."<br>";
    }

    public function getMaldad(){
      return $this->maldad;
    }

    public function setMaldad($maldad){
      return $this->maldad=$maldad;
    }

    public function getLocura(){
      return $this->locura;
    }

    public function setLocura($locura){
      return $this->locura=$locura;
    }


  }
 ?>
