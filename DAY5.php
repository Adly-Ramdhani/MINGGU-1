<?php

function tabungan($jumlah, $bulan){
     $total = $jumlah + ($jumlah * $bulan/100 );
     return 'Rp.' .number_format($total,0,'.','.');
}
echo tabungan(420000,10);

echo "<br>";

function beratbadan($beratBadan,$tinggiBadan){
     $hasil = $beratBadan/( $tinggiBadan/1000);
     if($hasil < 18.5){
          echo "Berat Badan Kurang";
      }elseif(($hasil >= 18.5) && ($hasil <= 22.9)){
          echo "Berat Badan Normal";
      }elseif(($hasil > 22.9) && ($hasil <=24.9)){
          echo "Berat Badan Berlebih";
      }else{
          echo "Berat Badan Obesitas";
      }

}
echo beratbadan(44,148);

echo "<br>";

function hariini($tanggal){
     $day = date('l', strtotime($tanggal));
     if ($day == 'Monday') {
          echo "Senin";
      }else if ($day == 'Tuesday'){
          echo "Selasa";
      }else if($day == 'Wednesday'){
          echo "Rabu";
      }else if($day == 'Thursday'){
          echo "Kamis";
      }else if($day == 'Friday'){
          echo "Jumaat";
      }else if($day == 'Saturday'){
          echo "Sabtu";
      }else if($day == 'Sunday'){
          echo "Minggu";
      }else{
          echo "tidak";
      }
}
echo hariini('2024-01-26')
?>