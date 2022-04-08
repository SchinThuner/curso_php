<?php

require_once 'Conta.php';

$primeiraConta = new conta();
$primeiraConta->defineCpfTitular('123.456.789-10');
$primeiraConta->defineNomeTitular('Schindler Thuner');
$primeiraConta->deposita(400);
//var_dump($primeiraConta);
echo $primeiraConta->recuperaNomeTitular();
echo PHP_EOL;
echo $primeiraConta->recuperaCpfTitular();