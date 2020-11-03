<?php
//Intoduction to classes and objects
//how to create a class
//how to declare methods and objects
//how to call methods
?>


<?php

 class Car{ //created a class called car

    //properties
    public $color;
    public $name;

    //methods
    public function set_name($car_name){
        $this->name=$car_name;
    }
    public function get_name(){
        return $this->name;
    }
 }
    //object creation

    $Tata =new Car();                    // created a object name $Tata
    $Tata->set_name('Tiago');           //calling a method to set the car name
    echo $Tata->get_name();             //calling a meyhod to print the car name

    

?>