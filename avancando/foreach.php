<?php

$contasCorrentes = [
    '123.456.789-10' => [
    'titular' =>'Ana' ,
    'saldo' => 100
    ],
    '123.406.789-15' => [
    'titular' =>'Bruno' ,
    'saldo' => 500
    ],
    '123.456.789-19' =>[
    'titular' =>'Pedro' ,
    'saldo' => 300
    ]
];
$contasCorrentes['123.456.766-200'] = [
    'titular' => 'Claudia',
    'saldo' => 600
];
$contasCorrentes[] = [
    'titular' => 'Claudia2',
    'saldo' => 600
];
// QUANDO O ÍNDICE É DO TIPO STRING E NÃO PODE SER INCREMENTADO,
// O PHP COLOCA AS INFORMAÇÕES NO PRÓXIMO ÍNDICE DISPONÍVEL(GERALMENTE SENDO O)
// NESSES CASOS É NECESSÁRIO INFORMAR O ÍNDICE  

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf." ".$conta['titular']." ".$conta['saldo'].PHP_EOL;
}