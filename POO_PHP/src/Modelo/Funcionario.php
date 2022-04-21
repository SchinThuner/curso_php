<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\{CPF,Pessoa};
//use src\Modelo\Pessoa;



class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
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
}