<?php

class conta
{
 //definir dados da conta
 private string $cpfTitular;
 private string $nomeTitular;
 private float $saldo;
 private static $numeroDeContas = 0;

 public function __construct(string $cpfTitular, string $nomeTitular)
 {
    $this->cpfTitular = $cpfTitular;
    $this->validaNomeTitular($nomeTitular);
    $this->nomeTitular = $nomeTitular;
    $this->saldo = 0;
    self::$numeroDeContas++;    
 }
 
 public function __destruct()
 {
     self::$numeroDeContas--;
 }
 //DEFINE AS INFORMAÇÕES DO CLIENTE
// Com o construtor não precisamos mais desses métodos
 /*
 public function defineCpfTitular(string $cpf) : void
 {
    $this->cpfTitular = $cpf;
 }

 public function defineNomeTitular(string $nome) : void
 {
    $this->nomeTitular = $nome;
 }
*/
 //RETORNA AS INFORMAÇÕES REQUERIDAS PELO USUÁRIO

 public function recuperaCpfTitular() : string
 {
     return $this->cpfTitular;
 }

 public function recuperaNomeTitular() : string
 {
     return $this->nomeTitular;
 }

 //MÉTODOS PARA SACAR E DEPOSITAR

 public function saca($valorASacar) : void
 {
    if($valorASacar > $this->saldo){
        echo "Saldo indisponível";
        return;
    }
    $this->saldo -= $valorASacar;
 }

 public function deposita($valorADepositar) : void
 {
     if ($valorADepositar < 0) {
        echo "Você não pode efetuar deposito de valores negativos";
         return;
     }
     $this->saldo += $valorADepositar;
 }
 public function transferir(float $valorATransferir,conta $contaDestino) : void
 {
    if ($valorATransferir > $this->saldo) {
        echo "Saldo indisponível";
        return;
    }
    $this->sacar($valorATransferir);
    $contaDestino->depositar($valorATransferir);
 }
 private function validaNomeTitular(string $nomeTitular) : void
 {
    if(strlen($nomeTitular) < 5)
    {
        echo "Digite um nome com pelo menos de 5 caracteres";
        exit();
    }

 }

 public static function recuperaNumeroDeContas() : int
 {
     return conta::$numeroDeContas;
 }
}