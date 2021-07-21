<?php 
// case 5 (array & integer)
// mengurutkan dari nilai kecil ke nilai yang lebih besar dan menghapus nilai yang sama
// data: [4, 5, 8, 9, 0, 2, 8, 2, 11, 15, 2, 9, 0]
// perintah: jika kita menemukan nilai yang lebih kecil maka taruh nilai tersebut di depan dan jika menemukan nilai yang sama hapus nilai tersebut
// output yang diharapkan:
// [0, 2, 4, 5, 8, 9, 11, 15]

$data = [4, 5, 8, 9, 0, 2, 8, 2, 11, 15, 2, 9, 0];
$unique = array_unique($data);
sort($unique);
var_dump($unique);

?>