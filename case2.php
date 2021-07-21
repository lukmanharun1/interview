<?php 
// case 2 (array)
// membandingkan nilai rudi dan ani
// rudi punya nilai:
//     • sejarah: 8
//     • matematika: 7
//     • sosiologi: 6
//     • kewarganegaran: 9
// ani punya nilai:
//     • sejarah: 5
//     • matematika: 8
//     • sosiologi: 9
//     • kewarganegaran: 6
// perintah: jika nilai salah satu murid lebih tinggi maka akan mendapatkan nilai 1
// output yang diharapkan:
// [rudi => 2, ani => 2];

$nilaiRudi = [
    'sejarah' => 8,
    'matematika' => 7,
    'sosiologi' => 6,
    'kewarganegaran' => 9
];

$nilaiAni = [
    'sejarah' => 5,
    'matematika' => 8,
    'sosiologi' => 9,
    'kewarganegaran' => 6
];
$resultRudi = 0;
$resultAni = 0;
foreach ($nilaiRudi as $key => $value) {
    if ($nilaiRudi[$key] > $nilaiAni[$key]) {
        $resultRudi += 1;
    } else {
        $resultAni += 1;
    }
}

 var_dump([
    'rudi' => $resultRudi,
    'ani' => $resultAni
 ]);





?>