<?php

class Titular 
{
 private string $nome;  
 private CPF $cpf;

 public function __construct (string $nome, CPF $cpf )
 {
  
  $this->validaNomeTitular($nome);
  $this->nome = $nome;
  $this->cpf = $cpf; 
 }

 //----
//Métodos que retornam as informações do titular

 public function recuperaNome() :string 
 {
     return $this->nome;
 }

 public function recuperaCpf() : string
 {
    return $this->cpf->recuperaNumero();
 }

//----------------

//Métodos validadores

  private function validaNomeTitular(string $nomeTitular) : void
 {
    if(strlen($nomeTitular) < 5)
    {
        echo "Digite um nome com pelo menos de 5 caracteres";
        exit();
    }

 }

 //-------

}
