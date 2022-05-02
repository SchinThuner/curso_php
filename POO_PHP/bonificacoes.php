<?php

use Alura\Banco\Servicos\controladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Funcionario,Gerente,Diretor};

require_once 'autoload.php';

$umFuncionario = new Funcionario('Schindler',
                new CPF('123.456.789-10'),
                'Estudante',
                1000
        );

$umaFuncionaria = new Gerente('Jéssica',
                new CPF('019.876.543-21'),
                'Jornalista',
                3000
        );
$umDiretor = new Diretor('Aurora', 
                new CPF('202.122.232-26'),
                'Diretora',
                5000);

$controlador = new controladorDeBonificacoes();
$controlador->adicionaBonificacoesDe($umaFuncionaria);
$controlador->adicionaBonificacoesDe($umFuncionario);
$controlador->adicionaBonificacoesDe($umDiretor);

echo $controlador->recuperaTotal().PHP_EOL;