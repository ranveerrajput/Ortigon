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
        include "conn.php";
        $userId="Select * from loginInfo where userEmailId='$email'";
        $result=mysqli_query($conn,$userId);
        $row=mysqli_fetch_assoc($result);
        //var_dump($row);
        //$user_pass="Select * from "
        // printing thr form elemnts
        //checking the email and the password
            if($row[password]==$password){
                session_start();
                $_SESSION['email']=$email;
                $_SESSION['password']=$password;
                echo "LOGIN SUCCESSFUL";
                ?>
                <?php
                header("location: index.php");
                
                
            }
            else{
            
                
                header("location:login.php");
    


                // html form 
                ?>
                
            
        <form action="login.php" method="POST">
        
        <label>Email Address</label><br>
        <input type="email" id="email" name="email" placeholder="Enter the email..."><br>

        
        <label>Password</label><br>
        <input type="password" id="password" name="password" placeholder="Enter the password..."><br>

        <input type="submit" name ="submit" value="submit">

   
    </form>
            <?php
            
        }

    }
    else{

        
        header("location:login.php");
    


    }
}
?>