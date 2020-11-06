<?php 

//interface 
// we can declare it as interface nameOFInterface{........}
//in interface their are only methods which are public always
//when more than one class uses the same interface then it is known as "POLYMORPHISM"
//we cant  use multiple interface in the php 
//so option to this their is a TRAITS in the php



?>

<?php

interface animal{ // creating an interface of name animal

    public function make_sound();

}
class Cat implements animal{ // we have to use keyword as IMPLEMENTS to use the interface
    public function make_sound()
    {
        echo "MEOW";
    }
}
class dog implements animal{
    public function make_sound()
    {
        echo "BARCK";
    }
}

$cat =new Cat();
$dog =new Dog();

$Animal=array($cat,$dog);
foreach($Animal as $animal){
    echo $animal->make_sound();
    echo "<br>";
}































?>