<?php 

$soal = "Soal";

echo $soal.'. 1 ';
echo "<br>";
echo "<br>";
$file = 'data.txt';
$fdata1 = 'data1.txt';
$fdata2 = 'data2.txt';

$openfile = fopen($file, 'r');
$opendata1 = fopen($fdata1, 'r');
$opendata2 = fopen($fdata2, 'r');


$readfile = fread($openfile, filesize($file));
$readData1 = fread($opendata1, filesize($fdata1));
$readData2 = fread($opendata2, filesize($fdata2));




fclose($openfile);
fclose($opendata1);
fclose($opendata2);

$remove = " ";

// memetakan array baru di dalam variabel $resultfile dengan fungsi array_map() lalu,
// mengubah variabel $read yang berisi string menjadi array,
// dengan memisahkan spasi diantara tiap angka di dlm string menggunakan fungsi explode(), 
// contoh = explode(pemisah, variabel), 
// lalu mengubah value array dari string menjadi integer menggunakan fungsi intval(),
// di dalam fungsi array_map.
$resultfile = array_map('intval', explode("\n", $readfile));
$resultData1 = array_map('intval', explode("\n", $readData1));
$resultData2 = array_map('intval', explode("\n", $readData2));

// SOAL 

// NO. 1
// menambah value baru ke dalam array dengan array_push()
// contoh : array_push(nama_variabel_array, value)
array_push($resultfile, 20);

// NO. 2
// menampilkan hasil penjumlahan dalam array
$hasil_jumlah = array_sum($resultfile);
echo "hasil penjumlahan dari array : ".$hasil_jumlah;
echo "<br>";

// NO. 3
// menampilkan rata rata value dalam array
$jml_data = count($resultfile);
$rata_rata = $hasil_jumlah/$jml_data;
echo "rata-rata dari value array : ".$rata_rata;
echo "<br>";

// NO. 4
echo "Nilai Tertinggi : ".max($resultfile);
echo "<br>";
echo "Nilai Terendah : ".min($resultfile);
echo "<br>";
echo "<br>";
echo $soal.'. 2 ';
echo "<br>";
echo "<br>";
echo "Data 1 : [";
foreach($resultData1 as $rd1) {
    echo " ".$rd1;
}
echo "]";
echo "<br>";
echo "Data 2 : [";
foreach($resultData2 as $rd2) {
    echo " ".$rd2;
}
echo "]";

// perbedaan antara Data 1 dan Data 2


?>