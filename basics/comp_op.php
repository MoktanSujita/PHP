<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparision Operator</title>
</head>
<body>
    <?php
    $a=5;
    $b=3;
if($a==$b){
    echo"It is Equal";
}
else{
    echo"It is not equal";
}

if($a>=$b)
{
    echo"<br>A is greater or equal to B";
}
else{
    echo"<br>B is Greater than A";
}

   if($a!=$b)
   {
       echo "<br>A is not equal to B";
   }
   else 
   {
       echo "<br>A and B are equal";   
   }
?>
</body>
</html>