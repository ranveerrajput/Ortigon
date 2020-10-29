<?php 
session_start();
echo "the name of the user is ".$_SESSION['name']. " and surname  ". $_SESSION['lname'];

?>