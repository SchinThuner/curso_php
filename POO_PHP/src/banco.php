<?php

require_once 'Conta.php';

$primeiraConta = new conta('123.456.789-10','Schindler Thuner');
//$primeiraConta->defineCpfTitular('123.456.789-10');
//$primeiraConta->defineNomeTitular('Schindler Thuner');
$primeiraConta->deposita(400);
//var_dump($primeiraConta);
$segundaConta = new conta('987.654.321-10', 'tristana'); //testando validação do nome.
echo $primeiraConta->recuperaNomeTitular().PHP_EOL;
echo $primeiraConta->recuperaCpfTitular().PHP_EOL;
echo conta::recuperaNumeroDeContas();