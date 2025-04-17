<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x=90;
    $y=50;
    if($x<100 && $y>50)
    {
        echo "X is less than 100 and Y is greater than 50";
    }
    else
    {
        echo "<br>X is not less than 100 and Y is greater than 50";
    }
    if($x<100 || $y>50)
    {
        echo "<br>X is less than 100 or Y is greater than 50";
    }
    else
    {
        echo "<br>X is not less than 100 or Y is greater than 50";
    }
    if($x!= $y)
    {
        echo "<br>X is not equal to Y";
    }
    else
    {
        echo "<br>X is equal to Y";
    }
   
    ?>
</body>
</html>