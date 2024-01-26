<?php
echo "<h1>DAY 1</h1>";
echo "<br>";
// saoal nomor 1 poin3
  $a = "ikan";
  $b = "ikan";
if ($a == $b) { 
   echo "sama";
}else{
    echo "beda";
}
echo "<br>";
echo "<br>";

// soal nomor 2 poin3
$a = 8;
$b = 9;

if ($a == $b) { 
 echo "sama";
}else{
    echo max($a,$b);
}
echo "<br>";
echo "<br>";

//soal nomor 3 poin3
$a = 75;
$b = 75;
if ($a >= $b) { 
 echo "kompeten";
}else{
  echo "tidak kompeten";
}
echo "<br>";
echo "<br>";

//soal nomor 4 poin5
$a = -9;
if ($a < 0) { 
 echo "negatin";
}else{
  echo "positif";
}
echo "<br>";
echo "<br>";


//soal nomor 5 poin5
$a=136; 
if ($a % 2 == 0){ 
    echo "$a Merupakan Bilangan Genap"; 
}else {
    echo "$a Merupakan Bilangan Ganjil"; 
}
echo "<br>";
echo "<br>";

//soal nomor 6 poin5
$a=176; 
if ($a % 6 == 0){ 
    echo "$a Merupakan Bilangan Genap"; 
}else {
    echo "$a Merupakan Bilangan Ganjil"; 
}
echo "<br>";
echo "<br>";

//soal nomor 7 poin3
$a = "7";
if (is_numeric($a)) {
    echo "Variabel $a adalah numerik.";
} else {
    echo "Variabel $a adalah string.";
}
echo "<br>";
echo "<br>";

//soal nomor 8 poin5
$a = "";
if ($a === "") {
    echo "Variabel $a tidak memiliki value.";
} else {
    echo "Variabel $a  memiliki value.";
}
echo "<br>";
echo "<br>";

//soal nomor 9 poin3
$a = date("16");

if ($a < 17) {
  echo "tidak bisa";
}else{
  echo "bisa";
}
echo "<br>";
echo "<br>";

//soal nomor 10 poin3
$a = 154000;
$b = 100000;
if ($a >= $b) {
    $diskonn = (0.07 * $a);
    echo $b - $diskonn;
} else {
    echo  $a; 
}
echo "<br>";
echo "<br>";

//soal nomor 11 
$a = 9;
if ($a > 0) { 
    echo "positif";
    if ($a > 10) {
    echo "lebig besar";
}else{
    echo "tdiak";
}
}else{
  echo "negatif";
}
echo "<br>";
echo "<br>";

// soal nomor 12
$nilai = 90;
$kehadiran = 100;
if ($nilai > 85 && $kehadiran > 90 ){
    echo "berprestasi";
}else{
    echo "tidak berprestasi";
}



?>
