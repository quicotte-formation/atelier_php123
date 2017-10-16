<?php

$str = "la soupe aux choux***nosferatu***dracula";
$tab = explode("***", $str);

sort($tab);

var_dump($tab);