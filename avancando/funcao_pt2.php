<?php 
function exibeMensagem(string $mensagem) 
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