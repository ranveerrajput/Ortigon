<?php 
//abstract classes and methods
//declaring the constant
//accessing the constant using the scope resolution opertaor ::
//to print constant class_name :: contant_name  or  self:: constant_name


?>
<?php

abstract class Car{ 
    //created an abstract class with abstract keyword 
    //we cant create an objet of the abstarct class
    //it is a kind of template we can you and further extend it with parent child relation
    //abstract class must have atleast one abstract function
    
    public $name;
    public $speed;
    public $price;

   

    // creating the constructor
    function __construct($name,$speed){
        $this->name=$name;
        $this->speed=$speed;

    }
    function get_info(){
        return $this->name." has max speed of ".$this->speed;
    }
    abstract function price() : string;   // created an abstract function  with the return type of int
                                        


}

class Audi extends Car{


    const MESSAGE="KEEP CODING!!!:)";  //declaring an constant 



    // the class which is inheriting the abstract class must have the abstract method in it

       function price() : string {   //this is an abstract method ehich is in the abstract class
           return $this->name." has price equal to Rs".$this->price;
       }
       function set_price($price)
       {
           $this->price=$price;
       }
}

$audi =new Audi('audi',230);
echo $audi->get_info();
$audi->set_price(3500000);
echo "<br>";
echo $audi->price();
echo "<br>";

echo Audi::MESSAGE;



?>