<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    <h1 align="center">Pembelian Buku</h1>
		
    <?php 
	//input
	$buku = $_POST['jmlBeli'];
	$harga = 12500;
	$total = $buku * $harga;
	$stlhdiskon = $total - $total*0.05;
	$diskon	= $total*0.05;

	echo "Jumlah Pembelian Buku = $buku <br/>";
	echo "Harga = $harga <br/>";
	echo "Total = $total <br/>";
	echo "Diskon = $diskon <br/>";

	//proses dan output
	if ($buku > 20){
		echo "Jumlah Pembayaran = Rp ", $stlhdiskon;
	}
	else{
		echo "Jumlah Pembayaran = Rp $total";
	}
	?>
	<br/>
	 <a href="formLatihan7a.php"><button class="btn btn-success" type="button">Kembali</button></a>
	

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>










