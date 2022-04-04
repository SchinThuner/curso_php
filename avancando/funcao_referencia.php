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
function depositar(array $conta, float $valorDoDeposito) : array //define os tipos de dados dos
{                                                               // parametros e do retorno
    if ($valorDoDeposito > 0) {
        $conta['saldo'] += $valorDoDeposito;
    }else {
        exibeMensagem("Só é possível depositar valores positivos");
    }
    return $conta;
}

function titularLetrasMaiusculas(array &$conta)
{
    //echo $conta['titular'].PHP_EOL;
    $conta['titular'] = strtoupper($conta['titular']);
    //echo $conta['titular'].PHP_EOL;
}

function titularEmTudo(array &$contas)
{
    /*foreach ($contas as $cpf => $conta){
        $conta['titular'] = strtoupper($conta['titular']);
        exibeMensagem("{$conta['titular']}");
    }*/
    //$conta['titular'] = strtoupper($conta['titular']);
}