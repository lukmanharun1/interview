<?php 

// <!-- case 4 (array & integer)
// menghapus nilai yang sama
// data: [23, 45, 67, 90, 23, 1, 6, 90, 12, 43, 90, 67]
// perintah: jika kita menemukan nilai yang sama maka hapus nilai tersebut dan sisakan satu nilai yang tersisa
// output yang diharapkan:
// [23, 45, 67, 90, 1, 6, 12, 43] -->

$data = [23, 45, 67, 90, 23, 1, 6, 90, 12, 43, 90, 67];
 var_dump(array_unique($data));

?>