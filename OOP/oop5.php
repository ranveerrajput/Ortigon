<?php

//when we required one method in multipke classes at that time we use the concept of the traits
?>

<?php

trait message{  // trait declartion
    public function msg1(){
        echo "OOPS is a fun!!";
    }
}

trait message1{
    public function msg(){
        echo "OOPS is OP!!";
    }
}



class Welcome{
    use message; 
    use message1;   //use is used to use the trait in the particular class
}

//object creation

$w =new Welcome();
$w->msg1();
echo "<br>";
$w->msg();



?>