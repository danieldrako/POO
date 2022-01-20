<?php
class Account {
  public $id;
  public $name;   //Atributos
  public $document;
  public $email;
  public $password;

  public function __construct($name, $document) {     //metodo constructor 
    $this->name = $name;
    $this->document = $document;
  }
}
?>