<?php
require_once 'autoload.php';

use Alura\Banco\Modelo\{Pessoa,CPF,Endereco};
use Alura\Banco\Modelo\Conta\{Conta,Titular}; 

$conta = new Conta(new Titular('maria',new CPF('123.456.789-10'),new Endereco('BH','tereza','rua ai', '77')));

$conta->deposita(400);
$conta->saca(100);

echo $conta->recuperaSaldo().PHP_EOL;
echo $conta->recuperaNomeTitular().PHP_EOL;