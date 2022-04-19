<?php

namespace POO_PHP\src\Modelo\Endereco;

class Endereco 
{
 private string $cidade;
 private string $bairro;
 private string $rua;
 private string $numero;

 public function __construct(string $cidade, string $bairro, string $rua, string $numero)
 {
     $this->cidade = $cidade;
     $this->bairro = $bairro;
     $this->rua = $rua;
     $this->numero = $numero;
 }
 //---------

 //Métodos de Acesso
 
 public function retornaCidade() : string 
 {
     return $this->cidade;
 }
 public function retornaBairro() : string 
 {
     return $this->bairro;
 }
 public function retornaRua() : string 
 {
     return $this->rua;
 }
 public function retornaNumero() : string 
 {
     return $this->numero;
 }

}