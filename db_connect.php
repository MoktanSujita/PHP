<?php
$servername="localhost";
$username="root";
$password="";
$database="information_schema";

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    die("Connection Failed:" .mysqli_connect_error());

}
echo"connected successfully!";
?>