<?php
   require 'connection.php';
   function updateUser($conn,$id,$newemail)
   {
    $sql="UPDATE users SET email=? WHERE id=?";
    $stmt=$conn->prepare($sql);
    $stmt=bind_param("i",$id,$newemail);
    $stmt->execute();
   }
   updateUser($conn,1,"jennydoe@gmail.com");
?>