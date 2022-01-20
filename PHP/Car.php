<?php
require_once('account.php');        //para traer el objeto driver, se necesita traer el documento account 
class Car {                    //Clase  Car
  public $id;                   //Atributo
  public $license;              //Atributo
  public $driver;               //Atributo
  public $passengers;           //Atributo

  public function __construct($license, $driver){            //Metodo Constructor ($parametro-que-recibe1, $parametro-que-recibe2)
    $this->license = $license;                                //this
    $this->driver = $driver;
  }

  public function printDataCar(){                           //Metodo declarado 
    echo "Licencia: $this->license Driver: ".$this->driver->name;
  }
}
?>
