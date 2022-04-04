<?php

require_once 'funcao_referencia.php';


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
    $contasCorrentes['123.456.766-200'] = sacar($contasCorrentes['123.456.766-200'],800);
    $contasCorrentes['123.406.789-15'] = sacar($contasCorrentes['123.406.789-15'],500);
    $contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'],900);
    titularLetrasMaiusculas($contasCorrentes['123.456.789-19']);

    //titularEmTudo($contasCorrentes);
    //improviso ainda não entendi o motivo do foreach não retornar tudo maiusculo naquela função
    //funçao titularEmtudo funcionando estranho
/*foreach ($contasCorrentes as $cpf => $conta)  
{ 
    titularLetrasMaiusculas($contasCorrentes[$cpf]);
}*/

foreach ($contasCorrentes as $cpf => $conta)  
{ 
    //list('titular' => $titular, 'saldo' => $saldo) = $conta; -> maneira normal de usar o list
    ['titular' => $titular, 'saldo' => $saldo] = $conta; // -> maneira mais enchuta de usar o list
    //exibeMensagem($cpf." ".$conta['titular']." ".$conta['saldo']);
    //exibeMensagem("$cpf $conta[titular] $conta[saldo]"); // modo simples de exibir strings onde há concatenação
    //exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");// modo complexo de exibir strings onde há concatenação
    exibeMensagem("$cpf $titular $saldo");// usando a função list
}