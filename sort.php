<?php
//memasukkan nilai ke dalam array
$mobil=array("Volvo", "BMW", "Toyota");

//array diurutkan secara ascending
sort($mobil);

//mendapatkan jumlah nilai dari array $mobil
$length=count ($mobil);

//dengan looping menampilkan tiap niai dari arrray
for($x=0; $x < $length; $x++){
    echo $mobil[$x];
    echo "<br/>";
}
?>
