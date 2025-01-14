<?php
$x = 0;
while($x<=1337){
    if($x == 26 ||$x == 37 || $x == 88 || $x == 111){
        $x++;
        continue;
    }
    echo $x . "<br>";
    $x++;
}
