<?php

namespace POO_PHP\src\Modelo\Pessoa;

class Pessoa
{
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }
    
    public function recuperaNome() : string 
    {
        return $this->nome;
    }
    public function recuperaCpf() : string 
    {
        return $this->cpf->recuperaCpf();
    }

    protected function validaNomeTitular(string $nomeTitular) : void
    {
       if(strlen($nomeTitular) < 5)
       {
           echo "Digite um nome com pelo menos de 5 caracteres";
           exit();
       }
   
    }
}