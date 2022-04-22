<?php

namespace Alura\Banco\Servicos;

use Alura\Banco\Modelo\Funcionario;

class controladorDeBonificacoes
{
    private float $totalDeBonificacoes = 0;

    public function adicionaBonificacoesDe(Funcionario $funcionario)
    {
        $this->totalDeBonificacoes += $funcionario->calculaBonificacao();
    }
    public function recuperaTotal() : float 
    {
        return $this->totalDeBonificacoes;
    } 
}