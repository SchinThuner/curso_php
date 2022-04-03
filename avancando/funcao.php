<?php

require_once 'funcao_pt2.php';

/*function exibeMensagem(string $mensagem) 
{
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta,float $valorDoSaque) : array
{
    if ($valorDoSaque >= $conta['saldo']) 
    {
        exibeMensagem("Você não pode sacar");
    }else{
        $conta['saldo'] -= $valorDoSaque;
    }
    return $conta;
}
*/
function depositar(array $conta, float $valorDoDeposito) : array //define os tipos de dados dos
{                                                               // parametros e do retorno
    if ($valorDoDeposito > 0) {
        $conta['saldo'] += $valorDoDeposito;
    }else {
        exibeMensagem("Só é possível depositar valores positivos");
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
    $contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'],900);

foreach ($contasCorrentes as $cpf => $conta)  
{ 
    //exibeMensagem($cpf." ".$conta['titular']." ".$conta['saldo']);
    //exibeMensagem("$cpf $conta[titular] $conta[saldo]"); // modo simples de exibir strings onde há concatenação
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");// modo complexo de exibir strings onde há concatenação
}