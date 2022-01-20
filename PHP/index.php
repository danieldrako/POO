<?php

require_once('Car.php');
require_once('uberX.php');
require_once('uberPool.php');
require_once('account.php');

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark"); //Definicion de un objeto del tipo Uber X 
$uberX->printDataCar(); //sintaxis para llamar a un metodo 

$uberPool = new UberPool("TYU567", new Account("Andrea Ferran", "ANDA765"), "Dodge", "Attitude"); //Definicion de un objeto del tipo Uber X 
$uberPool->printDataCar(); //sintaxis para llamar a un metodo 
?>