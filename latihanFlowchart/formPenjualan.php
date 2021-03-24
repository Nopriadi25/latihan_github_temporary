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
    if (isset($_POST['prosesPembelian']))
    {
        $jmlBeli = $_POST['jmlBeli'];

        $totalHarga = totalHarga($jmlBeli);
        $totalDiskon = totalDiskon($totalHarga, $jmlBeli);
        $totalBayar = totalBayar($totalHarga,$jmlBeli);
    }
    ?>
</body>
</html>
