<?php
for ($x = 2; $x<=1000; $x++ ){
    $isPrime = true;
    for ($i = 2 ; $i * $i <= $x ; $i++){
        if ($x % $i == 0){
            $isPrime = false;
            break;
        }
    }
    if($isPrime){
        echo $x ."<br>";
    }
}
?>