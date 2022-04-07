<?php

function criarConta(string $cpf, string $nomeDoTitular, float $saldo)
{
    return [
        $cpf => [
            'titular' => $nomeDoTitular,
            'saldo' => $saldo,
        ]
        ];
}