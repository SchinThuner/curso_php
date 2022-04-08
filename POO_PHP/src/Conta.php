<?php

class conta
{
 //definir dados da conta
 public string $cpfTitular;
 public string $nomeTitular;
 public float $saldo = 0;

 public function sacar($valorASacar) : void
 {
    if($valorASacar > $this->saldo){
        echo "Saldo indisponível";
        return;
    }/*else { //utilizando a ideia de nao usar o else, pois é desnecessário se usado o return antes
       $this->saldo -= $valorASacar;
    }*/ 
    $this->saldo -= $valorASacar;
 }

 public function depositar($valorADepositar) : void
 {
     if ($valorADepositar < 0) {
        echo "Você não pode efetuar deposito de valores negativos";
         return;
     }/*else {
         echo "Você não pode efetuar deposito de valores negativos";
     }*/
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