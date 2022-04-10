<?php

class Titular 
{
 private string $cpf;
 private string $nome;   

 public function __construct (string $cpf, string $nome)
 {
  $this->cpf = $cpf;
  $this->validaNomeTitular($nome);
  $this->nome = $nome;   
 }

 //----
//Métodos que retornam as informações do titular

 public function recuperaNome() :string 
 {
     return $this->nome;
 }

 public function recuperaCpf() : string
 {
    return $this->cpf;
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
