<?php

$jour = true;

function bonjour($jour){
    if ($jour){
        return "Bonjour";
    }else{
        return "Bonsoir";
    }
}

echo bonjour($jour);