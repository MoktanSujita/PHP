<?php
    session_start();
    session_unset();      //to delete all session variables
    session_destroy();    //to destroy session

    echo "Session destroyed";
?>