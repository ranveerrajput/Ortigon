<?php
session_start();
if(session_destroy()){
    echo "session ends here";
};
//echo $_SESSION['name'];  this line willl not get executed bcoz session end in the upper line and it will throw the error as undefined index
?>