<?php
class Pessoa
{
    public string $nome;
    public CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {

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

    public function validaNomeTitular(string $nomeTitular) : void
    {
       if(strlen($nomeTitular) < 5)
       {
           echo "Digite um nome com pelo menos de 5 caracteres";
           exit();
       }
   
    }
}