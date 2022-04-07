<?php

class conta
{
 //definir dados da conta
 public string $cpfTitular;
 public string $nomeTitular;
 public float $saldo;

 public function sacar($valorASacar)
 {
    if($valorASacar > $this->saldo){
        echo "Você não pode efetuar o saque";
    }else {
        $this->saldo -= $valorASacar;
    }
 }

 public function depositar($valorADepositar) : void
 {
     if ($valorADepositar > 0) {
         $this->saldo += $valorADepositar;
     }else {
         echo "Você não pode efetuar deposito de valores negativos";
     }
 }
}