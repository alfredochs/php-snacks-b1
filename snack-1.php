<!-- Snack 1
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$email = "";
$age = "";
$name = "";

if (!array_key_exists("email", $_GET) || !array_key_exists("name", $_GET) || !array_key_exists("age", $_GET)) {
    exit("Non ci sono le chiavi necessarie");
}
$email = $_GET["email"];
$pointControl = strchr($email, ".");
$atControl = strchr($email, "@");

$age = $_GET["age"];
$ageControl = is_nan($age);
$name = $_GET["name"];
$controlName = strlen($name);

var_dump($email);
var_dump($pointControl, $atControl);

if (($pointControl && $atControl) && $ageControl && $controlName > 3) {
    echo "Accesso riuscito";
} else {
    echo "Acceso Negato";
}


?>