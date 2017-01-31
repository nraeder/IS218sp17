<?php

  $obj = new main();

  class main {
    public function __construct() {
      echo 'Program Started </br>';
      $car = carFactory::create();

      print_r($car);
   }
 
    public function __destruct() {
      echo 'Program Ended </br>';
   }
  }
  
  class carFactory {
    public static function create() {
      $car = new car;
      return $car;
   } 
  }

  class car {
    public $make;
    public $model;
    public $year;

    public function __construct() {
      
      $this->make = 'ford';
      $this->year = date("Y");
    }
  }

?>
