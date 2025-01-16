<?php
$str="Dans l'espace, personnene vous entend crier.";

$count = 0;

for($i=0; $i < strlen($str); $i++){
    $count++;
}
 echo "Le nombre de caractère de la chaîne est : " .$count;