//Connecting with database through oop

<?php
     $db=new mysqli("localhost","password","","test_db");
     if($db->connect_error)
     {
        die ("Connection Failed:".$db->$connect_error);
     }
     else
     {
        echo "Connection Successful";
     }
?>