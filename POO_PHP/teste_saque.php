<?php

use Alura\Banco\Modelo\{CPF,Endereco};
use Alura\Banco\Modelo\Conta\{ContaCorrente,ContaPoupanca,Titular}; 

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular('maria',new CPF('123.456.789-10'),
    new Endereco('BH','tereza','rua ai', '77')));

$conta->deposita(400);
$conta->saca(100);

echo $conta->recuperaSaldo().PHP_EOL;