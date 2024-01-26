<?php
// echo "<center>";
// echo "<h1>DAY 3</h1>";

// echo "<h4>Conotoh Soal</h4>";
// //contoh 1
$nilai = 75;
$hasil = $nilai >= 70 ? "anda lulus" : "anda tidak lulus";
echo $hasil;
echo "<br>";
echo "<br>";

// //contoh 2
$a = "ikan";
$b = "ikan";
$hasil = $a == $b ? "sama" : "beda";
echo $hasil;
echo "<br>";
echo "<br>";

// //contoh 3
$a = "7";
$hasil = is_numeric($a) ? "Variabel $a adalah numerik" : "Variabel $a adalah string";
echo $hasil;
echo "<br>";
echo "<br>";

// //contoh 4
$i = -9;
$top = $i < 0 ? "negatif" : ($i > 0 ? "positif" : 'cacah');
echo $top;
echo "<br>";
echo "<br>";

// //contoh 5
$day = date('l');
$nasigoreng = 30000;
$ayambakar = 20000;
$kebuli = 50000;
$hasil = $kebuli + $ayambakar + $nasigoreng;

// //contoh 6
$hasill = $day == 'Friday' ? "5%" : ($day == 'Wednesday' ? "10%" : "0%" );
echo $hasill;
echo "</br>";
echo "<br>";

// //conotoh 6
$belanja  = 90000;
$potongan = $belanja >= 100000 ? $belanja-10000 : $belanja;
echo $potongan;

echo "<h4>Soal</h4>";
$andi  = 8500000;
$potongan = 0.05 ;
$jumlah = $andi * $potongan;
$hasil = $andi >= 500000 ? "jadi bunga " .($jumlah + $andi) : "tidak";
echo $hasil;
echo "</br>";
echo "<br>";

// //soal 2
$jam1 = 19.00;
$jam = $jam1 >= 12 ? "0" .$jam1 - 12 . ".00 pm" : $jam1 . ".00 am";
echo $jam;
echo "</br>";
echo "<br>";

// //soal 3
$day = date('l');
$hasil = $day == 'Wednesday' ? "hari ini upacara" : "tidak upacara" ;
echo $hasil;
echo "</br>";
echo "<br>";

// soal 4
$a = 95;
echo $hasil = $a <= 90 ? " A":($a >= 75 ? "B" : "C") ;
echo "</br>";
echo "<br>";

$status = " sakit";
$persentase = 100;

$izinsakit = 1;
$alfa= 0;

echo $hasil = $izinsakit ? $persentase -3 :($alfa ? $persentase -5 : $persentase);
// echo $hasil = $status == "sakit" || $status == "izin" ? $a -3 :(($status == "alpa")? $a -5 : "baik");
 
?>