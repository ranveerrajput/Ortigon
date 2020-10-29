<?php 

// defining an array
$error=array();

if(isset($_POST['submit'])){

    // declaration of the variabes
    $name=$_POST['name'];
    $no=$_POST['mobile'];
    $email=$_POST['email'];



    // checking the fields are empty or not
    if(empty($name)){
        array_push($error,'name');
    }
    if(empty($no)){
        array_push($error,'no');
    }
    if(empty($email)){
        array_push($error,'email');
    }

    // checking the values in the array
    //print_r($error);

    if(count($error)==0){
        // printing thr form elemnts
    echo $name."<br>";
    echo $no ."<br>";
    echo $email ."<br>";
    }
}
// checking if the errors are their or if the page is not submitted then agin that same page is displayed until the all fieds are filled and submit value is set
if(!(isset($_POST['submit']))  || count($error)>0){





?>
<html>

    <title>Basic fom demo using php</title>
<body>
    <form action="form.php" method="POST">

        <?php if(in_array('name',$error)){ echo "*NAME IS REQUIRED";}?><br> 
        <label>Name of the student </label>
        <input type="text" id="name" name ="name" placeholder="Please enter your name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>"><br><br>


        <?php if(in_array('no',$error)){ echo "*MOBILE NUMBER IS REQUIRED"; } ?><br>
        <label> Mobile number</label>
        <input  type="number" id="mobile" name="mobile" placeholder="Enter Your Number" value="<?php if(isset($_POST['mobile'])){echo $_POST['mobile'];} ?>""><br><br>


        <?php if(in_array('email',$error)){ echo "*EMAIL IS REQUIRED"; } ?><br>
        <label>Email address</label>
        <input type="text" name="email" id="email" placeholder="Enter the email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>""><br><br>


        <input type="submit" name ="submit" value="submit">

    </form>
</body>
</html>
<?php 
}


?>