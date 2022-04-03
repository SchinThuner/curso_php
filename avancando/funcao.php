<?php

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

function sacar($conta,$valorDoSaque){
    if ($valorDoSaque >= $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    }else{
        $conta['saldo'] -= $valorDoSaque;
    }
    return $conta;
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
    $contasCorrentes['123.456.766-200'] = sacar($contasCorrentes['123.406.789-15'],800);
    $contasCorrentes['123.406.789-15'] = sacar($contasCorrentes['123.406.789-15'],500);

foreach ($contasCorrentes as $cpf => $conta)  { 
    exibeMensagem($cpf." ".$conta['titular']." ".$conta['saldo']);
}