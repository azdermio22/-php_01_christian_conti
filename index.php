<?php
// $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// $array2 = [];
// foreach ($array as $value) {
//     if ($value % 2 == 0) {
//         array_push($array2, $value);
//     };
// };
// $media = $array2[0]+$array2[1]+$array2[2]+$array2[3]+$array2[4]+$array2[5];
// var_dump($array2);
// echo $media;

// $array = [
//     ["nome" => "lorenzo", "cognome" => "conti", "sesso" => "M"],
//     ["nome" => "laura", "cognome" => "caputo", "sesso" => "F"]
// ];
// foreach ($array as $value) {
//     if ($value["sesso"] == "M") {
//         echo "buongiorno signor $value[nome] $value[cognome]\n";
//     }else{
//         echo "buongiorno signora $value[nome] $value[cognome]";
//     };
// };

for ($i=0; $i <= 100; $i++) { 
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "hackademy96"." ";
    }else if ($i % 5 == 0) {
        echo "javascript"." ";
    }else if ($i % 3 == 0) {
        echo "php"." ";
    }else {
        echo $i." ";
    }
}
?>