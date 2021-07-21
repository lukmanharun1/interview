<?php 

// case 1 (string)
// hilih converter
// perintah: jika input yang dimasukkan "jika input yang dimasukkan" semua huruf vocal di ganti "i"
// output: "jiki inpit ying dimisikkin"
// $input = "jika input yang dimasukkan";
$hurufVokal = ['a', 'i', 'u', 'e', 'o'];
$resultArray = str_split($input);

$hasil = [];
foreach($resultArray as $arr) {
    if (in_array($arr, $hurufVokal)) {
        array_push($hasil, 'i');
    } else {
        array_push($hasil, $arr);
    }
}
echo implode('', $hasil);
?>