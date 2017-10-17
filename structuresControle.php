<?php

$l = 10;
$h = 10;
$nbBomb = 25;

// Remplit tt tab d'astérisques
for($i=0;$i<$l;$i++){
    for($j=0;$j<$h;$j++){
        $tab[$i][$j] = "*";
    }
}

// Place bombes
for($i=0;$i<$nbBomb;$i++){
    
    $x = rand(0, $l);
    $y = rand(0, $h);
    if( $tab[$x][$y]=="B" ){
        $i--;
        continue;
    }
    
    // Pas de bombe
    
    $tab[$x][$y] = "B";
}

// Affichage
for($i=0;$i<$l;$i++){
    for($j=0;$j<$h;$j++){
        echo $tab[$i][$j];
    }
    
    echo "\n";
}