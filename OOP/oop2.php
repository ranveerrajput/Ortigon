<?php

//Inheritance 
//IF we have declare the properties ie the variable of the parent class as protected then we cant access them after the class the only way to use
//them is to create the class which extends this class ie  parent->child relation 
//So that the child can access all the peoperty and methods of the parent that are protected as well as public

// in this example Fruit->apple->banana    parent->child->child

?>






<?php

class Fruit{
    private $color;
    private $name;
    function __construct($fruit_name,$fruit_color){
        $this->name=$fruit_name;
        $this->color=$fruit_color;
    }
    public function get_color(){
        return $this->color .' and  '.$this->name;
    }

    
}

// //creating an object name as Apple
// $Apple =new Fruit('Apple');
// echo $Apple->name;
// echo "<br>";
// $Apple->color='red';
// echo $Apple->get_color();

class apple extends Fruit{

    // public function get_color(){
    //     return $this->color;
    // }
  
}



class banana extends apple{

}

$Apple =new apple('apple','red');
echo $Apple->get_color(); 
echo "<br>"; 
 
$BANANA = new banana('banana','yellow');
echo $BANANA->get_color();

//$color='red';


























?>
