<?php

// avec une boucle while
$x = 1;
while($x<=1337){
    if($x == 42){
        echo "<strong><u>$x</u></strong><br>";
    } else {
    echo $x . "<br>";
    }
    $x++;
}

// avec une boucle for 
for ($x=1; $x<=1337 ; $x++){
    if($x === 42){
        echo '<b><u>'.$x.'</b></u><br>';
    } else{
        echo $x.'<br>';
    }
}