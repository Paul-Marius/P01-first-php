<?php

$preturiKg = [
    'mere' => 6,
    'cirese' => 3,
    'pere' => 7,
];

$clienti = [
    'gheorghe' => [
        'mere' => 23,
        'pere' => 43
    ],
    'vasile' => [
        'cirese' => 123,
        'pere' => 43
    ],
    'ghita' => [
        'cirese' => 123,
        'mere' => 43,
        'pere' => 43
    ],
    'ion' => [
        'cirese' => 13,
        'mere' => 43,
        'pere' => 43,
        'cartofi' => 12
    ],
];

$preturi = [];
$total = 0;
foreach ($clienti as $key => $value) {
    $pretFermierTotal = 0;

    foreach ($value as $k => $v) {
        // to pass cartofi
        if (!isset($preturiKg[$k])) {
            continue;
        }

        var_dump($v);
        
        $pretFruct = $preturiKg[$k];
        
        var_dump($pretFruct);
       
        $pretTotalFruct = $pretFruct * $v;
        var_dump($pretTotalFruct);
        $pretFermierTotal += $pretTotalFruct;
    }
    $total += $pretFermierTotal;
    $preturi[$key] = $pretFermierTotal;
    var_dump($value);
    
}

var_dump($preturi);

var_dump($total);
