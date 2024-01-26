<?php

echo "<h1>DAY 2</h1>";
echo "<br>";

// soal nomor 1
$a = 95;
if ($a >= 90){
    echo "A";
}elseif ($a >= 80 ){
    echo "B";
}else{
    echo "c";
}
 echo "<br>";
 echo "<br>";

// soal nomor 2
$usia = 17;
if ($usia >= 6 && 12 ){
    echo "waktu tidur yang baik 10jam";
}elseif($usia >= 12 && $usia >= 18) {
    echo "waktu tidur 8-9";
}else{
    echo "tidur";
}
 echo "<br>";
 echo "<br>";

// soal nomor 3
$a = 9;
if ($a > 0) { 
 echo "positif";
}elseif ($a < 0){
  echo "negatif";
}else{
    echo "cacah";
}
echo "<br>";
echo "<br>";

//nomor 4
$jamkerja = 14;
$kompensasi = 30000;
if ($jamkerja >= 8) {
    $jam = $jamkerja - 8;
    $hasil = $jam * $kompensasi;
    echo $hasil;
}else{
    echo "tdiak ada";
}
echo "<br>";
echo "<br>";



// soal nomor 5
$adni = 2008;
$eko = 2004;
if (($adni%4) == 0 && ($eko%4) == 0 ) {
    echo "eko dan adni lahir di tahun kabisat ";
}elseif ($adni % 4 == 0){
    echo "adni lahir di tahun kabisat";
}elseif ($eko % 4 == 0){
    echo "adni lahir di tahun kabisat";
}else{
    echo "tidak ada lahir di tahun kabisat";
}
echo "<br>";
echo "<br>";

// soal nomor 6
$beratBadan = 44;
$tinggiBadan = 148;
$hasil = $beratBadan/(($tinggiBadan/100)** 2);
if($hasil < 18.5){
    echo "Berat Badan Kurang";
}elseif(($hasil >= 18.5) && ($hasil <= 22.9)){
    echo "Berat Badan Normal";
}elseif(($hasil > 22.9) && ($hasil <=24.9)){
    echo "Berat Badan Berlebih";
}else{
    echo "Berat Badan Obesitas";
}
echo "</br>";
echo "<br>";


// soal nomor 7
$day = date('l');
$nasigoreng = 30000;
$ayambakar = 20000;
$kebuli = 50000;
$hasil = $kebuli + $ayambakar + $nasigoreng;
if ($day == 'Manday') {
    echo $hasil - ($hasil*0.02);
}elseif ($day == 'Friday'){
    echo $hasil - ($hasil*0.05);   
}else{
    echo "total nya $hasil dan tidak ada diskon";
}
echo "</br>";
echo "<br>";

//soal nomor 8
$panjang_tanah = 13;
$lebar_tanah = 9;
$luas_tanah = $panjang_tanah * $lebar_tanah;
if ($luas_tanah < 90) {
   echo "Rumah termasuk tipe 36";
}elseif ($luas_tanah >= 90 &&  $luas_tanah <= 96) {
    echo "Rumah termasuk tipe 45";
}elseif ($luas_tanah >= 96 &&  $luas_tanah <= 120) {
    echo "Rumah termasuk tipe 54";
}elseif ($luas_tanah >= 120 &&$luas_tanah <= 150) {
    echo "Rumah termasuk tipe 60";
}else{
    echo "Rumah termasuk tipe 70";
}
echo "</br>";
echo "<br>";


// soal 9
// $mtk = 83


// soal 10

$belanja  = 250000;
$potongan = 10000;
$hasil = $belanja - $potongan;
if ($belanja >= 100000 && $belanja <= 150000) {
    echo "mendapatkan potongan harga sebesat $potongan dan total nya $hasil";
}elseif ($belanja >= 150000){
    echo "mendapatkan 1 dus permen kaki dan potongan sebesar $potongan dan total nya $hasil";
}else{
    echo "total nya $belanja dan tidak ada diskon";
}
echo "</br>";
echo "<br>";

?>