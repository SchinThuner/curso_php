<?php

require_once 'Conta.php';
require_once 'Titular.php';
$primeiraConta = new Conta(new Titular('123.456.789-10','Schindler Thuner'));
//$primeiraConta->defineCpfTitular('123.456.789-10');
//$primeiraConta->defineNomeTitular('Schindler Thuner');

$primeiraConta->deposita(400);
$segundaConta = new Conta(new Titular('987.654.321-10', 'tristana')); //testando validação do nome.
echo $primeiraConta->recuperaNomeTitular().PHP_EOL;
echo $primeiraConta->recuperaCpfTitular().PHP_EOL;
var_dump($primeiraConta);
//unset($segundaConta); retirando a referência da variável segundaConta
echo Conta::recuperaNumeroDeContas();