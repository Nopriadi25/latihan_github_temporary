<?php
include "myClass.php";
if (isset($_POST['hitung'])){
    $myLingkaran = new Lingkaran($_POST['r']);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    <div class="container p-5">
        <form action="" method="POST">
            <div class="form-group">
                <label for="r">Form Luas dan Keliling Lingkaran</label>
                <input type="number" name="r" class="form-control" required placeholder="masukkan nilai r (jari-jari)">
            </div>

            <button type="submit" name="hitung" value="Hitung" class="btn btn-primary btn-block">submit</button>
        </form>

        <?php if (isset($_POST['hitung'])) { ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <div>Nilai r lingkaran adalah : <?=$_POST['r']?></div>
            <div>Luas lingkaran adalah : <?= $myLingkaran->getLuas()?></div>
            <div>Keliling lingkaran adalah : <?= $myLingkaran->getKeliling()?></div>

            <button type="button" close="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <?php } ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>