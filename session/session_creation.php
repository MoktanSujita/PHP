<?php
    session_start();//starting a session

    $_SESSION['username']="Jonney Jonney";   //data for session
    $_SESSION['email']="jonneyjonney@gmail.com";

    echo "session data stored";

    session_destroy();      //once session is started, it needs to be destroyed manually
?>