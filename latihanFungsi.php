<?php 
function luas_segitiga($alas, $tinggi)
{
	$luas = ($alas)/2 * $tinggi;
	return $luas;
}
// echo "Luas Segitiga dengan alas 6 dan tinggi 15 = ".luas_segitiga(6,15);
// echo "<br/>";
// echo "<br/>";

function keliling_segitiga($sisiA, $sisiB, $sisiC)
{
    $keliling = $sisiA + $sisiB + $sisiC;
    return $keliling;
}
//  echo "Keliling Segitiga dengan sisi 5, 4, dan 3 = ".keliling_segitiga(5,4,3);
//  echo "<br/>";
//  echo "<br/>";

 function luas_lingkaran($r)
 {
     $luas = 3.14 * $r * $r;
     return $luas;
 }
//  echo "Luas Lingkaran dengan jari-jari 10 = ".luas_lingkaran(3.14,10);
//  echo "<br/>";
//  echo "<br/>";

 function keliling_lingkaran($r)
 {
    $keliling = 2 * 3.14 * $r;
    return $keliling;
 }
//  echo "Keliling Lingkaran dengan jari-jari 10 = ".keliling_lingkaran(3.14,10);
//  echo "<br/>";
//  echo "<br/>";

 function luas_jjrgenjang($alas, $tinggi)
 {
     $luas = $alas * $tinggi;
     return $luas;
 }
//  echo "Luas Jajar Genjang dengan alas 7 dan tinggi 10 = ".luas_jjrgenjang(7,10);
//  echo "<br/>";
//  echo "<br/>";

 function keliling_jjrgenjang($sisiA,$sisiB)
 {
     $keliling = 2 * ($sisiA + $sisiB);
     return $keliling;
 }
//  echo "Keliling Jajar Genjang dengan sisi a 7 dan sisi b 10 = ".keliling_jjrgenjang(7,10);
//  echo "<br/>";
//  echo "<br/>";
?>