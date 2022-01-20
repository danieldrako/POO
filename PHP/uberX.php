<?php
require_once('Car.php');
class UberX extends Car {
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model) {            //Metodo Constructor ($parametro-que-recibe1, $parametro-que-recibe2)
        parent::__construct($license,$driver);                   //Acceso a la clase padre a traves de la palabra parent y en seguida su constructor
        $this->brand = $brand;                                //this
        $this->model = $model;
      }
      
      
}
?>