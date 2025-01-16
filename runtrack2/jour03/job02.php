<?php

// Avec une boucle while et isset
$str = "Tous ces instants seront perdus dans 
le temps comme les larmes sous la pluie.";

$index = 0;

while (isset($str[$index])){
    if ($index % 2 == 0){
        echo $str[$index];
    }
    $index++ ;
}

// Avec une boucle for et strlen
$str = "Tous ces instants seront perdus dans 
le temps comme les larmes sous la pluie.";

$index = 0;

for ($index = 0; $index < strlen($str); $index++) {
    if ($index % 2 == 0) {
        echo $str[$index];
    }
}



// Avec foreach
$str = "Tous ces instants seront perdus dans 
le temps comme les larmes sous la pluie.";

$index = 0;

$chars = str_split($str);

foreach ($chars as $index => $char) {
    if ($index % 2 == 0) {
        echo $char;
    }
}
?>