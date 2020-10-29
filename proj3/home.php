<?php
session_start();
if(!isset($_SESSION['email']) ||   !isset($_SESSION['password']) ){

    //echo "LOG OUT SUCCESSFULLY";
    session_destroy();

    
}
else{
echo "USERNAME / USERID  ----->".$_SESSION['email']."<br>";
echo "PASSWORD ---->:".$_SESSION['password'];

?>

<form action="session_end.php">
<input type="submit" name ="submit" value="LOG OUT">
<?php

}

?>

