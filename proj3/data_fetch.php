<?php 

// defining an array
$error=array();

if(isset($_POST['submit'])){

    // declaration of the variabes
    $email=$_POST['email'];
    $password=$_POST['password'];



    // checking the fields are empty or no
    
    if(empty($email)){
        array_push($error,'email');
    }
    if(empty($password)){
        array_push($error,'no');
    }

    // checking the values in the array
    //print_r($error);

    if(count($error)==0){
        // printing thr form elemnts
        //checking the email and the password
        if($email=="ranveerrajput351@gmail.com" and $password==12345){
            session_start();
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            echo "LOGIN SUCCESSFUL";
            ?>
            <form action="home.php" >
            <input type="submit" name ="submit" value="HOME">
            <?php
            
        }
        else{
            echo "WRONG CREDENTIALS";



            // html form 
            ?>
            
            
        <form action="data_fetch.php" method="POST">
        
        <label>Email Address</label><br>
        <input type="email" id="email" name="email" placeholder="Enter the email..."><br>

        
        <label>Password</label><br>
        <input type="password" id="password" name="password" placeholder="Enter the password..."><br>

        <input type="submit" name ="submit" value="submit">

   
    </form>
            <?php
            
        }

    }
}
?>