<?php
$str = "i'm sorry Dave I'm afraid i can't do that";

$vowel ="aeiouyAEIOUY";

for ($i=0; $i < strlen($str); $i++){
    for ($j=0; $j < strlen($vowel); $j++){
        if ($str[$i] == $vowel[$j]){
             echo $str[$i];
        }
    }
};