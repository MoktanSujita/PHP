<?php
    //Checking if the user exists or not. If the user exists it redirects to dashboard
     session_start();
     if(isset($_SESSION['username']))
     {
        header("Location:dashboard.php");        //header() redirects
        exit();
     }

     include "config.php";     //using keyword "include" we can embedd files
     if($_SERVER['REQUEST_METHOD']=="POST")
     {
        $email=trim($_POST['email']);          //trim() removes the unnecessary spaces
        $password=$_POST['password'];

        $email=mysqli_real_escape_string($db,$email);           //fetching data from database
        $sql="SELECT *from users WHERE email='$email'";      
        $result=mysqli_query($db,$sql);

        if(mysqli_num_rows($result)==1) {          //checking if the database of the user exists or not
           $row=mysqli_fetch_row($result);         //each row of data is fetched one at a time
           if(password_verify($password,$row['password']))
           {
              $_SESSION['user_id']=$row['id'];
              $_SESSION['username']=$row['name'];
              header("Location:dashboard.php");
              exit();
           }
           else {
            $error_message= "invalid username or password";
           }
        }
        else
        {
            $error_message="Invalid username or password";
        }
     }
     mysqli_close($db);        //manually closing connection with database

?>