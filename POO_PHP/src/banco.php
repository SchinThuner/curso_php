<?php

require_once 'Conta.php';
require_once 'Endereco.php';
require_once 'Titular.php';
require_once 'CPF.php';


$endereco = new Endereco('Belo Horizonte', 'Terezinha', 'Rua da Bahia', '78A');

$meuNome = new Titular('Schindler Thuner',(new CPF('123.456.789-10')),$endereco);

$outroNome = new Titular('Tristana',new CPF('981.123.456-10'),$endereco);

$primeiraConta = new Conta($meuNome);
$primeiraConta->deposita(400);
$segundaConta = new Conta($outroNome);

echo $primeiraConta->recuperaNomeTitular().PHP_EOL;
echo $primeiraConta->recuperaCpfTitular().PHP_EOL;

var_dump($primeiraConta);

echo Conta::recuperaNumeroDeContas();
