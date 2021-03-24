<?php
require_once 'myClass.php';
?>
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
        $lingkaran = new lingkaran (5);
        echo "Luas dari lingkaran tersebut adalah: ".$lingkaran->getLuas();
        echo "<br/>";
        echo "Keliling dari lingkaran tersebut adalah: ".$lingkaran->getKeliling();
        echo "<br/>";
    ?>
</body>
</html>