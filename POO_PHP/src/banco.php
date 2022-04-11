<?php

require_once 'Conta.php';
require_once 'Titular.php';
require_once 'CPF.php';

$meuNome = new Titular('Schindler Thuner',(new CPF('123.456.789-10')));

$outroNome = new Titular('Tristana',new CPF('981.123.456-10'));

$primeiraConta = new Conta($meuNome);
$primeiraConta->deposita(400);
$segundaConta = new Conta($outroNome);

echo $primeiraConta->recuperaNomeTitular().PHP_EOL;
echo $primeiraConta->recuperaCpfTitular().PHP_EOL;

var_dump($primeiraConta);

echo Conta::recuperaNumeroDeContas();
