<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
// $contenitore = [];
// $random = "";
// for ($i = 0; $i < 15; $i++) {
//     $random = rand(1, 20);
//     array_push($contenitore, $random);
// }
// var_dump($contenitore)

$contenitore = [];
for ($i = 0; $i < 15; $i++) {
    $contenitore[$i] = rand(1, 16);
    // echo $contenitore[$i];
    $control = array_unique($contenitore);

    $confronto = array_diff_key($contenitore, $control);
}
var_dump($control);
var_dump($contenitore);
var_dump($confronto);


?>