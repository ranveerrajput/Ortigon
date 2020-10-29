<?php

//printing out the current time 

echo "CURRENT TIME" .time();




// setting up the variables that get set in the cookies manually


$name="Ranveer";
$password="123345";
setcookie("user",$name,strtotime('+3 second'));
setcookie("password",$password,strtotime('+3 second'));
//echo $_COOKIE['password'];



?>
<html>
<head>
    <title>
    implementing cookies through php
    </title>
</head>
<body>
<h1> Welcome to the concept of cookies</h1>
<h2>Lets Try this ..........we will be logged out in<?php echo time()%(time()-10);  ?> </h2>

<p>User<span><h1><?php if(isset($_COOKIE['user'])){ echo $_COOKIE['user'];}else{echo "YOU R LOGGED OUT";} ?></h1>  welcome to cookie session</span></p>   


                                                      
<h1>the password of the user is:'<?php if( isset( $_COOKIE['password'] ) ){ echo $_COOKIE['password']; } ?>'</h1>

</body>
</html>
