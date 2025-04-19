<?php
    require 'connnection.php';
    function createUser($conn,$name,$email,$password)
    {
        $sql="INSERT INTO users(name,email,password) VALUES (?,?,?)";
        $stmt=$conn->prepare($sql);        //preparing sql query
        $stmt->bind_param("sss",$name,$email,$password);       //binding values to line 6 ??? marks
        $stmt->execute();
    }
    createUser($conn,"Jane Doe","jane@gmail.com","jane123");        //calling funtion and passing arguments/values
?>