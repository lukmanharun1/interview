<?php 
// case 7 
// perintah: tentukan berapa jumlah uang pecahan, samakan dengan uang pecahan yang ada di Indonesia
// input: 72500
// output: 50000, 20000, 2000, 200, 200, 100
$input = 72500;


function hitungUangPecahanIndonesia($input)
{
    $result = [];
    $uangPecahanIndonesia = [
        100000, 75000, 50000, 20000, 10000,
        5000, 2000, 1000, 200, 100
    
    ];
    for ($i = 0; $i < count($uangPecahanIndonesia); $i++) { 
         if ($uangPecahanIndonesia[$i] === $input) {
            array_push($result, $uangPecahanIndonesia[$i]);
            break;
        }
         else if ($uangPecahanIndonesia[$i] > $input) {
            continue;
        } else if ($uangPecahanIndonesia[$i] <= $input) {
            $input -= $uangPecahanIndonesia[$i];
            array_push($result, $uangPecahanIndonesia[$i]);
            $i -= 1;
        } 
    }
    return implode(', ', $result);
    

}

echo hitungUangPecahanIndonesia($input);

?>