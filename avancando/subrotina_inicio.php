<?php

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

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
$contasCorrentes['123.456.766-200']['saldo'] -= 400;
foreach ($contasCorrentes as $cpf => $conta)  { 
    exibeMensagem($cpf." ".$conta['titular']." ".$conta['saldo']);
}
