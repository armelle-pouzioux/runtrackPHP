<?php
$x=1;
while($x<=100){
    if($x % 3 == 0 && $x % 5 == 0){
        echo "FizzBuzz". "<br>";
    }elseif($x % 3 == 0){
        echo "Fizz". "<br>";
    }elseif($x % 5 == 0){
        echo "Buzz". "<br>";
    }else{
        echo $x . "<br>";
    }
    $x++;
}
    