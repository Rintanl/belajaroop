<?php
//array 1 dimensi
$array1 = array();
$array2 = [];

$makanan = ['nasi gorengkambing', 'sate kambing', 'sate goreng kambing', 'sate buntel kambing', 'boba'];

//menghitung jumlah array
//echo count($makanan);

//dimulai dari index ke-0
// echo $makanan[0];

//looping untuk menampilkan array
// $i = 0;
//while ($i < count($makanan)) {
//     echo $makanan[$i]."<br>";
//     $i++;
// }

foreach ($makanan as $row){
    echo $row."<br>";
}

?>