<?php

$conta1 = [
    'titular' => 'Ana',
    'saldo' => 100
];
$conta2 = [
    'titular' => 'Maria',
    'saldo' => 200
];
$conta3 = [
    'titular' => 'Pedro',
    'saldo' => 300
];
$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i=0; $i < count($contasCorrentes); $i++) { 
    echo $contasCorrentes[$i]['titular'].PHP_EOL;
}

