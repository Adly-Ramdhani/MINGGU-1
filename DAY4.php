<?php
//soal 1
$nama ="wikrama";
echo substr($nama,-2,1)."<br>";
echo "<br>";
echo "<br>";

// soal 2
$x = 10;
for ($x = 1; $x <= 10; $x++) {
  echo " $x <br>";
}
echo "<br>";
echo "<br>";

// soal 3
for ($x = 10; $x >= 1; $x--) {
  echo " $x <br>";
}
echo "<br>";
echo "<br>";

//  soal 4
$x = 6;
for ($x = 1; $x <= 6; $x++) { 
  echo " <h2>$x</h2> <br>";
} 
echo "<br>";
echo "<br>";

//soal 5
for ($i = 1; $i <= 30; $i++) {
  if ($i % 4 == 0) {
   echo $i. '<br>';
  }
}
echo "<br>";
echo "<br>";
 
//soal 6
$hasil = 0;
for ($i = 5; $i <= 25; $i+= 5) {
  if (225 % $i == 0) {
    $hasil++;
  }
}
echo $hasil;
echo "<br>";
echo "<br>";
 

// soal 7
$dataa = [
    [
        'nama' => "Andi",
        'rombel' => "PPLG XI-1",
        'rayon' => "ciawi 4",
        'jk' => "L"
    ],
    [
        'nama' => "Sasa",
        'rombel' => "PPLG XI-6",
        'rayon' => "Sukasari 1",
        'jk' => "P"
    ],
    [
        'nama' => "Lala",
        'rombel' => "PPLG XI-3",
        'rayon' => "cisarua 4",
        'jk' => ""
    ],
    [
        'nama' => "Andi",
        'rombel' => "PPLG XI-1",
        'rayon' => "ciawi 4",
        'jk' => "L"
    ],
];

foreach ($dataa as $data) {
    echo "Nama          : ", $data['nama']."<br>";
    echo "Rombel        : ", $data['rombel']."<br>";
    echo "Rayonama      : ", $data['rayon']."<br>";
    echo "Jenis Kelamin : ", $data['jk']."<br>";
    echo "<hr>";
}


// soal 8
// 75,77,87,70,90,81,69,87,60

$nilaii = [75,77,87,70,90,81,69,87,60];
  foreach ($nilaii as $nilai){
    if ( $nilai >= 75){
        $kompeten[] = $nilai;
    } else {
        $belum []= $nilai;
    }
}

echo "Nilai Kompeten" .implode("," ,$kompeten);
echo "</br>";
echo "Nilai belum Kompeten" .implode("," ,$belum);
echo "<br>";
echo "<br>";


// soal 9
for ($i = 1; $i <= 3; $i++) {
    for ($a = 1; $a <= 10 ; $a++) { 
        echo "$i x $a = " .$i*$a ."<br>" ;
    }
  }

// soal 10

$dataa = [
    [
        'nama_barang' => "Pasta gigi",
        'harga_barang' => 18000,
        'jumlah_beri' => 1,
    ],
    [
        'nama_barang' => "Sabun Mandi",
        'harga_barang' => 5000,
        'jumlah_beri' => 1,
    ],
    [
       'nama_barang' => "Pasta gigi",
        'harga_barang' => 15000,
        'jumlah_beri' => 1,
    ],
];

$total_harga = 0;
foreach ($dataa as $data) {
     $total_harga += $data['harga_barang'] * $data['jumlah_beri'];
}

echo "Total harga: Rp" . number_format($total_harga, 0, ',', '.');
echo "<br>";
echo "<br>";

// soal 11
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];
foreach ($bil1 as $b1) {
    if (in_array($b1, $bil2)) {
        $bil_sama[] = $b1;
    }
}
$bil_sama_string = implode(", ", $bil_sama);

foreach ($bil2 as $b2) {
    if (!in_array($b2, $bil_sama)) {
        $bil_beda[] = $b2;
    }
}
$bil_beda_string = implode(", ", $bil_beda);

echo "bilangan yang sama : $bil_sama_string";
echo "<br>";
echo "bilangan yang beda: $bil_beda_string";
echo "<br>";
echo "<br>";



// soal 12

$barang = [
    [
        'nama' => 'Ban', 'diskon' => '10'
    ],
    [
        'nama' => 'oli mesin'
    ],
    [
        'nama' => 'kampas rem'
    ],
    [
        'nama' => 'busi', 'diskon' => '9'
    ],
    [
        'nama' => 'akumulator', 'diskon' => '7'
        ]
];

foreach ($barang as $item) {
    if (isset($item['diskon'])) {
        echo "  Nama Barang : " . $item['nama'] . ", Diskon: " . $item['diskon'] . "<br>";
    }
}


echo "<br>";
echo "<br>";

//soal 13
$dataa = [
    [
        'nama' => 'Andi',
        'tahun' => '2008',
    ],
    [
        'nama' => 'Beni',
        'tahun' => '2001',
    ],
    [
        'nama' => 'Dani',
        'tahun' => '2004',
    ],
    [
        'nama' => 'Eko',
        'tahun' => '2006',
    ],
];

foreach ($dataa as $data) {
    $tahun = intval($data['tahun']); //untuk mengkonversi nilai sebuah variabel ke integer

    if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
        echo "Nama: " . $data['nama'] . ", Tahun Lahir: " . $data['tahun'] . " (Tahun Kabisat)<br>";
    }
}
echo "<br>";
echo "<br>";

//soal 14

$students = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Danii',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

foreach ($students as $student) {
    $nama = $student['nama'];
    $nilai = $student['nilai'];
    
    $totalNilai = array_sum($nilai);

    echo "Nama: $nama, Jumlah Nilai: $totalNilai<br>";
}


?>



