<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
// $contenitore = [];
// $random = "";
// for ($i = 0; $i < 15; $i++) {
//     $random = rand(1, 20);
//     array_push($contenitore, $random);
// }
// var_dump($contenitore)

// $contenitore = [];
// while (count($contenitore) < 15) {
//     $random = rand(1, 20);
//     if (!in_array($random, $contenitore)) {
//         $contenitore[] = $random;
//     }
// }

$arrNumeri = [];
while (count($arrNumeri) < 15) {
    $randomNum = rand(1, 16);
    if (!in_array($randomNum, $arrNumeri)) {
        $arrNumeri[] = $randomNum;
    }
}


// var_dump($contenitore);
var_dump($arrNumeri);


?>