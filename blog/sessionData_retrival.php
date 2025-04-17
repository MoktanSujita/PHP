<?php
     session_start();
    if(isset($_SESSION['username']))     //isset 
    {
        echo "Welcome," .$_SESSION['username'];  //rerives and concatinate username
    }
    else
    {
        echo("Unlogged user");
    }
?>