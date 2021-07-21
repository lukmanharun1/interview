<?php 


// <!-- case 3 (string)
// mengembalikan kata benar ketika membaca kata dari belakang maupun depan hasilnya sama
// ex case:
// kodok: dibaca dari depan kodok dibaca dari belakang kodok = benar
// kaca: dibaca dari depan kaca dibaca dari belakang acak = salah
// output yang diharapkan:
// input kodok  output benar
// input kaca  output salah -->

$input = "kodok";
$resultArray = array_reverse(str_split($input), true);
$result = implode('', $resultArray);
if ($result === $input) {
    echo "benar";
} else {
    echo "salah";
}

?>