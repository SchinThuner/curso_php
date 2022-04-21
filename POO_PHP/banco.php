<?php
//usando autoload 
require_once 'autoload.php';

use Alura\Banco\Modelo\{CPF,Endereco};
use Alura\Banco\Modelo\Conta\{Conta,Titular}; 

$endereco = new Endereco('Belo Horizonte', 'Terezinha', 'Rua da Bahia', '78A');

$meuNome = new Titular('Schindler Thuner',(new CPF('123.456.789-10')),$endereco);

$outroNome = new Titular('Tristana',new CPF('981.123.456-10'),$endereco);

$primeiraConta = new Conta($meuNome);
$primeiraConta->deposita(400);
$segundaConta = new Conta($outroNome);

echo $primeiraConta->recuperaNomeTitular().PHP_EOL;
echo $primeiraConta->recuperaCpfTitular().PHP_EOL;
echo $primeiraConta->recuperaSaldo().PHP_EOL;

var_dump($primeiraConta);
unset($outroNome);
echo Conta::recuperaNumeroDeContas();
