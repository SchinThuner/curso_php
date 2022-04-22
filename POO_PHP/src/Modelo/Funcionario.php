<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\{CPF,Pessoa};
//use src\Modelo\Pessoa;



class Funcionario extends Pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, string $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }
    public function recuperaCargo()
    {
        return $this->cargo;
    }
    public function alteraNome(string $nome) : void 
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }
    public function recuperaSalario() : float 
    {
        return $this->salario;
    }
    public function calculaBonificacao() : float 
    {
        return $this->salario*0.1;
    }
}