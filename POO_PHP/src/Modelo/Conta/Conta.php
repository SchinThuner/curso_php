<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{

 //definir dados da conta

 private Titular $titular;
 private float $saldo;
 private static $numeroDeContas = 0;

 public function __construct(Titular $titular)
 {
    $this->titular = $titular;
    $this->saldo = 0;
    self::$numeroDeContas++;    
 }
 
 public function __destruct()
 {
     self::$numeroDeContas--;
 }

//--------

 //MÉTODOS PARA SACAR E DEPOSITAR

 public function saca($valorASacar) : void
 {
     $tarifaSaque =  $valorASacar * 0.05;
     $valorSaque = $valorASacar + $tarifaSaque;
    if($valorSaque > $this->saldo){
        echo "Saldo indisponível";
        return;
    }
    $this->saldo -= $valorSaque;
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
 //-----

// Métodos para buscar as informações do titular da conta
//está em outra classe

 public function recuperaNomeTitular() :string
 {
     return $this->titular->recuperaNome();
 }

 public function recuperaCpfTitular() :string 
 {
     return $this->titular->recuperaCpf();
 }

//------

 public static function recuperaNumeroDeContas() : int
 {
     return conta::$numeroDeContas;
 }

 public function recuperaSaldo() : float 
 {
     return $this->saldo;
 }
}