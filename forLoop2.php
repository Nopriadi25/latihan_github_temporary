<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
for ($a=1; $a<=5; $a++)
{
   for ($i=1; $i<=$a; $i++)
   {
       if ($a==3)
        {
           if($i !=2){echo $a;}else{echo "x";}
        }
    else
        {
        echo $a;
        }
    }
    echo "<br/>";
}

?> 
</body>
</html>  