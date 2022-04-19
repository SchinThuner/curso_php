<?php

namespace POO_PHP\src\Modelo\Conta\Titular;

use Desktop\Projetos_Schindler\curso_PHP\POO_PHP\src\Modelo\Pessoa;
use POO_PHP\src\Modelo\CPF;
use POO_PHP\src\Modelo\Endereco;


class Titular extends POO_PHP\src\Modelo\Pessoa
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
