<?php

$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

$dic = [
    "voyelles" => ["a","e","i","o","u","y","A","E","I","O","U","Y"],
    "consonnes" => ["b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","y","z","B","C","D","F","G","H","J","K","L","M","N","P","Q","R","S","T","V","W","X","Y","Z"],
    ];


$nbrvoyelles = 0;
$nbrconsonnes = 0;



for ($i=0; isset($str[$i]); $i++){
    foreach($dic as $type => $letters){

        if ($type === "voyelles"){
            for ($j=0; isset($letters[$j]); $j++){
                if ($str[$i] === $letters[$j]){
                    $nbrvoyelles++;
                }
            }
        }elseif ($type ==="consonnes"){
            for ($j=0; isset($letters[$j]); $j++){
                if ($str[$i] === $letters[$j]){
                    $nbrconsonnes++;
                }
            }   
        }
    }
}    

echo $nbrconsonnes.'<br>',$nbrvoyelles;


?>

