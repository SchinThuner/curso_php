<?php

use Alura\Banco\Servicos\controladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF,Funcionario};

require_once 'autoload.php';

$umFuncionario = new Funcionario('Schindler',
                new CPF('123.456.789-10'),
                'Estudante',
                1000
        );

$umaFuncionaria = new Funcionario('Jéssica',
                new CPF('019.876.543-21'),
                'Jornalista',
                3000
        );

$controlador = new controladorDeBonificacoes();
$controlador->adicionaBonificacoesDe($umaFuncionaria);
$controlador->adicionaBonificacoesDe($umFuncionario);

echo $controlador->recuperaTotal().PHP_EOL;