<?php

class conta
{
 //definir dados da conta
 public string $cpfTitular;
 public string $nomeTitular;
 public float $saldo = 0;

 //DEFINE AS INFORMAÇÕES DO CLIENTE

 public function defineCpfTitular(string $cpf) : void
 {
    $this->cpfTitular = $cpf;
 }

 public function defineNomeTitular(string $nome) : void
 {
    $this->nomeTitular = $nome;
 }

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
}