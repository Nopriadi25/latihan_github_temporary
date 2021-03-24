<?php

function login($nama, $pass)
{
if ($nama == "user" && $pass == "user123")
   {
   header("location:formPenjualan.php");
   }
   else
   {
      echo "<script>alert('username and password uncorrectly')</script>";
   }
}
 
//proses form penjualan

$harga = 9000;
$diskon = 0.05;

function totalHarga($jmlBeli)
{
   global $harga;
   $jmlTotHarga = $harga * $jmlBeli;
   return $jmlTotHarga;
}

function totalDiskon($totalHarga, $jmlBeli)
{
   global $diskon;

   if ($jmlBeli >= 36)
   {
      $jumTotDiskon = $totalHarga * $diskon;
   }else{
      $jumTotDiskon = $totalHarga * 0;
   }
   return $jmlTotDiskon;

function totalBayar($jmlBeli, $harga)
?>