<?php
require 'connection.php';

function deleteUser($conn,$id)
{
    $sql="DELETE fROM users WHERE id=?";
    $stmt=$conn->prepare($sql);
    $stmt=mysqli_stmt_bind_param("i",$id);
    $stmt->execute();

}
deleteUser($conn,1);
?>