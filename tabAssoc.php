<?php

$assoc = ["jamaique"=>"kingston", "madagascar"=>"antananarivo", "luxembourg"=>"luxembourg"];
$pays = array_keys($assoc);
$capitales = array_values($assoc);
sort($pays);

var_dump($pays);

var_dump($capitales);

$pays2 = array_diff($pays, $capitales);
var_dump($pays2) ;














$tab = [];
$tab[] = "nouv valeur";
