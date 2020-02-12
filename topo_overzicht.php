<?php

$arr = array();
echo "hoeveel landen wil je toevoegen?".PHP_EOL;
$nummer = readline();

if (!is_numeric($nummer)){
    exit($nummer." is geen getal");
}
for($i= 1; $i <= $nummer; $i++){
    echo "Welk land wil je toevoegen?".PHP_EOL;
    $land = readline();
    echo "En wat is de hoofdstad van ".$land."?".PHP_EOL;
    $stad = readline();
    $arr[$land] = $stad;
}

foreach($arr as $land => $destad){
    print("De hoofdstad van ".$land." is ".$destad.PHP_EOL);
}
