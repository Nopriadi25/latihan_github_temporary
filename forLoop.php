<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="">
        <?php
            for ($i=1800; $i<=2021; $i++) { ?>
                <option value="<?=$i;?>" <?php if ($i==1888){echo"selected";}?> ><?=$i;?></option>";
        <?php } ?>
                
        ?>
    </select>

    <?php
        for ($a=1; $a<= 5; $a++) {
            for ($i=1; $i<=$a; $i++){
                echo "*";
            }
            echo "<br>";
        }
    ?>

</body>
</html>

<!-- cara pertama *dibungkus tag <?php?>
for ($i=1990; $i<=2021;$i++)
{
    echo "<option value=$i>$i<option>";
} -->







<?php
// for($a=1;
// $a<=10;
// $a++)
// {
//     echo $a;
//     echo "Nilai dari a:". $a. "<br/>";
// }

?>