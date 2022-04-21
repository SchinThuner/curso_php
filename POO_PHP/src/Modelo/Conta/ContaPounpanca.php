<?php

class ContaPoupanca extends conta
{
    public function saca($valorASacar)
    {$tarifaSaque =  $valorASacar * 0.03;
        $valorSaque = $valorASacar + $tarifaSaque;
       if($valorSaque > $this->saldo){
           echo "Saldo indisponível";
           return;
       }
       $this->saldo -= $valorSaque;

    }
}