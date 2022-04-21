<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\{Pessoa,CPF,Endereco}; // importando com o 'use' usando chaves classes em um mesmo namespace
//use src\Modelo\CPF;
//use src\Modelo\Endereco;


class Titular extends Pessoa
{
 private Endereco $endereco;

 public function __construct (string $nome, CPF $cpf, Endereco $endereco)
 {
  parent::__construct($nome, $cpf); 
  $this->endereco = $endereco;
 }

 public function recuperaEndereco() : Endereco
 {
     return $this->endereco;
 }
}
