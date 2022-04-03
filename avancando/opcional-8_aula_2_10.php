<?php

$carro = [
    'LMS-2312' => [
        'marca' =>'VW',
        'modelo' => 'Golf'
        ] ,
    'LMS-2313' => [
        'marca' => 'Fiat',
        'modelo' => '147'
        ] ,
    ];
    
$carro['LMS-2314'] = [
        'marca' => 'Porshe',
        'modelo' => '201'
]; 

foreach ($carro as $placa => $tipocarro) {
    echo $placa." ".$tipocarro['marca']." ".$tipocarro['modelo'].PHP_EOL;
}

